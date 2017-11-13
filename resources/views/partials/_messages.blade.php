@if(Session::has('msgsuccess'))
	
	<div class="alert alert-success" role="alert">
		<strong>Sucesso!</strong> {{ Session::get('msgsuccess') }}
	</div>

@endif

@if(count($errors) > 0)

	<div class="alert alert-danger" role="alert">
		
		
		@foreach ($errors->all() as $error)
			<p>{{ $error }}</p>
		@endforeach  
		
	</div>

@endif