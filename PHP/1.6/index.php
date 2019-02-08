<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript">
 function funcSuccess(data){
   $("#result").text(data);
 }
   $(document).ready (function(){
     $("#btn").click(function(){
       var time = $("#time").val();
       if (isNaN(time) || time == '')
           alert( "Ошибка введите число." );
        else {
           if (time <= 0 || time > 60)
             alert ("Время должно быть задано в промежутке от 1 до 60")
           else{
             $.ajax({
               url: "func.php",
               type: "POST",
               data: ({min : time}),
               dataType: "html",
               success: funcSuccess
             });
           }
         }
     });
   });
</script>
Введите минуту<input type="text" name="x" id="time">
<button type="button" name="button" id="btn">Определить</button>
<p id="result"></p>
