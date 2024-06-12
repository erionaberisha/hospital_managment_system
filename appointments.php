<?php
include 'config.php';
include 'header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $patient_id = $_POST['patient_id'];
    $doctor_id = $_POST['doctor_id'];
    $appointment_date = $_POST['appointment_date'];

    $sql = "INSERT INTO appointments (patient_id, doctor_id, appointment_date) VALUES ('$patient_id', '$doctor_id', '$appointment_date')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success mt-4'>New appointment scheduled successfully</div>";
    } else {
        echo "<div class='alert alert-danger mt-4'>Error: " . $sql . "<br>" . $conn->error . "</div>";
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
            <h2 class="mb-0 text-black">Schedule Appointment</h2>
        </div>
        <div class="card-body">
            <form method="post" action="" class="needs-validation" novalidate>
                <div class="form-group mb-3">
                    <label for="patient_id">Patient ID:</label>
                    <input type="number" class="form-control" id="patient_id" name="patient_id" required>
                    <div class="invalid-feedback">Please provide a patient ID.</div>
                </div>
                <div class="form-group mb-3">
                    <label for="doctor_id">Doctor ID:</label>
                    <input type="number" class="form-control" id="doctor_id" name="doctor_id" required>
                    <div class="invalid-feedback">Please provide a doctor ID.</div>
                </div>
                <div class="form-group mb-3">
                    <label for="appointment_date">Appointment Date:</label>
                    <input type="date" class="form-control" id="appointment_date" name="appointment_date" required>
                    <div class="invalid-feedback">Please provide an appointment date.</div>
                </div>
                <button type="submit" class="btn btn-primary w-100">Schedule Appointment</button>
            </form>
        </div>
    </div>

    <h2 class="mt-5 text-center">Appointments List</h2>
    <?php
    $sql = "SELECT * FROM appointments";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='table table-striped mt-4'><thead class='thead-dark'><tr><th>ID</th><th>Patient ID</th><th>Doctor ID</th><th>Appointment Date</th></tr></thead><tbody>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"]. "</td><td>" . $row["patient_id"]. "</td><td>" . $row["doctor_id"]. "</td><td>" . $row["appointment_date"]. "</td></tr>";
        }
        echo "</tbody></table>";
    } else {
        echo "<div class='alert alert-info mt-4'>No appointments found</div>";
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
