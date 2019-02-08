 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
 <script type="text/javascript">
  function funcSuccess(data){
    $("#result").text(data);
  }
    $(document).ready (function(){
      $("#btn").click(function(){
        var x = $("#x").val();
        var y = $("#y").val();
          if (x == '' || y == '')
              alert("Заполните все поля!");
          else if (isNaN(x) || isNaN(y))
              alert( "Ошибка введите цифры!" );
          else if(x > 10)
            alert("Введите одну цифру в поле 'Цифра которую нужно найти'!");
          else {
            $.ajax({
              url: "func.php",
              type: "POST",
              data: ({x : x, y : y}),
              dataType: "html",
              success: funcSuccess
            });
          }
      });
    });
</script>
<p>Цифра которую нужно найти</p><input type="text" name="x" id="x">
<p>Число в котором нужно найти</p><input type="text" name="y" id="y">
<p><button type="button" name="button" id="btn">Посчитать</button><p>
<p id="result"></p>
