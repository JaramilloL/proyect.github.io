<?php
    session_start();
    include 'conexion.php';

    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $password = hash("sha512", $password);

    $valiar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email = '$correo' and password = '$password'");

    if(mysqli_num_rows($valiar_login)> 0){
        $_SESSION['usuario'] = $correo;
        header("location:index.php");
        exit();
    }else{
        echo '
        <script>
            alert("el usuario no exite");
            window.location = "formulario.php";
        </script>
        ';
        exit();
    }
?>