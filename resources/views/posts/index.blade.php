@extends('layouts.master')

@section('title')
<title>All the awesome posts</title>
@stop

@section('content')
<div class="container">
    <h1>Posts</h1>
    @foreach($posts as $post)
    	<ul class = 'list-group'>
    		<li class = 'list-group-item'>Id: {{$post->id}}</li>
    		<li class = 'list-group-item' style = 'font-weight:bold;'> Title: {{$post->title}}</li>
    		<li class = 'list-group-item'>Url: {{$post->url}}</li>
    		<li class = 'list-group-item'>Content: {{$post->content}}</li>
    		<li class = 'list-group-item' style = 'color: ff47d4;'>Created by: {{$post->created_by}}</li>
    		<li class = 'list-group-item'>Created: {{$post->created_at->diffForHumans()}}</li>
    		<a class = 'list-group-item btn btn-primary' href = "{{ action('PostsController@show', $post->id)}}">See This Post</a>
        <!-- <h2><a href="{{ action('PostsController@show', $post->id) }}">{{ $post->title }}</a></h2>
        <p>{{ $post->content }}</p>
        <p>Created at: {{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }} </p> -->
   		 </ul>
    @endforeach

    {!! $posts->render() !!}

</div>
@stop