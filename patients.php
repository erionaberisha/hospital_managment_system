<?php
include 'config.php';
include 'header.php';

// Handling form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);

    $sql = "INSERT INTO patients (first_name, last_name, dob, gender, contact, address) VALUES ('$first_name', '$last_name', '$dob', '$gender', '$contact', '$address')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success mt-3'>New patient added successfully</div>";
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
    background-color: rgba(255, 255, 255, 0.7); /* Semi-transparent background */
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
            <h2 class="mb-0 text-black">Add Patient</h2>
        </div>
        <div class="card-body">
            <form method="post" action="" class="needs-validation" novalidate>
                <div class="form-group">
                    <label for="first_name">First Name:</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" required>
                    <div class="invalid-feedback">Please provide a first name.</div>
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name:</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" required>
                    <div class="invalid-feedback">Please provide a last name.</div>
                </div>
                <div class="form-group">
                    <label for="dob">Date of Birth:</label>
                    <input type="date" class="form-control" id="dob" name="dob" required>
                    <div class="invalid-feedback">Please provide a date of birth.</div>
                </div>
                <div class="form-group">
                    <label for="gender">Gender:</label>
                    <select class="form-control" id="gender" name="gender" required>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                    <div class="invalid-feedback">Please select a gender.</div>
                </div>
                <div class="form-group">
                    <label for="contact">Contact:</label>
                    <input type="text" class="form-control" id="contact" name="contact" required>
                    <div class="invalid-feedback">Please provide a contact.</div>
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
                    <div class="invalid-feedback">Please provide an address.</div>
                </div>
                <button type="submit" class="btn btn-primary w-100">Add Patient</button>
            </form>
        </div>
    </div>
</div>

<div class="container mt-5">
    <h2>Patients List</h2>
    <?php
    $sql = "SELECT * FROM patients";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='table table-striped table-bordered mt-4'><thead class='thead-dark'><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>DOB</th><th>Gender</th><th>Contact</th><th>Address</th></tr></thead><tbody>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"]. "</td><td>" . $row["first_name"]. "</td><td>" . $row["last_name"]. "</td><td>" . $row["dob"]. "</td><td>" . $row["gender"]. "</td><td>" . $row["contact"]. "</td><td>" . $row["address"]. "</td></tr>";
        }
        echo "</tbody></table>";
    } else {
        echo "<div class='alert alert-info mt-4'>No patients found.</div>";
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
