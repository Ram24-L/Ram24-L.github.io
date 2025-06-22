<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['nameForm'] ?? '';
    $email = $_POST['emailForm'] ?? '';
    $phone = $_POST['phoneForm'] ?? '';
    $subject = $_POST['subjectForm'] ?? '';
    $message = $_POST['messageForm'] ?? '';

    // Ganti dengan email tujuanmu sendiri
    $to = "kamu@example.com"; // GANTI DENGAN EMAIL AKTIF
    $headers = "From: $email\r\n" .
               "Reply-To: $email\r\n" .
               "X-Mailer: PHP/" . phpversion();

    $email_subject = "Pesan Baru: $subject";
    $email_body = "Nama: $name\nEmail: $email\nTelepon: $phone\n\nPesan:\n$message";

    if (mail($to, $email_subject, $email_body, $headers)) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "message" => "Gagal mengirim email."]);
    }
    exit;
} else {
    echo json_encode(["success" => false, "message" => "Invalid request method."]);
    exit;
}
