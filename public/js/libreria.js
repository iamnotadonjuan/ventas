/**
 *
 * @param {type} url
 * @param {type} formulario
 * @returns {void}
 */
function enviarFormulario(url, formulario)
{
    var data = new FormData($(formulario)[0]);

    $.ajax({
        url: url,
        data: data,
        type: 'POST',
        processData: false,
        contentType: false,
        success: function(data)
        {
            try {
                var jsonData = JSON.parse(data);
                
                $('#hidd_idin').val(jsonData.identificacion);          // Identificación del inmueble
            } catch (e){
                console.log(e.message);
            }
        }
    });
}

function register()
{
  $("#name-msj,#email-msj,#password-msj,#address-msj,#phone-msj").fadeIn();
  var nombre = $('#name').val();
  var correo = $('#email').val();
  var password = $('#password').val();
  var direccion = $('#address').val();
  var numero = $('#phone').val();
  var route = 'http://localhost/ventas/public/register';
  var token = $('#token').val();

  $.ajax({
    url: route,
    headers: {'X-CSRF-TOKEN': token},
    type: 'POST',
    dataType: 'json',
    data: {Name: nombre, Email: correo, Password: password, Address: direccion, Phone: numero},

    success:function(data)
    {
      $('#form-register').each (function(){
        this.reset();
      });

      setTimeout(function() {
        $("#register-win").fadeOut(1500);
        },3000);
        $('#register-win').html(data['Message']);
    },

    error:function(msj)
    {
        setTimeout(function() {
          $("#name-msj,#email-msj,#password-msj,#address-msj,#phone-msj").fadeOut(1500);
        },3000);
      $('#name-msj').html(msj.responseJSON.Name);
      $('#email-msj').html(msj.responseJSON.Email);
      $('#password-msj').html(msj.responseJSON.Password);
      $('#address-msj').html(msj.responseJSON.Address);
      $('#phone-msj').html(msj.responseJSON.Phone);
    }
});
}

/*function login()
{
  $("#email-msj-2,#password-msj-2").fadeIn();
  var email = $('#email-2').val();
  var password = $('#password-2').val();
  var route = 'http://localhost/ventas/public/login';
  var token = $('#token').val();
  $.ajax({
    url: route,
    headers: {'X-CSRF-TOKEN': token},
    type: 'POST',
    dataType: 'json',
    data: {Email: email, Password: password},

    success:function()
    {
      console.log("Hola");
    },

    error:function(msj)
    {
      setTimeout(function() {
        $("#email-msj-2,#password-msj-2").fadeOut(1500);
      },3000);
    $('#email-msj-2').html(msj.responseJSON.Email);
    $('#password-msj-2').html(msj.responseJSON.Password);
    }
  });
}*/
