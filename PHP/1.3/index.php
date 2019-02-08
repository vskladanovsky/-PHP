 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
 <script type="text/javascript">
  function funcSuccess(data){
    $("#result").text(data);
  }
    $(document).ready (function(){
            $.ajax({
              url: "func.php",
              type: "POST",
              dataType: "html",
              success: funcSuccess
            });
      });
</script>
<p id="result"></p>
