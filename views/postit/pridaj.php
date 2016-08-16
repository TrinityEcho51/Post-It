<?php
 /*   require_once "config.php";
    include_once "php/classes/Databaza.php";
    $databaza = new Databaza(SERVER, UZIVATEL, HESLO, DB);
    $databaza->connection->query("SET NAMES utf8");*/
?>
<div class="container" id="container-uzivatel">
  <div class="row">
    <div class="col-sm-3">
        <p class="text-uppercase text-center text-muted">Meno:</p>
        <p class="text-center" contenteditable="true"><?php //echo $_SESSION["plne_meno"] ?></p>
    </div>
    <div class="col-sm-3">
        <p class="text-uppercase text-center text-muted">Osobne cislo:</p>
        <p class="text-center" id="menoUzivatela"><?php //echo $_SESSION["uid"] ?></p>
    </div>
    <div class="col-sm-3">
        <p class="text-uppercase text-center text-muted">Zmena:</p>
        <p class="text-center" id="menoUzivatela"><?php //echo $_SESSION["zmena"] ?></p>
    </div>
    <div class="col-sm-3">
        <p class="text-uppercase text-center text-muted">UEP:</p>
        <p class="text-center" id="menoUzivatela">
          <?php
          /*  echo $_SESSION["ur"];
            if ($_SESSION["uep"] != "")
              echo "/".$_SESSION["uep"];*/
          ?>
        </p>
    </div>
  </div>
</div>
<div class="container" id="container-row_rfs_nature">
    <div class="row">
        <div class="col-sm-6">
            <input class="input-sm form-control input-lg text-uppercase" type="text" required="" placeholder="RFS:" maxlength="5" minlength="5" autofocus id="rfs" form="createpostit" name="rfs">
            <p class="lead text-center" id="rfspopis">Popis RFS</p>
        </div>
        <div class="col-sm-6">
            <input class="input-sm form-control input-lg" type="text" required="" placeholder="Nature:" maxlength="3" minlength="3" id="nature" form="createpostit" name="nature">
            <p class="lead text-center" id="naturepopis">Popis Nature</p>
        </div>
    </div>
</div>
<div class="container" id="container-tab_postit">
    <div class="table-responsive" id="tab_postit">
        <table class="table table-striped table-hover table-condensed">
            <thead>
                <tr>
                    <th>STAV</th>
                    <th>IMP</th>
                    <th>Dátum vytvorenia</th>
                    <th>Popis problému</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
  <div class="container" id="container-rozhodovacie_tlacitka">
    <div class="col-sm-6">
        <button class="btn btn-success btn-block btn-lg" type="button" id="vytvor">Vytvorit novy Post-it</button>
    </div>
    <div class="col-sm-6">
        <button class="btn btn-danger btn-block btn-lg" type="button" id="nevytvor">Nevytvorit Post-it</button>
    </div>
  </div>
</div>
<div class="container" id="container-createpostit">
    <div class="well">
        <form class="bootstrap-form-with-validation" id="createpostit" action="" method="post">
            <div class="form-group has-success has-feedback">
                <label class="control-label" for="text-input">VIS</label>
                <input class="form-control input-lg" type="text" name="vis" required="" maxlength="8" minlength="8" id="text-input"><i class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></i>
            </div>
            <div class="form-group has-success has-feedback">
                <label class="control-label" for="text-input">Model</label>
                <select class="form-control input-lg" name="model">
                   <?php echo $this->msg; ?>
                </select>
                <i class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></i>
            </div>
            <div class="form-group has-success has-feedback">
                <label class="control-label" for="text-input">Miesto detekcie</label>
                <select class="form-control input-lg" name="place">
                  <?php
                    $sql = "SELECT MIESTO_DETEKCIE FROM miesta_detekcie_tbl";
                    $vysledok = $databaza->connection->query($sql);
                    while ($riadok = $vysledok->fetch_assoc()) {
                        echo "<option value='".$riadok["MIESTO_DETEKCIE"]."'>".$riadok["MIESTO_DETEKCIE"]."</option>";
                    }
                  ?>
                </select>
                <i class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></i>
            </div>
            <div class="form-group has-success has-feedback">
                <label class="control-label" for="text-input">UR</label>
                <select class="form-control input-lg" id="urselect" name="ur">
                  <?php
                    $sql = "SELECT UR FROM ur_tbl WHERE UR != ''";
                    $vysledok = $databaza->connection->query($sql);
                    while ($riadok = $vysledok->fetch_assoc()) {
                        echo "<option value='".$riadok["UR"]."'>".$riadok["UR"]."</option>";
                    }
                  ?>
                </select>
                <i class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></i>
            </div>
            <div class="form-group has-success has-feedback">
                <label class="control-label" for="text-input">UEP</label>
                <select class="form-control input-lg" id="uepselect" name="uep">
                  <?php
                    $sql = "SELECT UEP FROM uep_tbl WHERE (SELECT UR FROM ur_tbl WHERE UR != '' LIMIT 1)";
                    $vysledok = $databaza->connection->query($sql);
                    while ($riadok = $vysledok->fetch_assoc()) {
                        echo "<option value='".$riadok["UEP"]."'>".$riadok["UEP"]."</option>";
                    }
                  ?>
                </select>
                <i class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></i>
            </div>
            <div class="form-group has-success has-feedback">
                <label class="control-label" for="text-input">Popis problemu </label>
                <textarea class="form-control" name="popis"></textarea><i class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></i>
            </div>
            <input type="hidden" name="akcia" value="Vytvor">
        </form>
        <div class="thumbnail"><img src="assets/img/avatar_2x.png"></div>
        <fieldset></fieldset>
        <input type="file" accept="image/*">
  </div>
  <div class="container-fluid">
    <div class="row">
    <div class="well">
        <button class="btn btn-success btn-block btn-lg" type="submit" id="postitsubmit">Vytvorit novy Post-it</button>
    </div>
    </div>
  </div>
</div>

<script src="<?php echo URL; ?>public/js/create.js"></script>
