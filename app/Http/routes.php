<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Create a route at the path /uppercase that takes a parameter that is a word 
// and returns a string that is the word in all caps.

// returns the sum of the numbers.
Route::get('/uppercase/{word}', function($word) {
	return strtoupper($word);
});
// Create a route at the path /increment that takes a parameter that is a number 
// and returns the number plus one.
Route::get('/increment/{number}', function($number) {
	if(is_numeric($number)) {
		return $number + 1;
	} else {
		return 1;
	}
	


});


// Bonus



// Create a route at the path /add that takes two parametes that are numbers and 

Route::get('/add/{num1}/{num2}', function($num1, $num2) {
	if(is_numeric($num1) && is_numeric($num2)) {
		return $num1 + $num2;
	}
});





