/*27/10/2020 - Jesus Alan Hernandez Rodarte*/

alert(invertir("La ruta nos aporto otro paso natural"));

function invertir(texto) {

  texto=texto.replace(/ /g, "");
  texto = texto.toLowerCase();
  var x = texto.length;
  var textoinver = "";

  alert(texto);

  while (x >= 0) {

    textoinver = textoinver + texto.charAt(x);
    x--;

  }

  if(texto == textoinver){
    alert("Es un palindromo");

  }else{
    alert("No es un palindromo");
  }

  return textoinver;
}




