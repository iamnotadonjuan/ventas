$(document).ready(function()
{
  Carga();
});

function Carga()
{
  var datos = $('#datos');
  var route = 'http://localhost/ventas/public/users';

  $('#datos').empty();
  $.get(route, function(res)
  {
      $(res).each(function(key, value)
    {
      datos.append("<tr><td>"+value.usua_nomb+"</td><td>"+value.email+"</td><td>"+value.usua_tele+"</td><td>"+value.usua_dire+"</td><td><button class='btn btn-primary' value="+value.id+" OnClick='Mostrar(this);' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
    });
  });
}

function Eliminar(btn)
{
  var route = 'http://localhost/ventas/public/user/'+btn.value+'';
  var token = $("#token").val();

  $.ajax({
    url: route,
    headers: {'X-CSRF-TOKEN': token},
    type: 'DELETE',
    dataType: 'json',
    success:function(){
      window.location.href = "http://localhost/ventas/public/";
      //$("#msj-success").fadeIn();
    }
  });
}

function Mostrar(btn)
{
  var route = 'http://localhost/ventas/public/user/'+btn.value+'/edit';

  $.get(route, function(res)
  {
    $('#name').val(res.usua_nomb);
    $('#email').val(res.email);
    $('#tel').val(res.usua_tele);
    $('#address').val(res.usua_dire);
    $('#id').val(res.id);
  });
}

$('#actualizar').click(function()
{
  var value = $("#id").val();
  var name = $('#name').val();
  var email = $('#email').val();
  var tel = $('#tel').val();
  var address = $('#address').val();
  var mypassword = $('#mypassword').val();
  var password = $('#password').val();
	var route = 'http://localhost/ventas/public/user/'+value+'';
	var token = $("#token").val();

  $.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'PUT',
		dataType: 'json',
		data: {Nombre: name, Email: email, Tel: tel, Address: address, Password: password, MyPassword: mypassword},
		success:function(){
			Carga();
			$("#myModal").modal('toggle');
			$("#msj-success").fadeIn();
		}
	});
});
