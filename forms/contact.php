<?php
$recipientEmail = "test@mail.com";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        echo json_encode(['status' => 'error', 'message' => 'Visi laukeliai yra būtini.']);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['status' => 'error', 'message' => 'Netinkamas el. pašto formatas.']);
        exit;
    }

    $emailSubject = "Nauja žinutė: $subject";
    $emailBody = "Jūs gavote naują žinutę iš kontaktų formos:\n\n" .
                 "Vardas: $name\n" .
                 "El. paštas: $email\n\n" .
                 "Žinutė:\n$message";

    $headers = "From: $email\r\nReply-To: $email";

    if (mail($recipientEmail, $emailSubject, $emailBody, $headers)) {
        echo json_encode(['status' => 'success', 'message' => 'Jūsų žinutė buvo sėkmingai išsiųsta!']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Žinutės išsiųsti nepavyko. Bandykite dar kartą.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Neteisingas užklausos metodas.']);
}
?>
