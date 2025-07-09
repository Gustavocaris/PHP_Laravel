<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>teste page em PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #121212;
            color: #f0f0f0;
            text-align: center;
            padding-top: 50px;
        }

        h1 {
            color: #4CAF50;
        }

        .box {
            background: #1e1e1e;
            padding: 20px;
            border-radius: 10px;
            width: 300px;
            margin: 0 auto;
            box-shadow: 0 0 10px #4CAF50;
        }
    </style>
</head>
<body>
    <div class="box">
        <h1>Olá, mundo!</h1>
        <p>Hoje é <?php echo date('d/m/Y'); ?>.</p>
        <p>Esta é minha primeira página em PHP 🎉</p>
    </div>
</body>
</html>
