<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "radar"; 

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Proses simpan data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name     = $_POST['nameForm'];
    $email    = $_POST['emailForm'];
    $phone    = $_POST['phoneForm'];
    $age      = $_POST['subjectForm'];
    $gender   = $_POST['genderForm'];
    $province = $_POST['provinceForm'];
    $terms    = isset($_POST['terms']) ? 1 : 0;

    $sql = "INSERT INTO users (full_name, email, phone, age, gender, province, agreed_terms) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sssissi", $name, $email, $phone, $age, $gender, $province, $terms);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }
}
header('Content-Type: application/json');
if ($stmt) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}
exit;
