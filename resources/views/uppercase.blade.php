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

<!---UPDATED VERSION->

< DOCTYPE html>
 <html>
 -<head>
 -    <title></title>
 -</head>
 -<body>
 -    <h1>uppercasedWord: <?php echo $word ?></h1>
 +@extends('layouts.master')
  
 -</body>
 -</html> 
 +@section('title')
 +    <title>Uppercase some word!</title>
 +@stop
 +
 +@section('content')
 +    <h1>uppercasedWord: {{ $word }}</h1>
 +@stop 
 -->

