 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
 <script type="text/javascript">
  function funcSuccess(data){
    $("#result").append(data);
  }
      $(document).ready (function(){
        $("#btn").click(function(){
          var name = $("#name").val();
          var surname = $("#surname").val();
          var secname = $("#secname").val();
            if (name == '' || surname == '' || secname == '')
                alert("Заполните все поля!");
            else if (!isNaN(name) || !isNaN(surname) || !isNaN(secname))
                alert( "Ошибка полях цифры цифры!" );
            else {
              $.ajax({
                url: "func.php",
                type: "POST",
                data: ({name : name, surname : surname, secname : secname}),
                dataType: "html",
                success: funcSuccess
              });
            }
        });
      });
</script>
<p>Имя</p><input type="text" name="x" id="name">
<p>Фамилия</p><input type="text" name="y" id="surname">
<p>Отчество</p><input type="text" name="y" id="secname">
<p><button type="button" name="button" id="btn">Ф.И.О</button><p>
<p id="result"></p>
