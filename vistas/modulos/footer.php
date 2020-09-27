
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">REPOSITORIO IESPP</h2>
              <p>Somos una institución que brinda formación inicial y en servicio de docentes, que desarrolla el pensamiento crítico, enfatiza el aprendizaje mediante la práctica y genera investigaciones e innovaciones que mejoran los procesos de E-A.</p>
              <p style="
        cursor: pointer;" class="mt-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a class="btn btn-primary p-3"<?php if ($pagina[0]=="investigacionlist"): echo "";
                  else : echo "href=".SERVERURL."investigacionlist/";?>

          <?php endif ?> >Iniciar Búsqueda</a></p>
            </div>
          </div>





          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Accesos Directos</h2>
              <ul class="list-unstyled">
              <?php
              $consulta=mainModel::ejecutar_consulta_simple("SELECT * FROM tipo_doc");
              while ($campos=$consulta->fetch()) {

               ?>

              <li><a href="<?php echo SERVERURL ?>investigacioncategory/<?php echo $campos[0]?>/" class="py-2 d-block"><?php echo $campos['nombre_tipo_doc'];?></a></li>

              

              
              <?php
              }
              ?>
              </ul>

            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Acerca de...</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">Av. Los Alcatraces S/N. Urb. Los Héroes – Nuevo Chimbote.</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+01-123456789</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">pedagogicochimbote@hotmail.com</span></a></li>
                  <li><span class="icon icon-clock-o"></span><span class="text">Lunes &mdash; Viernes 8:00am - 5:00pm</span></li>
                </ul>
              </div>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos Reservados| Esta plantilla esta <i class="icon-heart" aria-hidden="true"></i> Desarrollado por <a href="https://colorlib.com" target="_blank">Cesar Baca</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>