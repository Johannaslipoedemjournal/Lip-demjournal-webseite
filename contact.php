<?php
header('Content-Type: application/json; charset=utf-8');
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success'=>false,'message'=>'Ungültige Anfrage.']); exit;
}
$name = trim((string)($_POST['name'] ?? ''));
$email = trim((string)($_POST['email'] ?? ''));
$message = trim((string)($_POST['nachricht'] ?? ''));
if (preg_match('/[\r\n]/', $name) || preg_match('/[\r\n]/', $email)) {
    http_response_code(400); echo json_encode(['success'=>false,'message'=>'Ungültige Eingabe.']); exit;
}
if ($name === '' || $message === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400); echo json_encode(['success'=>false,'message'=>'Bitte fülle Name, E-Mail-Adresse und Nachricht korrekt aus.']); exit;
}
$to='johanna@xn--lipdemjournal-kmb.de';
$subject='Neue Nachricht über lipödemjournal.de';
$body="Name: {$name}\nE-Mail: {$email}\n\nNachricht:\n{$message}";
$headers="From: Lipödem Journal <johanna@xn--lipdemjournal-kmb.de>\r\nReply-To: {$email}\r\nContent-Type: text/plain; charset=UTF-8";
$sent=mail($to,'=?UTF-8?B?'.base64_encode($subject).'?=',$body,$headers);
if(!$sent){
    http_response_code(500); echo json_encode(['success'=>false,'message'=>'Der E-Mail-Versand ist momentan nicht verfügbar.']); exit;
}
echo json_encode(['success'=>true,'message'=>'Danke! Deine Nachricht wurde erfolgreich gesendet.']);
