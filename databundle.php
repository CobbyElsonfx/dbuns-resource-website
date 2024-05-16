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
				<h2>Affordable Internet Bundles</h2>
				<h5>Please ensure that payment is made before completing the form.
				</h5>
				<form action="" method="POST" name="form">

					<div class="mb-2">
						<label for="momo_name" class="form-label">MOMO Name</label>
						<input type="text" data-toggle="tooltip"
							title="Input the name on the momo number used for payment" maxlength="30"
							placeholder="Clement Asiedu" id="momo_name" name="momo_name" class="form-control shadow-lg"
							pattern="[a-zA-Z\s]+" title="Please enter only alphabets" required>
					</div>

					<div class="mb-2">
						<label for="last_four_digits" classs="form-label">Last Four Digits of Transaction ID:</label>
						<input type="text" id="last_four_digits" placeholder="1234" maxlength="4"
							name="last_four_digits" class="form-control" pattern="[0-9]{4}"
							title="Please enter exactly 4 digits" required>
						<small class="">Enter last Four (4) digit of the transaction ID from momo receipt</small>

					</div>
					<div class="mb-2">
						<label for="momo_number" class="form-label">Beneficiary Number:</label>
						<input type="text" maxlength="10" placeholder="eg.0254 000 000" id="momo_number"
							name="momo_number" class="form-control" pattern="^(054|055|059|053|024|025)\d{7}$"
							title="We do not serve data to this network provider, contact network operator" required>
					</div>

					<div class="row">
						<div class="col-6">
							<div class="mb-2">
								<label for="package" class="form-label">Choose Package:</label>
								<select id="package" name="package" class="form-select form-control" required>
									<option value="">Select Package</option>
									<!-- Dynamically generate options using JavaScript -->
								</select>
							</div>
						</div>
						<div class="col-6">
							<div class="mb-0">
								<label for="amount_paid" class="form-label">Amount Paid (GHC):</label>
								<input type="text" id="amount_paid" name="amount_paid" class="form-control" readonly>
								<small><b>Note:</b>Please comfirm amount is as shown above before submission</small>
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
	<!-- form submission -->
	<script>
	
    const scriptURL = 'https://script.google.com/macros/s/AKfycbzy7iAsz8BvQMKe1wkySkAJPGK-Up21A3bY19pqUxOLchV1nLsB8JLbRGHanSrTVYrm/exec';
    const form = document.forms['form'];

    form.addEventListener('submit', e => {
        e.preventDefault();
        // Disable the submit button and show loading spinner
        const submitButton = form.querySelector('button[type="submit"]');
        submitButton.disabled = true;
        submitButton.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Submitting...';

        fetch(scriptURL, { method: 'POST', body: new FormData(form) })
            .then(response => {
                // Enable the submit button
                submitButton.disabled = false;
                submitButton.innerHTML = 'Submit';
                if (response.ok) {
                    // If the response is successful, show success message and reload page
                    alert("Thank you! Order submitted successfully.");
                    window.location.reload();
                } else {
                    // If there's an error, show error message
                    throw new Error('Network response was not ok');
                }
            })
            .catch(error => {
                // Enable the submit button
                submitButton.disabled = false;
                submitButton.innerHTML = 'Submit';
                console.error('Error!', error.message, error);
                alert("An error occurred while submitting the form. Please try again later.");
            });
    });


	</script>
	<script>
		document.addEventListener('DOMContentLoaded', function () {
			var inputField = document.getElementById('momo_number');

			inputField.addEventListener('input', function () {
				this.value = this.value.replace(/[^0-9]/g, ''); // Remove non-numeric characters
				if (this.value.length > 10) {
					this.value = this.value.slice(0, 10); // Limit input to 10 characters
				}
			});
		});
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