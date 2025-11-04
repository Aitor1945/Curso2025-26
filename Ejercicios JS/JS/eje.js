// Array del inventario
let inventario = [];

// Agregar producto o sumar cantidad si ya existe
function agregarProducto(nombre, precio, cantidad) {
  for (let i = 0; i < inventario.length; i++) {
    if (inventario[i].nombre === nombre) {
      inventario[i].cantidad += cantidad;
      return; 
    }
  }

  inventario.push({ nombre, precio, cantidad });
}

// Calcular
function calcularValorTotal() {
  let total = 0;
  for (let i = 0; i < inventario.length; i++) {
    total += inventario[i].precio * inventario[i].cantidad;
  }
  return total;
}

// Mostrar productos 
function mostrarProductos() {
  if (inventario.length === 0) {
    return "El inventario está vacío.";
  }

  let lista = "";
  for (let i = 0; i < inventario.length; i++) {
    lista += `Producto: ${inventario[i].nombre} | Precio: $${inventario[i].precio.toFixed(2)} | Cantidad: ${inventario[i].cantidad}\n`;
  }
  return lista;
}


agregarProducto("Manzanas", 1.2, 10);
agregarProducto("Peras", 1.5, 5);
agregarProducto("Manzanas", 1.2, 3);

console.log(mostrarProductos());
console.log("Valor total del inventario: $" + calcularValorTotal().toFixed(2));
