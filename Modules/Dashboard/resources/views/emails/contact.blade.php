<!DOCTYPE html>
<html>
<head>
    <title>Soumission du formulaire de contact</title>
</head>
<body>
    <h2>Soumission d’un nouveau formulaire de contact</h2>
    <p><strong>Nom(s) & Prénom(s):</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Téléphone:</strong> {{ $data['phone'] }}</p>
    <p><strong>Sujet:</strong> {{ $data['subject'] }}</p>
    <p><strong>Message:</strong> {{ $data['message'] }}</p>
</body>
</html>
