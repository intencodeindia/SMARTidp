<?php
session_start(); // Start the session

// Set your desired password
$correct_password = "mudassir123"; // You can change the password to whatever you prefer

// Check if form is submitted and validate the password
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['password']) && $_POST['password'] === $correct_password) {
        $_SESSION['authenticated'] = true; // Set session to authenticated
    } else {
        $error_message = "Invalid password. Please try again.";
    }
}
// Check if the user is authenticated
$authenticated = isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === true;
?>
<?php include_once("includes/header.php"); ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/2.1.6/css/dataTables.bootstrap5.min.css">

<style>
    .delete-btn {
        background: red !important;
    }
</style>
<?php
// Check if delete request is received
if (isset($_POST['delete']) && !empty($_POST['delete_id'])) {
    $delete_id = $_POST['delete_id'];
    try {
        // Perform soft delete or hard delete based on your preference
        $delete_query = "UPDATE form_submissions SET deleted_at = NOW() WHERE id = :id";
        $delete_stmt = $pdo->prepare($delete_query);
        $delete_stmt->execute([':id' => $delete_id]);

        // Optionally, you can add a success message here
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}


?>
<div class="content-wrapper">
    <main role="main" class="main-content">


        <div class="container-fluid mt-5 pt-5 mb-5 pb-5 p-5">
            <?php if (!$authenticated): ?>
                <!-- Display password form -->
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <h4 class="text-center mb-4">Enter Password to View Submitted Forms</h4>
                        <form method="post" action="">
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control border-1" id="password" name="password" required>
                            </div>
                            <?php if (isset($error_message)): ?>
                                <div class="alert alert-danger"><?php echo $error_message; ?></div>
                            <?php endif; ?>
                            <div class="d-flex justify-content-center mt-3">
                            <button type="submit" class="btn rounded-pill px-5 text-white" style="background: linear-gradient(331deg, #0090f9 0, #00b09c 100%);">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

            <?php else: ?>
                <!-- Display table after successful login -->
                <h2 class="text-center mb-4">Request Form Submissions</h2>
                <div class="table-responsive">
                    <table id="dataTable1" class="table table-bordered table-striped" style="width:100%">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact Number</th>
                                <th>Company/Organization</th>
                                <th>Company Size</th>
                                <th>Country</th>
                                <th>Submitted At</th>
                                <th>Action</th> <!-- New column for Action -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Fetching data using PDO
                            try {
                                $query = "SELECT `id`, `firstname`, `lastname`, `email`, `phone`, `company`, `company_size`, `country`, 
                         `created_at`, `deleted_at` 
                  FROM `form_submissions` 
                  WHERE `deleted_at` IS NULL 
                  ORDER BY `created_at` DESC";

                                $stmt = $pdo->query($query);
                                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                if (count($result) > 0) {
                                    foreach ($result as $row) {
                                        // Check if fields are empty and replace with "Nill"
                                        $id = !empty($row['id']) ? $row['id'] : 'Nill';
                                        $firstname = !empty($row['firstname']) ? $row['firstname'] : 'Nill';
                                        $lastname = !empty($row['lastname']) ? $row['lastname'] : 'Nill';
                                        $email = !empty($row['email']) ? $row['email'] : 'Nill';
                                        $contactnumber = !empty($row['phone']) ? $row['phone'] : 'Nill';
                                        $company = !empty($row['company']) ? $row['company'] : 'Nill';
                                        $company_size = !empty($row['company_size']) ? $row['company_size'] : 'Nill';
                                        $country = !empty($row['country']) ? $row['country'] : 'Nill';
                                        $created_at = !empty($row['created_at']) ? date('d-m-Y H:i:s', strtotime($row['created_at'])) : 'Nill';
                            ?>
                                        <tr>
                                            <td><?= $id ?></td>
                                            <td><?= $firstname . ' ' . $lastname ?></td>
                                            <td><?= $email ?></td>
                                            <td><?= $contactnumber ?></td>
                                            <td><?= $company ?></td>
                                            <td><?= $company_size ?></td>
                                            <td><?= $country ?></td>
                                            <td><?= $created_at ?></td>
                                            <td>
                                                <!-- Delete button triggers the modal -->
                                                <button type="button" class="btn btn-danger delete-btn" data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal" data-id="<?= $id ?>" style="background-color: red !important;">
                                                    Delete
                                                </button>
                                            </td>
                                        </tr>
                            <?php
                                    }
                                }
                            } catch (PDOException $e) {
                                echo "Error: " . $e->getMessage();
                            }
                            ?>
                        </tbody>

                    </table>
                </div>
            <?php endif; ?>
        </div>

    </main>
</div>


<!-- Confirmation Modal -->
<div class="modal fade" id="deleteConfirmationModal" tabindex="-1" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteConfirmationModalLabel">Confirm Deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this record?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteButton">Delete</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.1.6/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.1.6/js/dataTables.bootstrap5.js"></script>
<script>
    $(document).ready(function() {
        $('#dataTable1').DataTable();
    });
</script>
<script>
    let deleteId = null; // Variable to store the record ID

    // Event listener for Delete button click
    $(document).on('click', '.delete-btn', function() {
        deleteId = $(this).data('id'); // Get the ID of the record to be deleted
    });

    // Event listener for Confirm Delete button in the modal
    $('#confirmDeleteButton').click(function() {
        if (deleteId !== null) {
            // Submit form with the ID to delete
            $.post('', {
                delete_id: deleteId,
                delete: true
            }, function(response) {
                // Refresh the page after successful deletion or show alert
                location.reload();
            });
        }
    });
</script>
<?php include_once("includes/footer.php"); ?>