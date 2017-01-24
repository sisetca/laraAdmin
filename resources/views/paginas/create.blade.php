@extends("la.layouts.app")
@section("contentheader_title", "Paginas")
@section("contentheader_description", "lista de páginas")
@section("sub_section", "Lista")
@section("htmlheader_title", "Paginas")

@section("main-content")
 {!! Form::open(['route' => 'admin.pages.store', 'method'=> 'POST']) !!}
 	<div class="form-group">
 		{!! Form::label('title', 'Titulo')!!}
 		{!! Form::text('title', null, ['class' => 'form-control'])!!}
 	</div>
 	<div class="form-group">
 		{!! Form::label('content', 'Contenido')!!}
 		{!! Form::textarea('content', null, ['class' => 'form-control'])!!}
 	</div>

 {!! Form::submit('Registrar', ['class' => 'btn btn-danger-lg btn-block']) !!}
 {!! Form::close() !!}
@endsection