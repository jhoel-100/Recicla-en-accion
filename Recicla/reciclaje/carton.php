<?php
// la ruta en el inde tiene que salir vacio
    $ruta ="";
    include_once "../plantilla/cabecera.php";
?>
<style>
  .background-gradient {
    background: linear-gradient(135deg, #56aa1c, #024930); /* Degradado de colores */
    padding: 30px; /* Espacio alrededor del contenido */
    border-radius: 15px; /* Bordes redondeados para un efecto más suave */
  }

</style>

<div class="container background-gradient  text-white">
<h2 class="text-center ">CARTON Y PAPEL</h2> <br>
<p>No se puede reciclar todo tipo de papel, entre su clasificación tenemos: periordicos, revistas, 
 folletos publicitarios, papel escrito y fotocopias. El papel higienico o sanitario, papel de fax o fotografia,
 papel encerado o parafina no pueden ser introducidos en el contenedor de reciclaje la razón es  que lo que realmente 
 se recicla es la celulosa, principal material que conforma el papel. Sin embargo, no todo está compuesto por ella. <br>

La degradación del papel y el cartón al estar compuesto prácticamente por celulosa, tiende a descomponerse con mayor rapidez. La lluvia acelera su degradado, pero aun así la media que tarda un papel en degradarse ronda un año entero, 365 días.

Lo recomendable es darle un nuevo uso al papel y al cartón. también podemos recolectar una gran cantidad y llevarlo a un centro de reciclaje, algunas ideas para reciclarlo desde casa son las siguientes:
<br>
1. Cajas organizadoras <br>
2. Joyeros <br>
3. Lámparas de cartón <br>
4. Impresiones no formales </p>


<h2 class="text-center">TE DEJAMOS ALGUNAS DUDAS</h2>
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8"> <!-- Puedes ajustar el ancho de la columna si es necesario -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../imagen/car.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Casita de carton</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../imagen/carton.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Porta La piz</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../imagen/huevo.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Tortuga de maple</h5>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
</div>
</div>
<br>
<div class="ratio ratio-16x9">
  <iframe src="https://www.youtube.com/embed/DRq5AC3F5K4" title="YouTube video" allowfullscreen></iframe>
</div>
</div>
<?php
    include_once "../plantilla/piepagina.php";
?>