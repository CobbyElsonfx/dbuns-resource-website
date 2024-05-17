<?php
require_once 'header.php';
use App\classes\Helper;
use App\classes\Site;
$secretApi = Site::useSecretApi();
$api = mysqli_fetch_assoc($secretApi);
?>
<div>
    <div class="container">
        <div class="row">
            <!-- Image Column (hidden on small screens) -->
            <div class="col-lg-6 d-none d-lg-block">
                <img src="./assets/images/africa.png" class="img-fluid" alt="Image">
            </div>
            <!-- Form Column -->
            <div class="col-lg-6">
                <h2>Affordable Internet Bundles</h2>
                <h5>Please ensure that payment is made before completing the form.</h5>
                <form class="" action="" method="POST" name="form">
                    <div class="mb-2">
                        <label for="momo_name" class="form-label">MOMO Name</label>
                        <input type="text" data-toggle="tooltip"
                            title="Input the name on the momo number used for payment" maxlength="30"
                            placeholder="Clement Asiedu" id="momo_name" name="momo_name" class="form-control custom-input"
                            pattern="[a-zA-Z\s]+" title="Please enter only alphabets" required>
                    </div>

                    <!-- Hidden input field for reference -->
                    <input type="hidden" id="reference" name="reference">
					<div>
						
					</div>
                    <!-- Hidden input field for megabytes -->
                    <input type="hidden" id="megabytes" name="megabytes">

                    <div class="mb-2">
                        <label for="momo_number" class="form-label">Beneficiary Number:</label>
                        <input type="text" maxlength="10" placeholder="eg.0254 000 000" id="momo_number"
                            name="momo_number" class="form-control custom-input" pattern="^(054|055|059|053|024|025)\d{7}$"
                            title="We do not serve data to this network provider, contact network operator" required>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <div class="mb-2">
                                <label for="package" class="form-label ">Choose Package:</label>
                                <select id="package" name="package" class="form-select form-control custom-input" required>
                                    <option value="">Select Package</option>
                                    <!-- Dynamically generate options using JavaScript -->
                                </select>
                            </div>
                        </div>
                      
                        <div class="col-sm-6 col-md-4 ">
                            <div class="mb-0">
                                <label for="package_mb" class="form-label">Package in MB:</label>
                                <input type="text" id="package_mb" name="package_mb" class="form-control custom-input" readonly>
                            </div>
                        </div>
						<div class="col-sm-6 col-md-4">
                            <div class="mb-0">
                                <label for="amount_paid" class="form-label">Amount Paid (GHC):</label>
                                <input type="text" id="amount_paid" name="amount_paid" class="form-control custom-input" readonly>
                                <small><b>Note:</b> Please confirm if the amount paid is as shown above before submission</small>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="custom-button rounded-3">Submit</button>
                </form>
            </div>
        </div>
		<!-- New Section with Bootstrap Cards -->
		<div class="container mt-5">
    <h2 class="text-center mb-4">Data Bundle Packages</h2>
    
</div>


    </div>


    <?php
    require_once 'footer.php';
    ?>

    <!-- form submission -->
    <script>
        const scriptURL = '<?= $api['url'] ?>';
        const form = document.forms['form'];

        function generateReference() {
            const characters = '0123456789ABCDEFGHIJKLMNPQRSTUVWXYZ';
            let reference = '';
            for (let i = 0; i < 4; i++) {
                reference += characters.charAt(Math.floor(Math.random() * characters.length));
            }
            return reference;
        }

        form.addEventListener('submit', e => {
            e.preventDefault();
            const submitButton = form.querySelector('button[type="submit"]');
            submitButton.disabled = true;
            submitButton.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Submitting...';

            // Generate random four-digit reference and set it in the hidden input field
            const reference = generateReference();
            document.getElementById('reference').value = reference;

            const formData = new FormData(form);

            fetch(scriptURL, {
                method: 'POST',
                body: formData
            })
            .then(response => {
                submitButton.disabled = false;
                submitButton.innerHTML = 'Submit';
                if (response.ok) {
                    // Prompt user to copy the reference
                    const copyText = document.createElement('textarea');
                    copyText.value = reference;
                    document.body.appendChild(copyText);
                    copyText.select();
                    document.execCommand('copy');
                    document.body.removeChild(copyText);

                    alert("Thank you! Order submitted successfully. Reference: " + reference + " (copied to clipboard)");
                    form.reset();
                    document.getElementById('package_mb').value = ''; // Clear the package_mb field
                } else {
                    throw new Error('Network response was not ok');
                }
            })
            .catch(error => {
                submitButton.disabled = false;
                submitButton.innerHTML = 'Submit';
                console.error('Error!', error.message, error);
                alert("An error occurred while submitting the form. Please try again later.");
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const inputField = document.getElementById('momo_number');
            inputField.addEventListener('input', function () {
                this.value = this.value.replace(/[^0-9]/g, ''); // Remove non-numeric characters
                if (this.value.length > 10) {
                    this.value = this.value.slice(0, 10); // Limit input to 10 characters
                }

                if (this.value.length > 0 && this.value[0] !== '0') {
                    this.value = '0' + this.value;
                }
            });
        });
    </script>

    <script>
        const bundlePackages = {
            '1GB': 4.5,
            '2GB': 8,
            '3GB': 12,
            '4GB': 16,
            '5GB': 20,
            '6GB': 24,
            '7GB': 27,
            '8GB': 30,
            '9GB': 33,
            '10GB': 35,
            '12GB': 40,
            '13GB': 43,
            '14GB': 47,
            '15GB': 50,
            '16GB': 54,
            '18GB': 60,
            '20GB': 67,
            '25GB': 83,
            '31GB': 100,
            '50GB': 155,
            '75GB': 234,
            '100GB': 310
        };

        document.addEventListener('DOMContentLoaded', function () {
            const packageSelect = document.getElementById('package');
            const amountPaidInput = document.getElementById('amount_paid');
            const packageMbInput = document.getElementById('package_mb');

            function updateAmountPaidAndMb() {
                const selectedPackage = packageSelect.value;
                if (selectedPackage) {
                    const price = bundlePackages[selectedPackage];
                    const packageInMb = parseInt(selectedPackage) * 1024; // Convert GB to MB

                    amountPaidInput.value = price;
                    packageMbInput.value = packageInMb + ' MB';
                    document.getElementById('megabytes').value = packageInMb; // Set the hidden input field
                } else {
                    amountPaidInput.value = '';
                    packageMbInput.value = '';
                    document.getElementById('megabytes').value = ''; // Clear the hidden input field
                }
            }

            for (const [packageName, price] of Object.entries(bundlePackages)) {
                const option = document.createElement('option');
                option.value = packageName;
                option.textContent = packageName;
                packageSelect.appendChild(option);
            }

            packageSelect.addEventListener('change', updateAmountPaidAndMb);
            updateAmountPaidAndMb();
        });
    </script>
</div>
