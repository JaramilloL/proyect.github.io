<?php
    include 'conexion.php';

    $nombre = $_POST['username'];
    $correo = $_POST['email'];
    $password = $_POST['password'];
    //encryptamiento de contrasena
    $password = hash('sha512', $password);

    $query = "INSERT INTO usuarios(nombre, email, password) VALUES ('$nombre', '$correo', '$password')";

    //verificar que el correo no se repita
    $verificar = mysqli_query($conexion,  "SELECT * FROM usuarios WHERE email = '$correo'");

    if(mysqli_num_rows($verificar)> 0){
        echo '
        <script>
        alert("este correo ya esta registrado");
        window.location = "formulario.php";
        </script>
        ';
        exit();
    }


    //verificar que el password no se repita
    $verificar_pass = mysqli_query($conexion,  "SELECT * FROM usuarios WHERE password = '$password'");

    if(mysqli_num_rows($verificar_pass)> 0){
        echo '
        <script>
        alert("este password ya esta registrado");
        window.location = "formulario.php";
        </script>
        ';
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
        <script>
            alert("usuario almacenado correctamente");
            window.location = "formulario.php";
        </script>
        ';
    }else{
        echo '
        <script>
            alert("intentalo de nuevo usuario no almacenado");
            window.location = "formulario.php";
        </script>
        ';
    }

    mysqli_close($conexion);
?>