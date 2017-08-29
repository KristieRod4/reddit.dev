<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Roll Dice Exercise</div>
                <p>Your Guess is <?= $guess?></p>
                <p>The answer is  <?= $random?></p>
            </div>
        </div>
    </body>
</html>


<!--- UPDATED VERSION -->

@extends('layouts.master')

@section('title')
    <title>Roll the Dice!</title>
@stop

@section('content')
    <div class="container">
        @if($guess == $random)
            <h1 class="green">Right!</h1>
        @else
            <h1 class="red">Incorrect guess!</h1>
        @endif
        <h2>Random number:  {{ $random }}</h2>
        <h2>You guessed: {{ $guess }} </h2>
    </div>
    <div class="container">
        @foreach($numbers as $number)
            <p>{{ $number }}</p>
        @endoreach
    </div>
@stop 
