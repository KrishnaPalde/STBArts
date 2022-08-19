<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

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

$popImages = array(
    array('1','pop','/popImages/1.jpeg',501, array('red', 'green', 'pink')),
    array('2','pop','https://picsum.photos/200',601, array('red', 'green', 'pink')),
    array('3','pop','https://picsum.photos/200',501, array('red', 'green', 'pink')),
    array('4','pop','https://picsum.photos/200',601, array('red', 'green', 'pink')),
    array('5','pop','https://picsum.photos/200',501, array('red', 'green', 'pink')),
    array('6','pop','https://picsum.photos/200',601, array('red', 'green', 'pink')),
    array('7','pop','https://picsum.photos/200',501, array('red', 'green', 'pink')),
    array('8','pop','https://picsum.photos/200',601, array('red', 'green', 'pink')),
    array('9','pop','https://picsum.photos/200',501, array('red', 'green', 'pink')),
    array('10','pop','https://picsum.photos/200',601, array('red', 'green', 'pink')),
    array('11','pop','https://picsum.photos/200',501, array('red', 'green', 'pink')),
    array('12','pop','https://picsum.photos/200',601, array('red', 'green', 'pink')),
    array('13','pop','https://picsum.photos/200',501, array('red', 'green', 'pink')),
    array('14','pop','https://picsum.photos/200',601, array('red', 'green', 'pink')),
    array('15','pop','https://picsum.photos/200',501, array('red', 'green', 'pink')),
    array('16','pop','https://picsum.photos/200',601, array('red', 'green', 'pink')),
    array('17','pop','https://picsum.photos/200',501, array('red', 'green', 'pink')),
    array('18','pop','https://picsum.photos/200',601, array('red', 'green', 'pink')),
    array('19','pop','https://picsum.photos/200',501, array('red', 'green', 'pink')),
    array('20','pop','https://picsum.photos/200',601, array('red', 'green', 'pink')),
    array('21','pop','https://picsum.photos/200',501, array('red', 'green', 'pink')),
    array('22','pop','https://picsum.photos/200',601, array('red', 'green', 'pink')),
    array('23','shadu','https://picsum.photos/200',501, array('red', 'green', 'pink')),
    array('24','shadu','https://picsum.photos/200',601, array('red', 'green', 'pink')),
    
);

Route::get('/', function () use($popImages) {
    return view('home', ['popData' => $popImages]);
})->name('home');

Route::get('/pop', function(){
    return view('ganesh', ['data']);
})->name('single-ganesh');

Route::resource('/cart' , CartController::class)->except('update','destroy','store','show','edit');
Route::patch('update-cart', [CartController::class, 'update'])->name('cart.update');
Route::delete('remove-from-cart', [CartController::class, 'destroy'])->name('cart.destroy');
Route::post('checkout', [CartController::class, 'checkout'])->name('checkout');
Route::post('booking', [BookingController::class, 'store'])->name('booking');
