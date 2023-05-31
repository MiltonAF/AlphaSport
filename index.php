<?php

include("layout/head.php");
include("layout/session.php");

include("layout/navbar.php");

?>

<section class="home" id="home">

    <div class="content">
        <h3>Las mejores canchas sinteticas</h3>
        <p>En Alpha-Sport nos encargamos de que puedas disfritar con tu familia y amigos
            Por eso tenemos las mejores canchas sinteticas para que puedan jugar de una manera segura
            y eficiente, Contamos con una zona de refigeracion y una zona de espera donde tus amigos
            o familiares pueden disfrutar mientras te ven jugar</p>
        <!-- <a href="#" class="btn">Comienza Ya</a>-->
    </div>

</section>

<section class="menu" id="menu">

    <h1 class="heading"> las <span>Canchas</span> </h1>

    <div class="box-container">
        <?php
        $fields = "SELECT * FROM field f INNER JOIN field_detail d ON f.nit = d.nit";
        $result = mysqli_query($conn, $fields);


        while ($row = $result->fetch_assoc()) {
            ?>
            <div class="box">

                <h3>
                    <?php echo ($row['name']) ?>
                </h3>
                <div class="date">
                    <p>Horario:
                        <span>
                            <?php echo ($row['start_time'] . '-' . $row['end_time']) ?>
                        </span>
                    </p>
                    <p>Direccion:
                        <span>
                            <?php echo ($row['addres']) ?>
                        </span>
                    </p>
                    <p>Precio: $
                        <span>
                            <?php echo ($row['price']) ?>
                        </span>
                    </p>

                </div>
                <a href="#" class="btn">Reservar</a>
            </div>
        <?php } ?>
    </div>

</section>

<?php include("layout/footer.php"); ?>