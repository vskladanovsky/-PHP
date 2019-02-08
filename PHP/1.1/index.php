 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
 <script type="text/javascript">
  function funcSuccess(data){
    $("#result").text(data);
  }
    $(document).ready (function(){
      $("#btn").click(function(){
        var x = $("#x").val();
        if (isNaN(x) || x == '') {
            alert( "Ошибка введите число." );
          } else {
            $.ajax({
              url: "func.php",
              type: "POST",
              data: ({number : x}),
              dataType: "html",
              success: funcSuccess
            });
          }
      });
    });
</script>
x:<input type="text" name="x" id="x">
<button type="button" name="button" id="btn">Send</button>
<p id="result"></p>
