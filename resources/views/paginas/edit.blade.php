<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
		{!! Form::open(['route' => ['admin.pages.update', $page], 'method' => 'PUT']) !!}
			<div class="form group">
				{!! Form::label('title', 'Titulo')!!}
				{!! Form::text('title', $page->title, ['class' => 'form-control'])!!}
			</div>
			<div class="form-group">
				{!! Form::label('content', 'Contenido')!!}
				{!! Form::textarea('content', $page->content, ['class' =>'form-control textarea-content'])!!}
			</div>
			{!!Form::submit('Editar', ['class' => 'btn btn.primary'])!!}
		{!! Form::close()!!}
		</div>
	</div>
</div>