<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Não Encontrada</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: auto 40px;
            text-align: center;
        }

        h1 {
            font-size: 4em;
            color: #333;
            animation: bounce 2s infinite;
        }

        @keyframes bounce {

            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translateY(0);
            }

            40% {
                transform: translateY(-30px);
            }

            60% {
                transform: translateY(-15px);
            }
        }

        a {
            text-decoration: none;
            color: black;
            margin-top: 20px;
            text-decoration: none;
            font-size: 1.8em;
            position: relative;
            transition: all 0.5s ease-in-out;
        }

        a:hover {
            text-shadow: 0 0 10px #004c99;
        }

        a:hover::before {
            content: '';
            position: absolute;
            top: -5px;
            left: -5px;
            right: -5px;
            bottom: -5px;
            text-shadow: 0 0 15px rgba(0, 102, 204, 0.5);
            animation: lightGlow 1.5s infinite alternate;
        }

        @keyframes lightGlow {
            from {
                text-shadow: 0 0 15px rgba(0, 102, 204, 0.5);
            }

            to {
                text-shadow: 0 0 25px rgba(0, 102, 204, 1);
            }
        }
    </style>
</head>

<body>
    <h1>Oops, tente novamente mais tarde</h1>
    <h1>404</h1>
    <a href="javascript:history.back()">Voltar</a>
</body>

</html>