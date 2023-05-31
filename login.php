<?php
include("layout/head.php");
include("layout/navbar.php");

?>
<section class="signin" id="signin">


    <div class="row">

        <form action="controller/singin.php" method="POST">
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

        <form action="controller/signup.php" method="POST" enctype="multipart/form-data">
            <div class="logo-login"><img src="images/cybersec.svg" alt=""></div>
            <h3>Registrate</h3>

            <div class="body-form">



                <div class="cont_radio">

                    <input type="button" id="btn-p" onclick="signupPeople();" value="Cliente" class="btn">
                    <input type="button" id="btn-f" onclick="signupField();" value="Canchas" class="btn">



                </div>

                <div class="textfile" id="div-p">
                    <div class="inputBox">
                        <span class="fas fa-user"></span>
                        <input type="number" name="id" placeholder="Cedula">
                    </div>
                    <div class="inputBox">
                        <span class="fas fa-user"></span>
                        <input type="text" name="name" placeholder="Nombres">
                    </div>
                    <div class="inputBox">
                        <span class="fas fa-user"></span>
                        <input type="text" name="surname" placeholder="Apellidos">
                    </div>
                    <div class="inputBox">
                        <span class="fas fa-envelope"></span>
                        <input type="email" name="email" placeholder="Email">
                    </div>
                    <div class="inputBox">
                        <span class="fas fa-user"></span>
                        <input type="number" name="phone" placeholder="Telefono">
                    </div>
                    <div class="inputBox">
                        <span class="fas fa-user"></span>
                        <input type="text" name="username" placeholder="Nombre de Usuario">
                    </div>
                    <div class="inputBox">
                        <span class="fas fa-key"></span>
                        <input type="password" name="password" id="password-up" placeholder="Contraseña">

                        <span id="show-pass-up" class="fas fa-eye" onclick="signupPass();"></span>
                        <span id="hide-pass-up" class="fas fa-low-vision" onclick="signupPass();"></span>
                    </div>

                </div>



                <div class="textfile" id="div-f">
                    <div class="inputBox">
                        <span class="fas fa-user"></span>
                        <input type="number" name="nit" placeholder="Nit">
                    </div>

                    <div class="inputBox">
                        <span class="fas fa-user"></span>
                        <input type="text" name="name" placeholder="Nombre">
                    </div>

                    <div class="inputBox">
                        <span class="fas fa-envelope"></span>
                        <input type="email" name="email" placeholder="email">
                    </div>

                    <div class="inputBox">
                        <span class="fas fa-user"></span>
                        <input type="number" name="phone" placeholder="Telefono">
                    </div>

                    <div class="inputBox">
                        <span class="fas fa-user"></span>
                        <input type="text" name="addres" placeholder="Direccion">
                    </div>

                    <div class="inputBox">
                        <span class="fas fa-user"></span>
                        <input type="text" name="username" placeholder="Nombre de Usuario">
                    </div>
                    <div class="inputBox">
                        <span class="fas fa-key"></span>
                        <input type="password" name="password" id="password-up" placeholder="Contraseña">

                        <span id="show-pass-up" class="fas fa-eye" onclick="signupPass();"></span>
                        <span id="hide-pass-up" class="fas fa-low-vision" onclick="signupPass();"></span>
                    </div>

                    <div class="inputBox">
                        <span class="fas fa-user"></span>
                        <input type="text" name="price" placeholder="Precio del alquiler">
                    </div>


                    <div class="shuel">

                        <h3>Horario</h3>

                        <div class="time">

                            <div class="input_time">
                                <label for="start_time">Hora Inicio</label>
                                <div class="inputBox">
                                    <input type="time" name="start_time">
                                </div>
                            </div>

                            <div class="input_time">
                                <label for="end_time">Hora Fin</label>
                                <div class="inputBox">
                                    <input type="time" name="end_time">
                                </div>
                            </div>


                        </div>






                    </div>




                </div>




            </div>

            <input type="submit" value="Registrame" class="btn">
            <input type="button" onclick="signup();" value="Iniciar Sesion" class="btn">
        </form>

    </div>

</section>

<?php include("layout/footer.php"); ?>