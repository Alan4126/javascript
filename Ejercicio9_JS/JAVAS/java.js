/*29/10/2020 - Jesus Alan Hernandez Rodarte*/

var cad = prompt("Dame una cadena:");

tipo(cad);

function tipo(cadena){

  if(cadena == cadena.toUpperCase()){
    alert("TODO ES MAYUSCULAS");
  }else if(cadena == cadena.toLowerCase()){
    alert("todo es minusculas");
  }else{
    alert("Es Una Combinación")
  }
  

  


}

