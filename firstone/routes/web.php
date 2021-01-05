<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return view('welcome');
});
Route::get('/ourteam', function () {
	$info = array (
		'0'=> [
			'id' => 1,
			'name'=>"Mohammad Jameel",
			'Email'=>"Mohammad.alawneh@gmail.com",
			'Phone'=>"0777479456",
			'image'=>"Affluent-Women-Mailing-Lists.jpg",
			'face'=>"mohmmadjor.alawneh.5",
			'twet'=>"MohammadMJamee1",
			'linkedin'=>"https://www.linkedin.com/in/mohammad-alawneh-62b0181a3/"
		],
		'1'=> [
			'id' => 2,
			'name'=>"Saif Ibrahim",
			'Email'=>"Saif.alawneh@gmail.com",
			'Phone'=>"0777479456",
			'image'=>"Sam-Revilter.jpg",
			'face'=>"profile.php?id=100023471765825",
			'twet'=>"MohammadMJamee1",
			'linkedin'=>"https://www.linkedin.com/in/mohammad-alawneh-62b0181a3/"
		],
		'2'=> [
			'id' => 3,
			'name'=>"Anas Omar",
			'Email'=>"Anas.omar@gmail.com",
			'Phone'=>"0777479456",
			'image'=>"person-2.jpg",
			'face'=>"profile.php?id=100023471765825",
			'twet'=>"MohammadMJamee1",
			'linkedin'=>"https://www.linkedin.com/in/mohammad-alawneh-62b0181a3/"
		],
		'3'=> [
			'id' => 4,
			'name'=>"Saad Bassam",
			'Email'=>"Saad.bassam@gmail.com",
			'Phone'=>"0777479456",
			'image'=>"team4-large.jpg",
			'face'=>"profile.php?id=100023471765825",
			'twet'=>"MohammadMJamee1",
			'linkedin'=>"https://www.linkedin.com/in/mohammad-alawneh-62b0181a3/"
		]
	);
	return view('ourteam',['info1'=>$info]);
});
Route::get('contactus',function(){
	return view('contactus');
});
