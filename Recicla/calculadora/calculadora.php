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
  /* Degradado de fondo para los botones */
.btn-gradient {
    background: linear-gradient(45deg, #00b2aa, #005951); /* Cambia los colores según tus necesidades */
    color: white;
    border: none;
    font-weight: bold;
    width: 100%; /* Asegura que los botones llenen el espacio disponible */
}

/* Efecto al pasar el mouse */
.btn-gradient:hover {
    background: linear-gradient(45deg, #60c659, #3a7728); /* Invertir los colores en el hover */
    color: white;
}

</style>

<div class="container background-gradient d-flex align-items-center justify-content-center min-vh-90">
    <div class="card" style="width: 100%; max-width: 500px;">
        <div class="card-body">
            <h3 class="text-center mb-4">CALCULADORA</h3>

            <div class="mb-3">
                <input type="number" id="inputKilos" class="form-control" placeholder="Cuántos kilos es" aria-label="Recipient's username">
            </div>

            <div class="container">
                <div class="row mb-3 justify-content-center">
                    <div class="col-md-12 d-flex justify-content-between">
                        <button class="btn btn-gradient mx-2" type="button" onclick="calculate('botella')">Botella</button>
                        <button class="btn btn-gradient mx-2" type="button" onclick="calculate('nylon')">Nylon</button>
                        <button class="btn btn-gradient mx-2" type="button" onclick="calculate('plastico')">Plástico</button>
                    </div>
                </div>
                <div class="row mb-3 justify-content-center">
                    <div class="col-md-12 d-flex justify-content-between">
                        <button class="btn btn-gradient mx-2" type="button" onclick="calculate('zapato')">Zapato</button>
                        <button class="btn btn-gradient mx-2" type="button" onclick="calculate('papel')">Papel</button>
                        <button class="btn btn-gradient mx-2" type="button" onclick="calculate('bateria')">Bateria</button>
                    </div>
                </div>
                <div class="row mb-3 justify-content-center">
                  <div class="col-md-12 d-flex justify-content-between">
                      <button class="btn btn-gradient mx-2" type="button" onclick="calculate('papel')">Papel</button>
                      <button class="btn btn-gradient mx-2" type="button" onclick="calculate('cobre')">Cobre</button>
                      <button class="btn btn-gradient mx-2" type="button" onclick="calculate('radiador')">Radiador</button>
                  </div>
              </div>
              <div class="row mb-3 justify-content-center">
                  <div class="col-md-12 d-flex justify-content-between">
                      <button class="btn btn-gradient mx-2" type="button" onclick="calculate('plomo')">Plomo</button>
                      <button class="btn btn-gradient mx-2" type="button" onclick="calculate('ropa')">Ropa</button>
                      <button class="btn btn-gradient mx-2" type="button" onclick="calculate('bateria')">Fierro</button>
                  </div>
              </div>
            </div>

            <div class="mb-3">
                <input type="text" id="result" class="form-control" placeholder="Resultado individual" aria-label="Resultado" readonly>
            </div>
            <div class="mb-3">
                <input type="text" id="total" class="form-control" placeholder="Total acumulado" aria-label="Total" readonly>
            </div>

            <button class="btn btn-danger w-100" type="button" onclick="resetCalculator()">Reiniciar</button>
            
            <div class="mt-4">
                <h4>Historial de Cálculos</h4>
                <ul id="history" class="list-group">
                    <!-- Los cálculos se agregarán aquí -->
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
        let totalSum = 0;
        const historyList = document.getElementById('history');

        function calculate(type) {
            const inputKilos = document.getElementById('inputKilos').value;
            const resultField = document.getElementById('result');
            const totalField = document.getElementById('total');

            if (isNaN(inputKilos) || inputKilos.trim() === '') {
                resultField.value = 'Por favor, ingrese un número válido.';
                return;
            }

            const kilos = parseFloat(inputKilos);
            let result;

            switch (type) {
                case 'botella':
                    result = kilos * 2; // Ejemplo de cálculo
                    break;
                case 'nylon':
                    result = kilos * 2.5; // Ejemplo de cálculo
                    break;
                case 'plastico':
                    result = kilos * 2; // Ejemplo de cálculo
                    break;
                case 'fierro':
                    result = kilos * 1; // Ejemplo de cálculo
                    break;
                case 'cobre':
                    result = kilos * 35; // Ejemplo de cálculo
                    break;
                case 'aluminio':
                    result = kilos * 8; // Ejemplo de cálculo
                    break;
                case 'papel':
                    result = kilos * 1; // Ejemplo de cálculo
                    break;
                case 'zapato':
                    result = kilos * 8; // Ejemplo de cálculo
                    break;
                case 'ropa':
                    result = kilos * 0.50; // Ejemplo de cálculo
                    break;
                case 'bateria':
                    result = kilos * 4; // Ejemplo de cálculo
                    break;
                case 'radiador':
                    result = kilos * 15; // Ejemplo de cálculo
                    break;
                case 'plomo':
                    result = kilos * 8; // Ejemplo de cálculo
                    break;
                default:
                    result = 0;
                    resultField.value = 'Tipo no reconocido';
                    return;
            }

            resultField.value = `Resultado: ${result.toFixed(2)}`;
            totalSum += result;
            totalField.value = `Total acumulado: ${totalSum.toFixed(2)}`;
            
            // Agregar al historial
            const historyItem = document.createElement('li');
            historyItem.classList.add('list-group-item');
            historyItem.textContent = `${type.charAt(0).toUpperCase() + type.slice(1)}: ${result.toFixed(2)}`;
            historyList.appendChild(historyItem);
            
            // Limpiar el campo de entrada
            document.getElementById('inputKilos').value = '';
        }

        function resetCalculator() {
            totalSum = 0;
            document.getElementById('inputKilos').value = '';
            document.getElementById('result').value = '';
            document.getElementById('total').value = '';
            historyList.innerHTML = ''; // Limpiar historial
        }
    </script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>



<?php
    include_once "../plantilla/piepagina.php";
?>