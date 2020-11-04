/*29/10/2020 - Jesus Alan Hernandez Rodarte*/

var num = prompt("Dame un numero:");

alert(parOimpar(num));

function parOimpar(numero){

  if((numero%2)==0){

    numero = "El numero es par";
  }else{
    numero = "El numero es impar";
  }

  return numero;

}

