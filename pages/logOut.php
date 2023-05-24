<?php
session_start();
include_once("../functions/getUser.php");
include "../functions/config.php";



unset($_SESSION["userLogeado"]);

?>

<script>
    window.location.href = "<?= SITE_ROOT ?>index.php";
</script>