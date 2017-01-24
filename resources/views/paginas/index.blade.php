@extends("la.layouts.app")
@section("contentheader_title", "Paginas")
@section("contentheader_description", "lista de páginas")
@section("sub_section", "Lista")
@section("htmlheader_title", "Paginas")

@section("main-content")
	<div class="box box-success">
		<div class="box-body">
			<table id="example1" class="table table-bordered">
			<thead>
				<tr class="success"></tr>
				<th>Id</th>
				<th>Titulo</th>
				<th>Status</th>
				<th>Opciones</th>
			</thead>
			@foreach($pages as $page)
        <tbody>
        	<td>{{ $page->id}}</td>
        	<td>{{$page->title}}</td>
        	<td></td>
        	<td>
        		<a href="{{ route('admin.pages.edit', '$page->id') }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
        		<a href="#" onClick="return confirm('¿Seguro que desean eliminar')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>

        	</td>
        </tbody>

			@endforeach
			</table>
			
		</div>
	</div>
@endsection