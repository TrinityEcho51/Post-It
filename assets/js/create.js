$(function() {
  var vratRfs = function() {
    $("#rfspopis").text("Popis RFS");
  }
  var vratNature = function() {
    $("#naturepopis").text("Popis Nature");
  }
  var rfszadane = 0;
  var naturezadane = 0;
  
  $("#rfs").on("input", function() {
    var len = $(this).val().length;
    var val = $(this).val();
    rfszadane = 0;

    if (len == 5) {
      $.post("php/readrfs_nature.php", {rfs: val}, function(resp) {
        if (resp != null) {
          $("#rfspopis").text(resp.POPIS_SK);
          rfszadane = 1;
          $("#nature").focus();
          $("#container-tab_postit").trigger("zobraz");
        } else {
          $("#rfspopis").text("Neexistujúce RFS");
          setTimeout(vratRfs, 2000);
        }
      }, "json");
    } else {
      $("#rfspopis").text("Popis RFS");
    }
  });
  
  $("#nature").on("input", function() {
    var len = $(this).val().length;
    var val = $(this).val();
    naturezadane = 0;

    if (len == 3) {
      $.post("php/readrfs_nature.php", {nature: val}, function(resp) {
        if (resp != null) {
          $("#naturepopis").text(resp.POPIS_SK);
          naturezadane = 1;
          $("#container-tab_postit").trigger("zobraz");
        } else {
          $("#naturepopis").text("Neexistujúce Nature");
          setTimeout(vratNature, 2000);
        }
      }, "json");
    } else {
      $("#naturepopis").text("Popis Nature");
    }
  });
  
  $("#container-tab_postit").on("zobraz", function() {
    if (rfszadane && naturezadane) {
      var rfs = $("#rfs").val();
      var nature = $("#nature").val();
      $.post("php/readpostits.php", {rfs: rfs, nature: nature}, function(resp) {
        var riadok = "";
        if (resp.length > 0) {
          for (i in resp) {
          riadok += "<tr><td>"+resp[i].STAV_KOD+
                    "</td><td>"+resp[i].IMPUTACIA_UR+
                    "</td><td>"+resp[i].DATUM+
                    "</td><td>"+resp[i].PREZENTACIA_CHYBY+"</td></tr>";
          }
        } else {
          riadok += "<tr><td colspan='4' class='lead' style='text-align: center'>ŽIADNA ZHODA</td></tr>";
        }
        $("#container-tab_postit table tbody").html(riadok);
        $("#container-tab_postit").slideDown();
      }, "json");
    }
  });
  
  $("#nevytvor").click(function() {
    $("#container-tab_postit").slideUp(function() {
      $("#rfs").val("");
      $("#nature").val("");
    });
  });
  
  $("#vytvor").click(function() {
    $("#container-tab_postit").slideUp(function() {
      $("#container-createpostit").slideDown();
    });
  });
  
  $("#urselect").on("change", function() {
    $("#uepselect").val("").prop("disabled", true);
    var ur = $(this).val();
    $.post("php/readuep.php", {ur: ur}, function(resp) {
        var riadok = "";
        if (resp.length > 0) {
          for (i in resp) {
            riadok += "<option value='"+resp[i].UEP+"'>"+resp[i].UEP+"</option>";
          }
        } else {
          riadok += "<option value='' selected></option>";
        }
        $("#uepselect").html(riadok).prop("disabled", false);
    }, "json");
  });
  
  $("#postitsubmit").click(function() {
    $("#createpostit").submit();
  });
});
