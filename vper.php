<?php include("cper.php"); ?>

    <!--<form name="frm1" method="post" action="#" class="container">-->
    <div class="col-9">
<div class="main-panel">
    <div class="content-wrapper">
        <div class="card-content table-responsive">
            <form class="form-horizontal" method="post" id="addproduct" action="cper.php" role="form">
                <div class="form-group">
                    <label for="inputEmail1" class="col-lg-2 control-label">Documento</label>
                    <div class="col-md-6">
                    <input type="number" name="numdoc" required class="form-control" id="numdoc" placeholder="Número de Documento">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail1" class="col-lg-2 control-label">Primer Nombre</label>
                    <div class="col-md-6">
                    <input type="text" name="nom1" required class="form-control" id="nom1" placeholder="Primer Nombre">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail1" class="col-lg-2 control-label"> Segundo Nombre</label>
                    <div class="col-md-6">
                    <input type="text" name="nom2" required class="form-control" id="nom2" placeholder="Segundo Nombre">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail1" class="col-lg-2 control-label">Primer Apellido</label>
                    <div class="col-md-6">
                    <input type="text" name="apellido1" required class="form-control" id="apellido1" placeholder="Primer Apellido">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail1" class="col-lg-2 control-label">Segundo Apellido</label>
                    <div class="col-md-6">
                    <input type="text" name="apellido2" required class="form-control" id="apellido2" placeholder="Segundo Apellido">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail1" class="col-lg-2 control-label">Genero*</label>
                    <div class="col-md-6">
                <label class="checkbox-inline">
                <input type="radio" id="inlineCheckbox1" name="sexo" required value="m"> Masculino
                </label>
                <label class="checkbox-inline">
                <input type="radio" id="inlineCheckbox2" name="sexo" required value="f"> Femenino
                </label>

                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail1" class="col-lg-2 control-label">Fecha de Nacimiento</label>
                    <div class="col-md-6">
                    <input type="date" name="fec_nac" class="form-control"  id="address1" placeholder="Fecha de Nacimiento">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail1" class="col-lg-2 control-label">Email*</label>
                    <div class="col-md-6">
                    <input type="text" name="e_mail" class="form-control" id="e_mail" placeholder="Email">
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                    <button type="submit" class="btn btn-primary">Agregar Paciente</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>
                ID
            </th>
            <th>
                Num. Doc.
            </th>
            <th>
                Primer Nombre
            </th>
            <th>
                Segundo Nombre
            </th>
            <th>
                Primer Apellido
            </th>
            <th>
                Segundo Apellido
            </th>
            <th>
                Sexo
            </th>
            <th>
                Fec. Nac.
            </th>
            <th>
                E-mail
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <?php for($i=0;$i<count($datper);$i++){ ?>
            <td class="font-weight-medium">
                <?php echo $datper[$i]["id"]; ?>
            </td><td>
            <?php echo $datper[$i]["numdoc"]; ?>
            </td><td>
            <?php echo $datper[$i]["nom1"]; ?>
            </td><td>
            <?php echo $datper[$i]["nom2"]; ?>
            </td> <td>
            <?php echo $datper[$i]["apellido1"]; ?>
            </td><td>
            <?php echo $datper[$i]["apellido2"]; ?>
            </td><td>
            <?php echo $datper[$i]["sexo"]; ?>
            </td><td>
            <?php echo $datper[$i]["fec_nac"]; ?>
            </td><td>
            <?php echo $datper[$i]["e_mail"]; ?>
            </td>
        </tr>
    </tbody>

<?php  } ?>
<!--</form>-->