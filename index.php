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
        <a href="topics.php" class="btn">Comienza Ya</a>
    </div>

</section>

<section class="menu" id="menu">

    <h1 class="heading"> Nuestros <span>Temas</span> </h1>

    <div class="box-container">
        <?php
        $fields = "SELECT p.nit AS nit, p.name AS name, d.price AS price FROM field f, field_detail d WHERE f.nit = d.nit";
        $result = mysqli_query($conn, $fields);

        while ($row = $result->fetch_assoc()) {
            ?>
            <div class="box">

                <h3>
                    <?php echo ($row['name']) ?>
                </h3>
                <div class="price">Empieza Ya</div>
                <a href="#" class="btn">Aqui</a>
            </div>
        <?php } ?>
    </div>

</section>

<?php include("layout/footer.php"); ?>