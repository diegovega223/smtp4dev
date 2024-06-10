<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar Correo</title>
</head>
<body>
    <h1>Enviar Correo</h1>
    <form action="{{ route('enviar.correo') }}" method="post">
        @csrf
        <label for="destinatario">Destinatario:</label><br>
        <input type="text" id="destinatario" name="destinatario"><br><br>

        <label for="asunto">Asunto:</label><br>
        <input type="text" id="asunto" name="asunto"><br><br>
        
        <label for="contenido">Contenido:</label><br>
        <textarea id="contenido" name="contenido" rows="4" cols="50"></textarea><br><br>

        <button type="submit">Enviar Correo</button>
    </form>
</body>
</html>
