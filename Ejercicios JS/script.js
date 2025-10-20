function calcular_viaje() {
  const viajeros = parseInt(document.getElementById('viajeros').value);
  const destino = document.getElementById('destino').value;
  const estancia = parseInt(document.getElementById('estancia').value);
  const hotelCat = document.getElementById('hotel_cat').value;
  const coche = document.getElementById('coche').value;
  const seguro = document.getElementById('seguro').value;

  // Precios estimados por destino (ida y vuelta por persona)
  const preciosVuelo = {
    'Buenos Aires': 900,
    'Nueva York': 750,
    'Ciudad del Cabo': 800,
    'El Cairo': 500,
    'Estambul': 450,
    'Roma': 300,
    'Tokio': 950,
    'Sídney': 1100,
  };

  // Precio base hotel (por noche en habitación doble)
  const precioBaseHotel = 80;

  // Factores según categoría hotelera
  const factoresHotel = {
    3: 1,
    4: 1.35,
    5: 1.8
  };

  // Precio de alquiler coche por día
  const preciosCoche = {
    'ninguno': 0,
    'eco': 30,
    'mediano': 50,
    'suv': 80
  };

  const seguroViaje = {
    'ninguno': 0,
    'basico': 15,
    'completo': 20
  };

  if (!destino || isNaN(estancia) || estancia < 1 || viajeros < 1) {
    alert("Por favor, completa todos los datos del viaje correctamente.");
    return;
  }

  // VUELO
  const precioVuelo = preciosVuelo[destino] * viajeros * 2; // ida y vuelta

  // HOTEL (habitaciones dobles → 2 personas por habitación)
  const habitaciones = Math.ceil(viajeros / 2);
  const precioHotel = habitaciones * estancia * precioBaseHotel * factoresHotel[hotelCat];

  // COCHE
  const precioCoche = preciosCoche[coche] * estancia;

  // SEGURO
    const precioSeguro = seguroViaje[seguro] * viajeros;

  // SUBTOTAL, IVA y TOTAL
  const subtotal = precioVuelo + precioHotel + precioCoche + precioSeguro;
  const iva = subtotal * 0.21;
  const total = subtotal + iva;

  // Mostrar en pantalla con formato
  document.getElementById('vuelo').value = formatearEuros(precioVuelo);
  document.getElementById('hotel').value = formatearEuros(precioHotel);
  document.getElementById('coche_total').value = formatearEuros(precioCoche);
  document.getElementById('bruto').value = formatearEuros(subtotal);
  document.getElementById('iva').value = formatearEuros(iva);
  document.getElementById('neto').value = formatearEuros(total);

  // Mostrar mensaje de validación
  const nota = document.getElementById('nota-validacion');
  nota.style.display = 'block';
  nota.textContent = `Presupuesto calculado correctamente para ${viajeros} viajero(s) a ${destino}.`;
}

// Función para formatear en euros
function formatearEuros(cantidad) {
  return cantidad.toLocaleString('es-ES', {
    style: 'currency',
    currency: 'EUR',
    minimumFractionDigits: 2
  });
}

