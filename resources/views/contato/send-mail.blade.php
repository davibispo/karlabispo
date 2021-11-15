<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-mail enviado do site</title>
</head>
<body>
    <h3>{{ $details['assunto'] }}</h3>
    <h4>De: {{ $details['nome'] }} ({{ $details['email'] }})</h4>
    <p>{{ $details['mensagem'] }}</p>
</body>
</html>