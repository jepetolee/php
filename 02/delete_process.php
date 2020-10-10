<?php
    unlink('data/'.basename($_GET['id']));
    header('Location: 02/index.php');
?>