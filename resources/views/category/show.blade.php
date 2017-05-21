@extends('layouts.general')
@section('content')
{!!Form::label('Category name:')!!}
	{!!Form::text('name',$category->name,['class'=>'form-control','value'=>'Enter the category name'])!!}
@endsection