<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript">
 function funcSuccess(data){
   $("#result").text(data);
 }
   $(document).ready (function(){
     $("#btn").click(function(){
       var year = $("#year").val();
       if (isNaN(year) || year == '')
           alert( "Ошибка введите число." );
        else {
           if (year <= 0 || year > 9999)
             alert ("Время должно быть задано в промежутке от 1 до 9999")
           else{
             $.ajax({
               url: "func.php",
               type: "POST",
               data: ({year : year}),
               dataType: "html",
               success: funcSuccess
             });
           }
         }
     });
   });
</script>
Введите год<input type="text" name="x" id="year">
<button type="button" name="button" id="btn">Определить</button>
<p id="result"></p>
