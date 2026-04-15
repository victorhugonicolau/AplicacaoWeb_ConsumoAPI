<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Consulta Clima</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        input[type="text"] {
            padding: 10px;
            width: 200px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
        }

        input[type="text"]:focus {
            border-color: #007BFF;
        }

        button {
            background-color: #007BFF;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="container">
<h2>Consultar Clima</h2>

<form action="resultado.php" method="GET">
    Cidade: <input type="text" name="cidade" placeholder="Digite a cidade"><br><br>

    <button type="submit">Buscar</button>
</form>
</div>
</body>
</html>