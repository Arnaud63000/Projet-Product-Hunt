/*
$("#btn-vote").click(function(){

     

    $.ajax({

       url : '../includes/vote.php',

       type : 'POST',

       dataType : '',

       success : function(code_html, statut){

           $(code_html).appendTo("#commentaires"); // On passe code_html à jQuery() qui va nous créer l'arbre DOM !

       },


       error : function(resultat, statut, erreur){

         

       },


       complete : function(resultat, statut){


       }


    });

   

});
*/


setInterval(
    function () {
      $('#btn-vote').load('index.php').fadeIn("slow");
     } 
     , 3000);
