
             
 <?php
    $ruta ="";
    include_once "plantilla/cabecera.php";
?>  
             
<!-- Estilos -->
<style>
  .background-gradient {
    background: linear-gradient(135deg, #56aa1c, #024930); /* Degradado de colores */
    padding: 30px; /* Espacio alrededor del contenido */
    border-radius: 15px; /* Bordes redondeados para un efecto más suave */
  }

  .carousel-inner img {
    border-radius: 15px;
  }

  .card {
    border-radius: 15px;
  }
  
  .card-img-top {
    height: 200px; /* Altura fija para las imágenes */
    object-fit: cover; /* Mantiene la relación de aspecto y rellena el área */
  }

</style>

<div class="container background-gradient text-center">
  <h1 class="text-white">RECICLA REDUCE REUTILIZA</h1>
  
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="imagen/reduce.jpg" class="d-block w-100" alt="charuyyyt">
          </div>
          <div class="carousel-item">
            <img src="imagen/reu.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="imagen/recicla.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>

  <br>

  <div class="container full-height d-flex align-items-center">
    <div class="row justify-content-center w-100">
        <div class="col-md-4 d-flex justify-content-center mb-4">
            <div class="card" style="width: 18rem;">
                <img src="imagen/chatarrero.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h3 class="card-title">RECICLAJE</h3>
                    <p class="card-text">
                        El reciclaje convierte materiales que se hubieran convertido en desechos en recursos valiosos. Recoger materiales reciclables es solo un paso en una serie de acciones que generan ganancias financieras, ambientales y sociales.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center mb-4">
            <div class="card" style="width: 18rem;">
                <img src="imagen/reuti.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h3 class="card-title">REUTILIZA</h3>
                    <p class="card-text">
                        Reutilizar es la acción que permite volver a utilizar bienes o productos desechados, dándoles un nuevo uso. Cuantos más objetos reutilicemos, menos basura produciremos y menos recursos gastaremos.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center mb-4">
            <div class="card" style="width: 18rem;">
                <img src="imagen/re.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h3 class="card-title">REDUCE</h3>
                    <p class="card-text">
                        Reducir significa disminuir la cantidad de residuos que generamos. Reutilizar objetos para evitar tirarlos y reciclar para convertir lo que ya no necesitamos en nuevos productos.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

</div>






 <?php
    include_once "plantilla/piepagina.php";
?>