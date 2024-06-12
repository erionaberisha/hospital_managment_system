
<?php
include 'config.php';
include 'header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $specialty = $_POST['specialty'];
    $contact = $_POST['contact'];
    $email = $_POST['email']; // Corrected variable name
    $department = $_POST['department']; // Assuming you have a department field
    $joining_date = $_POST['joining_date']; // Corrected variable name

 
    $sql = "INSERT INTO doctors (name, specialty, contact, email, department, joining_date) 
            VALUES ('$name', '$specialty', '$contact', '$email', '$department', '$joining_date')";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success mt-3'>New doctor added successfully</div>";
    } else {
        echo "<div class='alert alert-danger mt-3'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }
}
?>

<style>
.container-custom {
    background-color: #f8f9fa;
}
.card {
    border: none;
    background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent background */
    width: 50%; /* Fixed width */
    margin: 0 auto; /* Center the card */
}
.custom-btn {
    background-color: #007bff;
    color: white;
}
.custom-btn:hover {
    background-color: #0056b3;
}
.form-group label {
    font-weight: bold;
}
.card-header h2 {
    font-size: 1.3rem;
    color: black; /* Text color */
}
</style>

<div class="container mt-5">
    <div class="card">
        <div class="card-header text-center">
            <h2 class="mb-0 text-black">Add Doctor</h2>
        </div>
        <div class="card-body">
            <form method="post" action="" class="needs-validation" novalidate>
                <div class="form-group mb-3">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                    <div class="invalid-feedback">Please provide a name.</div>
                </div>
                <div class="form-group mb-3">
                    <label for="specialty">Specialty:</label>
                    <input type="text" class="form-control" id="specialty" name="specialty" required>
                    <div class="invalid-feedback">Please provide a specialty.</div>
                </div>
                <div class="form-group mb-3">
                    <label for="contact">Contact:</label>
                    <input type="text" class="form-control" id="contact" name="contact" required>
                    <div class="invalid-feedback">Please provide a contact.</div>
                </div>
                <div class="form-group mb-3">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" id="email" name="email" required>
                    <div class="invalid-feedback">Please provide an email.</div>
                </div>
                <div class="form-group mb-3">
                    <label for="department">Department:</label>
                    <input type="text" class="form-control" id="department" name="department" required>
                    <div class="invalid-feedback">Please provide a department.</div>
                </div>
                <div class="form-group mb-3">
                    <label for="joining_date">Joining-Date:</label>
                    <input type="date" class="form-control" id="joining_date" name="joining_date" required>
                    <div class="invalid-feedback">Please provide a date.</div>
                </div>
                <button type="submit" class="btn btn-primary w-100">Add Doctor</button>
            </form>
        </div>
    </div>

    <h2 class="mt-5 text-center">Doctors List</h2>
<?php
$sql = "SELECT * FROM doctors";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<div class='table-responsive'>";
    echo "<table class='table table-striped mt-4' style='background-color: rgba(255, 255, 255, 0.8);'><thead class='thead-dark'><tr><th>ID</th><th>Name</th><th>Specialty</th><th>Contact</th><th>Email</th><th>Department</th><th>Joining Date</th></tr></thead><tbody>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["specialty"]. "</td><td>" . $row["contact"]. "</td><td>" . $row["email"]. "</td><td>" . $row["department"]. "</td><td>" . $row["joining_date"]. "</td></tr>";
    }
    echo "</tbody></table>";
    echo "</div>";
} else {
    echo "<div class='alert alert-info mt-4'>No doctors found.</div>";
}
$conn->close();
?>

</div>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'
    window.addEventListener('load', function () {
        var forms = document.getElementsByClassName('needs-validation')
        var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
                if (form.checkValidity() === false) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
    }, false)
}())
</script>

<?php include 'footer.php'; ?>
