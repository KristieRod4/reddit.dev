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
Route::get('/', function() {
	return view('welcome');
});
// Post resource
Route::resource('posts', 'PostsController');

Route::get('create-user', function() {
    $user = new \App\User();
    $user->name = "admin";
    $user->email = "admin@codeup.com";
    $user->password = "password";
    $user->save();
});


// Route::get('/', 'HomeController@showWelcome');

// Route::get('/', function () {
//     return view('welcome');
// });


// Create a route at the path /uppercase that takes a parameter that is a word 
// and returns a string that is the word in all caps.

// returns the sum of the numbers.
// Route::get('/uppercase/{word}', function($word) {
// 	$data = [];
// 	$data['random'] = rand(1,6);
// 	$data['guess'] = $guess;


// 	return view('roll-dice', $data);

// 	// return strtoupper($word);
// });

// Create a route at the path /increment that takes a parameter that is a number 
// and returns the number plus one.
// Route::get('/increment/{number}', function($number) {
// 	if(is_numeric($number)) {
// 		return $number + 1;
// 	} else {
// 		return 1;
// 	}
	


// });


// // Bonus



// // Create a route at the path /add that takes two parametes that are numbers and 

// Route::get('/add/{num1}/{num2}', function($num1, $num2) {
// 	if(is_numeric($num1) && is_numeric($num2)) {
// 		return $num1 + $num2;
// 	}
// });




// // Create a route that responds to a GET request on the path /rolldice.
// // Within the route, 
// // return a random number between 1 and 6.
// // Add a view named roll-dice.php. 
// // Instead of just returning the random number, 
// // show the view and have it display the random number.
// // Modify the route to take in a parameter named guess. 
// // Someone will access the route by visiting 
// // http://reddit.dev/rolldice/1, where 1 is their guess.
// // Modify the route and view so that you can display the 
// // guess in addition to the roll 
// // and also tell if the guess matches the roll.


// // Route::get('/rolldice/{guess}', function($guess) {
// // 	$data = [];
// // 	$data['random'] = mt_rand(1,6);
// // 	$data['guess'] = $guess;

// // 	$data

// // 	return view('roll-dice', $data);

// // });

// // Route::get('/', function () {
// //      return view('welcome');
// //  });
// //  Route::get('/', 'HomeController@showWelcome');
  
// //  Route::get('/uppercase/{word}', function($word) {
// //      
// //      $data['word'] = strtoupper($word);
// //  Route::get('/uppercase/{word}', 'HomeController@uppercase');
  
// //      return view('uppercase', $data);
// //  Route::get('/lowercase/{word}', 'HomeController@lowercase');
  
// //  Route::get('/increment/{number}', 'HomeController@increment');
  
// //  });
// //  
// //  Route::get('/increment/{number}', function($number) {
// //      if(is_numeric($number)) {
// //          return $number + 1;
// //      } else {
// //          return 1;
// //      }
// //  });
// //  
// //  Route::get('add/{num1}/{num2}', function($num1, $num2) {
// //      if(is_numeric($num1) && is_numeric($num2)) {
// //          return $num1 + $num2;
// //      }
// //  });
// //  
// //  // Route w/ required parameters
// //  Route::get('/sayhello/{firstName}/{lastName?}', function($firstName, $lastName = "Bobberson") {
// //  
// //      $data['fullName'] = $firstName . " " . $lastName;
// //  
// //      return view('welcome', $data);
// //  });
// //  // Rotue w/ required parameters
// //  Route::get('/add/{num1}/{num2}', 'HomeController@add');
  
// //   // Optional parameter w/ default value
// //  Route::get('/sayhello/{name?}', function($name = "World") {
// //      if($name == "Chris") {
// //          return redirect('/');
// //      } else {
// //          $data['fullName'] = $name;
// //          return view('welcome', $data);
// //      }
// //  }); 
// //  Route::get('/sayhello/{name?}', 'HomeController@sayHello');
// //  
// //  Route::get('/rolldice/{guess}', 'HomeController@rolldice'); 


