
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <img  width="50" src="<?php echo SERVERURL;?>vistas/images/logo.png">
    <a style="padding-left: 30px" class="navbar-brand" href="<?php echo SERVERURL;?>home/">REPOSITORIO IESPP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <?php  

        if (isset($_GET['views'])) {
         $pagina=explode("/",$_GET['views']);
       }else{
       }


       ?>
       <!-- INICIO -->
       <li class="nav-item <?php if ($pagina[0]=="home"){echo "active";}else{echo"";} ?>"><a href="<?php echo SERVERURL;?>home/"class="nav-link">Inicio</a></li>


       <!-- INVESTIGACIONES -->
       <li class="ir-inv nav-item <?php if ($pagina[0]=="investigacionlist"){echo "active";}else{echo"";} ?>" ><a style="cursor: pointer;"
        <?php if ($pagina[0]=="investigacionlist"): echo "";
          else : echo "href=".SERVERURL."investigacionlist/";?>

          <?php endif ?>

          class="nav-link">Investigaciones</a></li>


          <!-- INVENTARIO -->
         

              <!-- REGISTRO -->

              <?php if (isset($_SESSION['tipo_usuario_srp'])): ?>
                <li class="ir-reg nav-item <?php if ($pagina[0]=="registro"){echo "active";}else{echo"";} ?>"><a style="cursor: pointer;" <?php if ($pagina[0]=="registro/"): echo "";
                else : echo "href=".SERVERURL."registro/";?>
                  <?php endif ?> class="nav-link">Registro</a></li>

                <?php endif ?>


                <?php if (isset($_SESSION['tipo_usuario_srp'])): ?>

                   <div class="input-group mb-3">
                    <div class="input-group-">
                    <li  data-toggle="dropdown" style=" padding-top: 4px; "  class="nav-item <?php if ($pagina[0]!="invlist" || $pagina[0]!="lineaList"){echo "active";}else{echo"";} ?>"><a  href="<?php echo SERVERURL;?>home/"class=" dropdown-toggle nav-link">Listados</a></li>
                      <div class="dropdown-menu">
                        <a class="dropdown-item "  href="<?php echo SERVERURL;?>invlist/">Investigaciones</a>
                        <a class="dropdown-item "  href="<?php echo SERVERURL;?>lineaList/">Lineas de investigacion</a>
                      </div>
                    </div>
                  </div>


                  <div class="dropdown"style=" padding-top: 8px; padding-left: 17px">
                     <button   class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">
                     <span class="caret" style="color: #8D8D8D" >Administrador</span></button>
                       <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                       <a class="dropdown-item btn-exit-system"  href="<?php echo $lc->encryption($_SESSION['token_srp']);?>">Cerrar Sesión</a>
                       </ul>
                  </div>


                  



                  <?php else: ?>

                    <li class="nav-item cta ir " style="
                    cursor: pointer;"><a 
                    <?php if ($pagina[0]=="login"): echo "";
                      else : echo "href=".SERVERURL."login";?>

                      <?php endif ?>

                      class="nav-link" ><span>INICIAR SESION</span></a></li>
                    <?php endif ?>

                  </ul>
                </div>
              </div>
            </nav>

            <script type="text/javascript">
              $(document).ready(function() {
                $(".ir").click(function () {

                  $('html,body').animate({
                    scrollTop: $("#iniciar-sesion").offset().top
                  }, 400);
                });

              });
            </script>