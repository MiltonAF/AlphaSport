<?php
include("layout/head.php");
include("layout/navbar.php");

?>
<section class="signin" id="signin">


    <div class="row">

        <form action="backend/signin.php" method="POST">
            <div class="logo-login"><img src="images/cybersec.svg" alt=""></div>
            <h3>Iniciar Session</h3>

            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" name="username" placeholder="Usuario Publico">
            </div>
            <div class="inputBox">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="password-in" placeholder="Contraseña">

                <span id="show-pass-in" class="fas fa-eye" onclick="signinPass();"></span>
                <span id="hide-pass-in" class="fas fa-low-vision" onclick="signinPass();"></span>
            </div>

            <input type="submit" value="Iniciar Seccion" class="btn">
            <input type="button" onclick="signin();" value="Registrame" class="btn">
        </form>

    </div>

</section>

<section class="signup" id="signup">

    <div class="row">

        <form action="backend/signup.php" method="POST" enctype="multipart/form-data">
            <div class="logo-login"><img src="images/cybersec.svg" alt=""></div>
            <h3>Registrate</h3>

            <div class="body-form">

                <div class="textfile">
                    <div class="inputBox">
                        <span class="fas fa-user"></span>
                        <input type="text" require name="name" placeholder="Nombres">
                    </div>
                    <div class="inputBox">
                        <span class="fas fa-user"></span>
                        <input type="text" required name="surname" placeholder="Apellidos">
                    </div>
                    <div class="inputBox">
                        <span class="fas fa-envelope"></span>
                        <input type="email" required name="email" placeholder="email">
                    </div>
                    <div class="inputBox">
                        <span class="fas fa-user"></span>
                        <input type="text" required name="username" placeholder="Usuario Publico">
                    </div>
                    <div class="inputBox">
                        <span class="fas fa-key"></span>
                        <input type="password" required name="password" id="password-up" placeholder="Contraseña">

                        <span id="show-pass-up" class="fas fa-eye" onclick="signupPass();"></span>
                        <span id="hide-pass-up" class="fas fa-low-vision" onclick="signupPass();"></span>
                    </div>

                </div>


            </div>





            <input type="submit" value="Registrame" class="btn">
            <input type="button" onclick="signup();" value="Iniciar Sesion" class="btn">
        </form>

    </div>

</section>

<?php include("layout/footer.php"); ?>