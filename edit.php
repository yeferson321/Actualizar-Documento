<?php

if (isset($_POST['submit'])) {

    $Estado = $_POST['estado'];
    $tipo = $_SESSION['message'];
    $estad = $_SESSION['messag'];
    $doc = $_SESSION['messa'];

    $c = sqlsrv_connect($serverName, $connectionInfo);

    if ($c) {
        $query = "UPDATE MOVCONT3 SET MvCEst = '$Estado' WHERE DOCCOD ='$tipo' AND MvCNro = '$doc'";
        $datos = sqlsrv_query($c, $query);

?>

        <?php
        if ($datos == true) { ?>

            <div class="alert alert-primary d-flex align-items-center" role="alert">

                <div>
                    Cambio exitoso.
                </div>
            </div>

        <?php } ?>

<?php }
} ?>


</form>