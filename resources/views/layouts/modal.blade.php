<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar Usuario</h4>
      </div>
      <div class="modal-body">

      	<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
      	<input type="hidden" id="id">
        <div class="form-group">
        	{!!Form::label('name','Nombre: ')!!}
        	{!!Form::text('name',null, ['id'=>'name','class'=>'form-control', 'placeholder' => 'Ingresa el nombre'])!!}
          {!!Form::label('email','Email: ')!!}
        	{!!Form::text('email',null, ['id'=>'email','class'=>'form-control', 'placeholder' => 'Ingresa el nombre'])!!}
          {!!Form::label('tel','Telefono: ')!!}
        	{!!Form::text('tel',null, ['id'=>'tel','class'=>'form-control', 'placeholder' => 'Ingresa el nombre'])!!}
          {!!Form::label('address','Dirección: ')!!}
        	{!!Form::text('address',null, ['id'=>'address','class'=>'form-control', 'placeholder' => 'Ingresa el nombre'])!!}
          {!!Form::label('mypassword','Contraseña actual: ')!!}
        	{!!Form::password('mypassword', ['id'=>'mypassword','class'=>'form-control', 'placeholder' => 'Ingresa tú contraseña actual'])!!}
          {!!Form::label('password','Contraseña nueva: ')!!}
        	{!!Form::password('password', ['id'=>'password','class'=>'form-control', 'placeholder' => 'Ingresa el nombre'])!!}
        </div>
      </div>
      <div class="modal-footer">
      {!!link_to('#', $title='Actualizar', $attributes = ['id'=>'actualizar', 'class'=>'btn btn-primary'], $secure = null)!!}
      </div>
    </div>
  </div>
</div>
