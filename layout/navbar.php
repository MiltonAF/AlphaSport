<header class="header">

    <a href="#" class="logo">
        Alpha<span>Sport</span>
    </a>

    <nav class="navbar">
        <a href="index.php">Inicio</a>
        <a href="topics.php">Temas</a>
        <a href="#menu">Nosostros</a>
        <a href="#products">Ayuda</a>
    </nav>

    <div class="icons">
        <a href="login.php">
            <?php if ($field) { ?>
                <span class="nm">
                    <?php echo ($field['name']) ?>
                </span>

            <?php } else if ($people) { ?>
                    <span class="nm">
                    <?php echo ($people['name'] . " " . $people['surname']) ?>
                    </span>

            <?php } else { ?>
                    <i class="fa-solid fa-user"></i>
            <?php } ?>

        </a>

        <div class="fas fa-bars" id="menu-btn"></div>
    </div>



</header>