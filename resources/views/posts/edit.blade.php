@extends('layouts.master')

@section('title') 
	<title>Create New Post</title>
@stop

@section('content')

<h1>Create Form</h1>
  		<form method="POST" action="{{ action('PostsController@edit') }}">
  			{!! csrf_field() !!}
 			<input type="text" name="title" placeholder="Enter Title " value="{{ old('title') }}">
 			<input type="text" name="content" placeholder="Enter Content" value="{{ old('content') }}">
 			<input type="text" name="url" placeholder="Enter URL" value="{{ old('url') }}">
  			<button>Submit</button>
  		</form>
@stop