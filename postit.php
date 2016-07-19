<?php
    session_start();
    require "php/backend.php";
    if (isset($_GET["id"])) $_SESSION["postit_id"] = $_GET["id"];
?>
<!DOCTYPE html>
<html lang="sk">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Postit</title>
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-datepicker3.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-table.min.css" rel="stylesheet">
    <link href="assets/css/Google-Style-Login.css" rel="stylesheet">
    <link href="assets/css/kniha.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="assets/js/jquery.min.js"></script>
  </head>
  <body>
    <div class="container" id="container-prihlasenie">
      <?php
        if ($_SESSION["prihlaseny"] != "ano") {
          echo $generator->login();
        } else {
          if (isset($_SESSION["postit_id"])) {
            echo $generator->postit($_SESSION["role"]);
            unset($_SESSION["postit_id"]);
          } else {
            if (isset($_SESSION["add"])) {
              echo $generator->add();
              unset($_SESSION["add"]);
            } else {
              echo $generator->prehlad($_SESSION["role"]);
            }
          }
        }
      ?>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/libs/FileSaver/FileSaver.min.js"></script>
    <script src="assets/js/libs/jsPDF/jspdf.min.js"></script>
    <script src="assets/js/libs/jsPDF-AutoTable/jspdf.plugin.autotable.js"></script>
    <script src="assets/js/tableExport.min.js"></script>
    <script src="assets/js/bootstrap-table.min.js"></script>
    <script src="assets/js/bootstrap-table-export.min.js"></script>
    <script src="assets/js/bootstrap-table-sk-SK.min.js"></script>
    <script src="assets/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/js/bootstrap-datepicker.sk.min.js" charset="UTF-8"></script>
    <script src="assets/js/bootstrap-table-filter-control.min.js"></script>
  </body>
</html>