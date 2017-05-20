@extends('layouts.general')
@section('content')
<div class="row">	
	{!!Form::open(['route'=> ['category.update','category_id' => $category->id],'method'=>'POST'])!!}
	{{ csrf_field() }}
	{!!Form::label('Category name:')!!}
</div>
<div class="row">
	<div class="col-md-4">
		{{ Form::text('name', $category->name, array_merge(['class' => 'form-control'])) }}
	</div>
	<div class="col-md-1 pull-left">
			{!!Form::submit('Send',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}
	</div>
</div>
@endsection