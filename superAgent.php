<?php require_once 'header.php';
use App\classes\Helper;

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
                <h2>Buy Internet Bundles</h2>
                <form action="" method="POST" name="form">
                    <div class="mb-3">
                        <label for="momo_number" class="form-label">MOMO Number:</label>
                        <input type="text" placeholder="eg.0558119187" maxlength="10" id="momo_number"
                            name="momo_number" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="last_four_digits" classs="form-label">Last Four Digits of Transaction ID:</label>
                        <input type="text" id="last_four_digits" placeholder="2345" maxlength="4"
                            name="last_four_digits" class="form-control" pattern="[0-9]{4}"
                            title="Please enter exactly 4 digits" required>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="package" class="form-label">Choose Package:</label>
                                <select id="package" name="package" class="form-select form-control" required>
                                    <option value="">Select Package</option>
                                    <!-- Dynamically generate options using JavaScript -->
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="amount_paid" class="form-label">Amount to be Paid (GHC):</label>
                                <input type="text" id="amount_paid" name="amount_paid" class="form-control" readonly>
                            </div>
                        </div>

                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <?php
    require_once 'footer.php';
    ?>
    <script>
        const scriptURL = 'https://script.google.com/macros/s/AKfycbx6cinQr9l2sZLlFa_J36mK42BRZMins81AxrG-xN30hZKkGEXH5BWFfmzUtdgV3mjb/exec'

        const form = document.forms['form']

        form.addEventListener('submit', e => {
            e.preventDefault()
            fetch(scriptURL, { method: 'POST', body: new FormData(form) })
                .then(response => alert("Thank you! order submitted successfully."))
                .then(() => { window.location.reload(); })
                .catch(error => console.error('Error!', error.message, error))
        })
    </script>

    <script>
        // Object containing bundle packages and their corresponding prices
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

            // Function to update amount paid based on selected package
            function updateAmountPaid() {
                const selectedPackage = packageSelect.value;

                if (selectedPackage) {
                    const price = bundlePackages[selectedPackage]; // Get price from bundlePackages object
                    amountPaidInput.value = price;
                } else {
                    amountPaidInput.value = ''; // Clear the input if no package is selected
                }
            }

            // Dynamically generate options for select dropdown
            for (const [packageName, price] of Object.entries(bundlePackages)) {
                const option = document.createElement('option');
                option.value = packageName;
                option.textContent = packageName;
                packageSelect.appendChild(option);
            }

            // Listen for changes in the selected package
            packageSelect.addEventListener('change', updateAmountPaid);

            // Update amount paid on page load (if package is pre-selected)
            updateAmountPaid();
        });
    </script>