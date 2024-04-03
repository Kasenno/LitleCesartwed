// Manejo de visibilidad del formulario de tarjeta según método de pago seleccionado
var metodoPagoSelect = document.getElementById('metodo');
var tarjetaForm = document.querySelector('.tarjeta-form');

metodoPagoSelect.addEventListener('change', function() {
    if (this.value === 'tarjeta') {
        tarjetaForm.style.display = 'block';
    } else {
        tarjetaForm.style.display = 'none';
    }
});

// Manejo del cálculo de montos según cantidad de personas
var calcularBtn = document.getElementById('calcular');
var montosDiv = document.getElementById('montos');

calcularBtn.addEventListener('click', function() {
    var total = parseFloat(document.getElementById('total').value);
    var personas = parseInt(document.getElementById('personas').value);

    if (isNaN(total) || isNaN(personas) || personas < 1) {
        alert('Por favor, ingresa un total y una cantidad válida de personas.');
        return;
    }

    var montoPorPersona = total / personas;

    montosDiv.innerHTML = ''; // Limpiar contenido previo

    for (var i = 1; i <= personas; i++) {
        var montoPersona = document.createElement('p');
        montoPersona.textContent = 'Monto para Persona ' + i + ': $' + montoPorPersona.toFixed(2);
        montosDiv.appendChild(montoPersona);
    }
});
