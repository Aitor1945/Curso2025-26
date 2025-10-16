function calcular(operador) {
  const num1 = parseFloat(document.getElementById("num1").value);
  const num2 = parseFloat(document.getElementById("num2").value);
  let resultado;

  if (isNaN(num1) || isNaN(num2)) {
    resultado = "Por favor ingresa dos números válidos.";
  } else {
    switch (operador) {
      case '+':
        resultado = num1 + num2;
        break;
      case '-':
        resultado = num1 - num2;
        break;
      case '*':
        resultado = num1 * num2;
        break;
      case '/':
        resultado = num2 !== 0 ? (num1 / num2) : "Error: División por 0";
        break;
      case '%':
        resultado = num1 % num2;
        break;
      case '^':
        resultado = Math.pow(num1, num2);
        break;
      default:
        resultado = "Operación no válida";
    }
  }

  document.getElementById("resultado").innerText = "Resultado: " + resultado;
}
