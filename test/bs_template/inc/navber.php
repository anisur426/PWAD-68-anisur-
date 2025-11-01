<?php
$current_page = basename($_SERVER["PHP_SELF"]);
?>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" <?php if ($current_page == "index.php") echo "active"; ?> href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" <?php if ($current_page == "about.php") echo "active"; ?> href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <a class="nav-link" <?php if ($current_page == "contact.php") echo "activ"; ?> href="#">Contact</a>
            </li>

        </ul>
    </div>
</nav>