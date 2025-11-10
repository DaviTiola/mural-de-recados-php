<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Mural de Recados</title>
    <style>
        body { font-family: sans-serif; max-width: 600px; margin: auto; padding: 20px; }
        .recados { margin-top: 20px; }
        .recado { border: 1px solid #ccc; padding: 10px; margin-bottom: 10px; }
    </style>
</head>
<body>
<h1>Mural de Recados</h1>

<hr>

<div class="form">
    <h3>Deixe seu recado</h3>
    <form action="/" method="POST">
        @csrf <div>
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name">
        </div>
        <br>
        <div>
            <label for="message">Recado:</label>
            <textarea id="message" name="message"></textarea>
        </div>
        <br>
        <button type="submit">Enviar</button>
    </form>
</div>

<div class="recados">
    <h2>Recados Antigos</h2>
</div>
</body>
</html>
