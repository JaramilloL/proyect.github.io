<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <div class="blueBg">
            <div class="box signin">
                <h2>Inicias secion</h2>
                <h2>Si ya tienes cuenta</h2>
                <button class="signinBtn">Iniciar</button>
            </div>

            <div class="box signup">
                <h2>CREAR CUENTA</h2>
                <button class="signUpBtn">Crear cuenta nueva</button>
            </div>
        </div>
        <div class="formBox">
            <div class="form signinForm">
                <form action="conex_login.php" method="POST">
                    <h3>Iniciar secion</h3>
                    <input type="email" placeholder="correo" name="correo">
                    <input type="password" placeholder="contraseña" name="password">
                    <input type="submit" value="ENTRAR" name="submit">
                    <a href="recuperacion.php" class="forgot">recuperar password</a>
                </form>
            </div>

            <div class="form signupForm">
                <form action="conex_usuario.php" method="POST">
                    <h3>signin</h3>
                    <input type="text" placeholder="nombre de usurio" name="username">
                    <input type="email" placeholder="correo" name="email">
                    <input type="password" placeholder="contraseña" name="password">
                    <input type="tel" placeholder="telefono"
                    name="telefono">
                    <input type="datetime-local" name="" id="">
                    <select selected="sexo">
                        <option value="Hombre">
                            Hombre
                        </option>
                        <option value="Mujer">
                            Mujer
                        </option>
                    </select>

                   <input type="submit" value="registrarse" name="login" >
                </form>
            </div>
        </div>
    </div>

    <script>
        const signinBtn = document.querySelector('.signinBtn');
        const signUpBtn = document.querySelector('.signUpBtn');
        const formBox = document.querySelector('.formBox');
        const body = document.querySelector('body');

        signUpBtn.onclick = function() {
            formBox.classList.add('active');
            body.classList.add('active');
        }
        signinBtn.onclick = function() {
            formBox.classList.remove('active');
            body.classList.remove('active');
        }
    </script>
</body>
</html>