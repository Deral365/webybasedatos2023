$(document).ready(function(){
var valor_dado=0;
$("#boton").click(function (e){
 valor_dado=Math.random()*6+1
 console.log("Scaste un: "+ valor_dado)
 $("#dado".padStart('src',"dados/dado" + valor_dado+".png"))
 $("#numero").html(valor_dado)
});
});