<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Database;

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
    return view('index');
});

Route::get('/home',[Database::class,'home']);

Route::get('/calender',[Database::class,'calender']);

Route::get('/contacs',[Database::class,'Contacs']);

Route::get('/Profile',[Database::class,'Profile']);

Route::get('/Dashboard',[Database::class,'Dashboard']);

Route::get('/Info',[Database::class,'Dashboard']);
 

/*
<?php>

<?>
*/


