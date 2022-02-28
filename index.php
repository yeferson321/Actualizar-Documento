<?php include("db.php")?>

<?php include("includes/header.php")?>

<?php include("includes/nav.php")?>

<form class="row gx-3 gy-2 align-items-center" method="POST" action="Consulta.php">

    <div class="col-sm-3">
        <label for="validationServer01" class="form-label">Tipo de Documento</label>
        <input name="Tipo_Documento" type="text" class="form-control is-valid" id="validationServer01"
            placeholder="Tipo Documento" autofocus required>
    </div>

    <div class="col-sm-3">
        <label for="validationServer01" class="form-label">Numero de Documento</label>
        <input name='Documento' type="text" class="form-control is-valid" id="validationServer01"
            placeholder="Documento" required>
    </div>

    <div class="col-auto">
        <button type="submit" name="procesar" class="btn btn-primary">Consultar</button>
    </div>

</form>

<?php if(isset($_SESSION['message'])) {?>

<div class="contai">
    <table class="table table-borderless align-items-center">
        <thead>
            <tr>
                <th scope="col">Tipo de Documento</th>
                <th scope="col">Estado</th>
                <th scope="col">Numero de Documento</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $_SESSION['message']?></td>
                <td><?= $_SESSION['messag']?></td>
                <td><?= $_SESSION['messa']?></td>
            </tr>
        </tbody>
    </table>
</div>

<form id="incid" name="formulario" method="POST">

    <div class="tablee">
        <table class="table table-borderless align-items-center">
            <thead>
                <tr>
                    <th scope="col">Actualizar Estado</th>
                </tr>
            </thead>
        </table>
    </div>

    <div class="container">
        <select name="estado" type="text" id="estado" class="form-select form-select-sm"
            aria-label=".form-select-sm example">
            <option selected>Nuevo Estado</option>
            <option value="S">ABIERTO</option>
            <option value="C">CERRADO</option>
        </select>

        <div class="col-auto">
            <button type="submit" name="submit" value="submit" class="btn btn-primary btn-sm">Actualizar</button>
        </div>
    </div>

    <?php  }?>

</div>

<?php include("edit.php")?>

<?php include("includes/footer.php")?>