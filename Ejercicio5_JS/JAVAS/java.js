/*22/10/2020 - Jesus Alan Hernandez Rodarte*/

var letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];

var dni = prompt("Ingrese su numero de DNI");

var residuo;

var letradni = prompt("Ingrese su letra");

if(dni < 0 || dni > 99999999){

  alert("El número proporcionado no es válido");

}else{

  residuo = (dni%23)

  if(letras[residuo]==letradni){
    alert("El número y la letra de DNI son correctos.");
  }else{
    alert("La letra no es correcta");
  }

}



