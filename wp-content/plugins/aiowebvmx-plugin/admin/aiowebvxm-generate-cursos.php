<?php
//require_once('generateUsers.php');
//include_once(ABSPATH . '/wp-includes/wp-db.php');
//require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
//$userFactory = new generateUsers();
//    $userFactory->canti();
//    echo "50 Usuarios Generados";
?>


<div class="wrap">
    <h2>Viendo por el Mundo Plugin</h2>
    <h3>Viendo por el Mundo Plugin Options</h3>

    <form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
        <input type="button" name="submit" value="Generar 50 usuarios">
        <input type="hidden" name="submitted" value="1">
    </form>
</div>
