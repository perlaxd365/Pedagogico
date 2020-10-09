
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>INSTITUTO PEDAGOGICO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!--  scripts -->
    <?php include "modulos/script.php";

    session_start(['name'=>'SRP']);?>
    <?php include "modulos/link.php";?>
    <!-- END scripts -->
  </head>
  <body>



    
    
<?php 

  $peticionAjax=false;
  require_once"./controladores/vistasControlador.php";

    $vt = new vistasControlador();
    $vistasR =$vt -> obtener_vistas_controlador();

    if ($vistasR=="home"|| $vistasR=="404"){
      if ($vistasR=="home") {
        $var=SERVERURL;

        echo "<script>window.location.href = '".$var."home';</script>";

      }else{
        require_once"./vistas/contenidos/404-view.php";
      }
      
    }else{




      include "./controladores/loginControlador.php";
      $lc = new loginControlador();

    

    include "modulos/navbar.php";
    include "modulos/header.php";


   require_once $vistasR; ?>

  
    <!--  footer -->
    <?php include "modulos/footer.php";?>
    <!-- END footer -->

    
  </body>
<div class="loader"></div>

  <?php include "modulos/logoutScript.php";?>
<?php   } ?>
<script type="text/javascript">
  $.material.init();
</script>
<style type="text/css">
  .loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url('<?php echo SERVERURL;?>vistas/images/loading.gif') 50% 50% no-repeat rgb(249,249,249);
    opacity: .8;
}
</style>
<script type="text/javascript">
$(window).load(function() {
    $(".loader").fadeOut("slow");
});
var el = $('a.button'); // the element you want to hover over
var hi = $('div.hidden'); // the div containing the hidden buttons

el.hover(function(){
    //do this when the mouse hovers over the link, eg
    hi.show('slide',{direction:'right'},250);
}, function(){
    //do this when the mouse leaves the link, eg
    hi.hide('slide',{direction:'left'},250);
});
</script>