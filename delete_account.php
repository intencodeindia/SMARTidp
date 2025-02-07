<?php include_once("includes/header.php"); ?>

<style>
      /* Gradient text styling */
      .gradient {
        background: linear-gradient(331deg, #0090f9 0%, #00b09c 100%);
        /* -webkit-background-clip: text; */
        color: transparent;
        /* font-size: 250%; */
    }

    .delete-account {
        max-width: 900px;
        margin: auto;
        padding: 30px;
        background: #ffffff;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        font-family: Arial, sans-serif;
        color: #333;
        line-height: 1.8;
    }

    .delete-account h1 {
        /* color: #0073e6; */
        text-align: center;
        font-size: 2rem;
        font-weight: bold;
    }

    .delete-account p {
        text-align: justify;
        font-size: 1.1rem;
    }

    .delete-account ul {
        list-style-type: disc;
        padding-left: 20px;
    }

</style>

<div class="content-wrapper container my-5">
    <main role="main" class="main-content">
        <section class="delete-account bg-light p-4">
            <h1><span class="gradient">Confirm Account Deletion</span></h1>
            <p>We're sorry to see you go! If you choose to delete your SmartIDP account, your account and all associated data will no longer be accessible. This action is permanent and cannot be undone.</p>

            <h4>Important Information:</h4>
            <ul>
                <li>Ensure there are no pending invoice processes or document approvals in your account.</li>
                <li>Once deleted, all stored invoices, processed documents, and business records will be permanently lost.</li>
                <li>If you have an active subscription, it will be terminated immediately upon deletion.</li>
                <li>Legal or compliance-related data may be retained as per regulatory requirements.</li>
            </ul>

            <h4>Acknowledgments:</h4>
            <form id="deleteAccountForm">
                <input type="checkbox" name="agree" id="agreeCheckbox" required> I have read and agree to the Terms and Conditions.<br>
                <input type="checkbox" name="confirm_data_loss" id="dataLossCheckbox" required> I understand that all my SmartIDP data will be permanently lost.<br>
                <input type="checkbox" name="confirm_final" id="finalCheckbox" required> I acknowledge that this action cannot be reversed.<br>

                <!-- Message to show when checkboxes are not checked -->
                <div id="requiredMessage" class="text-danger mt-3" style="display: none;">
                    <strong>Please check all the required fields before deleting your account.</strong>
                </div>

                <div class="text-center mt-3">
                    <button type="button" class="btn rounded-pill" id="deleteButton" data-bs-toggle="modal" data-bs-target="#deleteSuccessModal" disabled>Delete Account</button>
                </div>
            </form>
        </section>

        <!-- Modal -->
        <div class="modal fade" id="deleteSuccessModal" tabindex="-1" aria-labelledby="deleteSuccessModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteSuccessModalLabel">Request Submitted</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Your account deletion request has been successfully submitted. Our team will process it shortly.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </main>
</div>

<script>
    // Get references to checkboxes, the delete button, and the message
    const agreeCheckbox = document.getElementById('agreeCheckbox');
    const dataLossCheckbox = document.getElementById('dataLossCheckbox');
    const finalCheckbox = document.getElementById('finalCheckbox');
    const deleteButton = document.getElementById('deleteButton');
    const requiredMessage = document.getElementById('requiredMessage');

    // Function to check if all checkboxes are checked
    function checkFormCompletion() {
        // Show the message if not all checkboxes are checked, hide it otherwise
        if (agreeCheckbox.checked && dataLossCheckbox.checked && finalCheckbox.checked) {
            requiredMessage.style.display = 'none'; // Hide the message
            deleteButton.disabled = false; // Enable the delete button
        } else {
            requiredMessage.style.display = 'block'; // Show the message
            deleteButton.disabled = true; // Disable the delete button
        }
    }

    // Add event listeners to checkboxes to run the check when their state changes
    agreeCheckbox.addEventListener('change', checkFormCompletion);
    dataLossCheckbox.addEventListener('change', checkFormCompletion);
    finalCheckbox.addEventListener('change', checkFormCompletion);

    // Check form completion when the page loads
    checkFormCompletion();
</script>

<?php include_once("includes/footer.php"); ?>
