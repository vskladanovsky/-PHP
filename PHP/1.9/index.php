<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript">
 function funcSuccess(data){
   $("#result").text(data);
 }
   $(document).ready (function(){
     $("#btn").click(function(){
       var year = $("#year").val();
       if (isNaN(year))
           alert( "Ошибка введите год." );
        if (year == '')
            alert("Вы не ввели занчение.")
        else {
           if (card < 1924)
             alert ("Год не может быть меньше 1924")
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
Введите год<input type="text" name="x" id="card">
<p>Год не может быть меньше 1924</p>
<button type="button" name="button" id="btn">Определить</button>
<p id="result"></p>
