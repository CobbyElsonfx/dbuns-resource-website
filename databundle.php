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
                            placeholder="Clement Asiedu" id="momo_name" name="momo_name"
                            class="form-control custom-input" pattern="[a-zA-Z\s]+" title="Please enter only alphabets"
                            required>
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
                            name="momo_number" class="form-control custom-input"
                            pattern="^(054|055|059|053|024|025)\d{7}$"
                            title="We do not serve data to this network provider, contact network operator" required>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <div class="mb-2">
                                <label for="package" class="form-label ">Choose Package:</label>
                                <select id="package" name="package" class="form-select form-control custom-input"
                                    required>
                                    <option value="">Select Package</option>
                                    <!-- Dynamically generate options using JavaScript -->
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 ">
                            <div class="mb-0">
                                <label for="package_mb" class="form-label">Package in MB:</label>
                                <input type="text" id="package_mb" name="package_mb" class="form-control custom-input"
                                    readonly>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="mb-0">
                                <label for="amount_paid" class="form-label">Amount Paid (GHC):</label>
                                <input type="text" id="amount_paid" name="amount_paid" class="form-control custom-input"
                                    readonly>
                                <small><b>Note:</b> Please confirm if the amount paid is as shown above before
                                    submission</small>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="custom-button rounded-3">Submit</button>
                </form>
            </div>
        </div>
        <hr>
        <!-- New Section with Bootstrap Cards -->
        <section class="our-packages-section">
            <div class="container ">
                <div class="row ">
                    <div class="col-md-12 m-auto">
                        <h2 class="packages-header">Our <b class="text-dark">Packages</b></h2>
                        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                            <!-- Carousel indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                <li data-target="#myCarousel" data-slide-to="3"></li>
                            </ol>
                            <!-- Wrapper for carousel items -->
                            <div class="carousel-inner">
                            <div class="carousel-item ">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">

                                            <div class="thumb-content">
                                                    <div class="gigcard">
                                                        <div class="package-size"><span class="size">1</span><span
                                                                class="subscript">gig</span></div>
                                                        <div class="amount">GHC 4.5</div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">
                                            <div class="thumb-content">
                                                    <div class="gigcard">
                                                        <div class="package-size"><span class="size">2</span><span
                                                                class="subscript">gig</span></div>
                                                        <div class="amount">GHC 8</div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">
                                            <div class="thumb-content">
                                                    <div class="gigcard">
                                                        <div class="package-size"><span class="size">3</span><span
                                                                class="subscript">gig</span></div>
                                                        <div class="amount">GHC 12</div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">

                                            <div class="thumb-content">
                                                    <div class="gigcard">
                                                        <div class="package-size"><span class="size">14</span><span
                                                                class="subscript">gig</span></div>
                                                        <div class="amount">GHC 47</div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">

                                            <div class="thumb-content">
                                                    <div class="gigcard">
                                                        <div class="package-size"><span class="size">10</span><span
                                                                class="subscript">gig</span></div>
                                                        <div class="amount">GHC 35</div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">
                                            <div class="thumb-content">
                                                    <div class="gigcard">
                                                        <div class="package-size"><span class="size">12</span><span
                                                                class="subscript">gig</span></div>
                                                        <div class="amount">GHC 40</div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">
                                            <div class="thumb-content">
                                                    <div class="gigcard">
                                                        <div class="package-size"><span class="size">13</span><span
                                                                class="subscript">gig</span></div>
                                                        <div class="amount">GHC 43</div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">

                                            <div class="thumb-content">
                                                    <div class="gigcard">
                                                        <div class="package-size"><span class="size">14</span><span
                                                                class="subscript">gig</span></div>
                                                        <div class="amount">GHC 47</div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">
                                            <div class="thumb-content">
                                                    <div class="gigcard">
                                                        <div class="package-size"><span class="size">15</span><span
                                                                class="subscript">gig</span></div>
                                                        <div class="amount">GHC 50</div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">

                                            <div class="thumb-content">
                                                    <div class="gigcard">
                                                        <div class="package-size"><span class="size">18</span><span
                                                                class="subscript">gig</span></div>
                                                        <div class="amount">GHC 60</div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">

                                            <div class="thumb-content">
                                                    <div class="gigcard">
                                                        <div class="package-size"><span class="size">20</span><span
                                                                class="subscript">gig</span></div>
                                                        <div class="amount">GHC 67</div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">

                                            <div class="thumb-content">
                                                    <div class="gigcard">
                                                        <div class="package-size"><span class="size">25</span><span
                                                                class="subscript">gig</span></div>
                                                        <div class="amount">GHC 83</div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">
                                            <div class="thumb-content">
                                                    <div class="gigcard">
                                                        <div class="package-size"><span class="size">31</span><span
                                                                class="subscript">gig</span></div>
                                                        <div class="amount">GHC 100</div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">

                                            <div class="thumb-content">
                                                    <div class="gigcard">
                                                        <div class="package-size"><span class="size">50</span><span
                                                                class="subscript">gig</span></div>
                                                        <div class="amount">GHC 155</div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">

                                            <div class="thumb-content">
                                                    <div class="gigcard">
                                                        <div class="package-size"><span class="size">75</span><span
                                                                class="subscript">gig</span></div>
                                                        <div class="amount">GHC 234</div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">
                                                <div class="thumb-content">
                                                    <div class="gigcard">
                                                        <div class="package-size"><span class="size">100</span><span
                                                                class="subscript">gig</span></div>
                                                        <div class="amount">GHC 310</div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Carousel controls -->
                            <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>





        </section>


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
        const packages = [
            { size: '5', unit: 'gig', amount: '$20' },
            { size: '10', unit: 'gig', amount: '$35' },
            // Add more packages as needed
        ];

        const container = document.getElementById('card-container');

        packages.forEach(pkg => {
            const card = document.createElement('div');
            card.classList.add('gigcard');

            card.innerHTML = `
                <div class="package-size"><span class="size">${pkg.size}</span><span class="subscript">${pkg.unit}</span></div>
                <div class="amount">${pkg.amount}</div>
            `;

            container.appendChild(card);
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