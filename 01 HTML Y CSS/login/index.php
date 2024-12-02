<?php require_once("confi.php");
$canexion = ();
>?
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
     initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="CSS/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <section>
        <form>
            <h2>Login</h2>
            <div class="group">
                <label>Username:</label>
                <input type="text">
            </div>
            <div class="group">
                <label>Contraseña:</label>
                <input type="password" id="password" name="password" pattern=".{6,}" title="La contraseña debe tener al menos 6 caracteres" required>
                <i class="fa-regular fa-eye" ></i>
            </div>
            <button>Iniciar Sesion</button>
        </form>
    </section>
    <script src="js/javascrip.js"></script>    
</body>
</html>