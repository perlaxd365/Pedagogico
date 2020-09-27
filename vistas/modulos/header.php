<style type="text/css">
.slider {
  width: 60%;
  margin: auto;
  overflow: hidden;
}

.slider ul {
  display: flex;
  padding: 0;
  width: 400%;
  
  animation: cambio 20s infinite alternate linear;
}

.slider li {
  width: 100%;
  list-style: none;
}

.slider img {
  width: 100%;
}

@keyframes cambio {
  0% {margin-left: 0;}
  20% {margin-left: 0;}
  
  25% {margin-left: -100%;}
  45% {margin-left: -100%;}
  
  50% {margin-left: -200%;}
  70% {margin-left: -200%;}
  
  75% {margin-left: -300%;}
  100% {margin-left: -300%;}
}


</style>
    <div class="hero-wrap">
      <div class="overlay"></div>
      <div class="circle-bg"></div>
      <div class="circle-bg-2"></div>
      <div class="container-fluid">
        <div class="slider-text d-md-flex align-items-center" data-scrollax-parent="true">

          <div class="one-forth pr-md-4 align-self-md-center" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Repositorio <br> Instituto Superior <br> Pedagógigo de Chimbote</h1><h2></h2>
            <p class="mb-md-5 mb-sm-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Alojamiento de investigaciones de estudiantes y formadores</p>
            <p style="
        cursor: pointer;" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a class=" ir-arriba btn btn-primary px-4 py-3" <?php if ($pagina[0]=="investigacionlist"): echo "";
                  else : echo "href=".SERVERURL."investigacionlist/";?>

          <?php endif ?> >Iniciar Búsqueda</a></p>

          </div>
          <div class="slider">
      <ul>
        <li>
    <img  class="mb-md-5 mb-sm-3"  src="<?php echo SERVERURL;?>vistas/images/estudiantes2.png" alt="">
  
 </li>
        <li>
    <img  class="mb-md-5 mb-sm-3"  src="<?php echo SERVERURL;?>vistas/images/estudiantes4.png" alt="">
  
</li>
        <li>

    <img  class="mb-md-5 mb-sm-3"   src="<?php echo SERVERURL;?>vistas/images/estudiantes3.png" alt="">
</li>
        <li>
    <img  class="mb-md-5 mb-sm-3"  src="<?php echo SERVERURL;?>vistas/images/estudiantes2.png" alt="">


</li>
      </ul>
    </div>
        </div>

        
      </div>
    </div>
    <script type="text/javascript">
   $(document).ready(function() {
   
   $('html,body').animate({
            scrollTop: $("#investigacion").offset().top
        }, 400);
    $(".ir-arriba").click(function () {

        $('html,body').animate({
            scrollTop: $("#investigacion").offset().top
        }, 400);
    });

});
    </script>