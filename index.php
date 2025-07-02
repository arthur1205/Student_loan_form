<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "student_loans";

$conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $nationality = $_POST['nationality'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $aadhar = $_POST['aadhar'];
    $address = $_POST['address'];

    $university = $_POST['university'];
    $course = $_POST['course'];
    $duration = $_POST['duration'];
    $year_of_study = $_POST['year_of_study'];
    $student_id = $_POST['student_id'];

    $total_fee = $_POST['total_fee'];
    $loan_amount = $_POST['loan_amount'];
    $tenure = $_POST['tenure'];
    $preferred_bank = $_POST['preferred_bank'];
    $reason = $_POST['reason'];
    $collateral = $_POST['collateral'];

    $guardian_name = $_POST['guardian_name'];
    $relationship = $_POST['relationship'];
    $occupation = $_POST['occupation'];
    $income = $_POST['income'];
    $guardian_contact = $_POST['guardian_contact'];


    $sql = "INSERT INTO applications 
    (full_name, dob, age, gender, nationality, email, phone, aadhar, address,
     university, course, duration, year_of_study, student_id,
     total_fee, loan_amount, tenure, preferred_bank, reason, collateral,
     guardian_name, relationship, occupation, income, guardian_contact) 
    VALUES 
    ('$full_name', '$dob', $age, '$gender', '$nationality', '$email', '$phone', '$aadhar', '$address',
     '$university', '$course', $duration, '$year_of_study', '$student_id',
     $total_fee, $loan_amount, $tenure, '$preferred_bank', '$reason', '$collateral',
     '$guardian_name', '$relationship', '$occupation', $income, '$guardian_contact')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Application submitted successfully!');</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
