var valores = [true, 5, false, "hola", "adios", 2];

/*PARTE 1*/ 
if (valores[3]>valores[4]){
    alert(valores[3] + "-Es mayor-");

}else{
    alert(valores[4] + "-Es mayor-");
}


/*PARTE 2*/ 
alert(valores[0] || valores[2]);/*TRUE*/
alert(valores[0] && valores[2]);/*FALSE*/

/*PARTE 3*/ 

var resultado;

resultado = valores[1] + valores[5]; /*SUMA*/
alert(resultado);

resultado = valores[1] - valores[5]; /*RESTA*/
alert(resultado);

resultado = valores[1] * valores[5]; /*MULTIPLICACIÓN*/
alert(resultado);

resultado = valores[1] / valores[5]; /*DIVISIÓN*/
alert(resultado);

resultado = valores[1] % valores[5]; /*MODULO*/
alert(resultado);