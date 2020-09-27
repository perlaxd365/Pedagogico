
    
    
   <section class=" bg-light">
      <div class="container" id="invlist" >
        <div class="row justify-content-center mb-5 mt-5">
          <div class="col-md-7 text-center heading-section ">
            <span class="subheading">Buscar</span>
            <h2 class="mb-4">Buscar Investigacion</h2>
            <p>Introduce el titulo,autor,resumen o alguna palabra clave</p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-8 ">
            <form action="" method="POST" class="domain-form">
              <div class="form-group d-md-flex">
                <input type="text" class="form-control px-4" name="buscar-inv" placeholder="Buscar Investigacion . . . ">
                <input type="submit" class="search-domain btn btn-primary px-5" value="Buscar Investigacion">
              </div>
            </form>
            <p class="domain-price text-center"><span><small>Estudiantes</small>9.75</span> <span><small>Formadores</small>9.90</span> <span><small>Cogestionadas</small>$8.95</span> </p>
          </div>
        </div>
      </div>
    </section>


    <?php require_once './controladores/documentoControlador.php';
        $doc = new documentoControlador();
     ?>
    <section class="">
      <div class="container">
        <div class="row">
          <div class="col-md-12 ">

            <?php 
            $pagina=explode("/",$_GET['views']);
              if (isset($_POST['buscar-inv'])) {
                if (!isset($pagina[1])) {
                  $pagina[1]="1";
                }
                $buscar=$_POST['buscar-inv'];
            echo $doc->paginador_administrador_controlador($pagina[1],30,$buscar);
              }
          ?>

          </div>
        </div>
      </div>

        
    </section>
    <br>
    <br>

 <script type="text/javascript">
    $(document).ready(function() {
   $('html,body').animate({
            scrollTop: $("#invlist").offset().top
        }, 400);
    $(".ir-inve").click(function () {

        $('html,body').animate({
            scrollTop: $("#invlist").offset().top
        }, 400);
    });

});
  </script>