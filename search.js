/*

*/

let search = (str) => {

//iniciar o Ajax apartir do 4º caractere

if(str.length <= 2) {
 $('#res').html("");
 return;
}


//Retirando Símbolos e carácteres perigosos
//apenas chaves alfanuméricas
str = str.replace(/[^A-Za-z0-9\s]/g,"");

//Ajax
$.ajax({
    type: "POST", //tipo: POST (mais seguro)
    url: "search.php", //Arquivos receptor
    data: { key: str }, //Argumento da requisição
  })
  
   //Caso retorne SUCCESS extraía o vetor da reposta
  .done(function(resposta) {
  

    $('#res').html('');
    $('#res').append(resposta);
    
  })
  

  .fail(function( resposta ) {
   $('#res').html('');
   $('#res').append(resposta);
  });
  


}