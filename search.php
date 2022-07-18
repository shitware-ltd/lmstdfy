<?php
    if (isset($_GET['docs']) && file_exists($_GET['docs'] . ".php")) {
        include ($_GET['docs'] . ".php");
    }
?>