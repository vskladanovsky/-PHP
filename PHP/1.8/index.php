<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript">
 function funcSuccess(data){
   $("#result").text(data);
 }
   $(document).ready (function(){
     $("#btn").click(function(){
       var card = $("#card").val();
       if (isNaN(card) || card == '')
           alert( "Ошибка введите число." );
        else {
           if (card <= 6 || card > 14)
             alert ("Время должно быть задано в промежутке от 6 до 14")
           else{
             $.ajax({
               url: "func.php",
               type: "POST",
               data: ({card : card}),
               dataType: "html",
               success: funcSuccess
             });
           }
         }
     });
   });
</script>
Введите номер карты<input type="text" name="x" id="card">
<p>Номер от 6 до 14</p>
<button type="button" name="button" id="btn">Определить</button>
<p id="result"></p>
