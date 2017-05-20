@extends('layouts.general')
@section('content')
<div class="col-md-8">
	<table class="table table-striped table-bordered table-hover">
		<tr>
			<th style="text-align: center;">ID</th>
			<th style="text-align: center;">Navn</th>
			<th style="text-align: center;">Handling</th>
		</tr>
		@foreach($Kategories as $category)
			<tr>
				<td>{{$category->id}}</td>
				<td>{{$category->name}}</td>
				</td>
				<td style="align: center;width: 200px;">
				<div class="btn-toolbar">
					{!!link_to_route('category.edit', $title = 'Edit category', $parameters = $category->id, 
					$attributes = ['class'=>'btn btn-success btn-space']);!!}
					{!!Form::open(['route'=> ['category.destroy',$category->id],'method'=>'DELETE'])!!}
					{!!Form::submit('Slett',['class'=>'btn btn-danger'])!!}
					{!!Form::close()!!}
				</div>
					
				</td>
			</tr>
		@endforeach
	</table>	
</div>

		{{--
			<div class="row" style="position: relative; left: 350px">
					{!!$categories->render()!!}
			<div> 
		--}}
@endsection