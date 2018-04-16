//no ejecutar hasta que no este todo listo
$(document).ready(function() {

  var user,pass,email;

  $("#register_button").focus();

  user = $("#username").val();
  pass = $("#password").val();
  email = $("#email").val();

  $("#register_button").click(function(e) {

    $("#check_user").html('<span style="font-weight:bold;color:red;">Consultando</span>');

    $.ajax({
      type: "POST",
      url: "index.php?controller=user&action=register",
      data: "user=" + user + "&pass=" + pass + "&email=" + email,
      dataType: "html",
      error: function() {
        alert("error petición ajax");
      },
      success: function(data) {
          alert(data);
      }
    });



  });

});
