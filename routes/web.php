<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

use function Ramsey\Uuid\v1;

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
    array('2','pop','/popImages/2.jpeg',601, array('red', 'green', 'pink')),
    array('3','pop','/popImages/3.jpeg',501, array('red', 'green', 'pink')),
    array('4','pop','/popImages/4.jpeg',601, array('red', 'green', 'pink')),
    array('5','pop','/popImages/5.jpeg',501, array('red', 'green', 'pink')),
    array('6','pop','/popImages/6.jpeg',601, array('red', 'green', 'pink')),
    array('7','pop','/popImages/7.jpeg',501, array('red', 'green', 'pink')),
    array('8','pop','/popImages/8.jpeg',601, array('red', 'green', 'pink')),
    array('9','pop','/popImages/9.jpeg',501, array('red', 'green', 'pink')),
    array('10','pop','/popImages/10.jpeg',601, array('red', 'green', 'pink')),
    array('11','pop','/popImages/11.jpeg',501, array('red', 'green', 'pink')),
    array('12','pop','/popImages/12.jpeg',601, array('red', 'green', 'pink')),
    array('13','pop','/popImages/13.jpeg',501, array('red', 'green', 'pink')),
    array('14','pop','/popImages/14.jpeg',601, array('red', 'green', 'pink')),
    array('15','pop','/popImages/15.jpeg',501, array('red', 'green', 'pink')),
    array('16','pop','/popImages/16.jpeg',601, array('red', 'green', 'pink')),
    array('17','pop','/popImages/17.jpeg',501, array('red', 'green', 'pink')),
    array('18','pop','/popImages/18.jpeg',601, array('red', 'green', 'pink')),
    array('19','pop','/popImages/19.jpeg',501, array('red', 'green', 'pink')),
    array('20','pop','/popImages/20.jpeg',601, array('red', 'green', 'pink')),
    array('21','pop','/popImages/21.jpeg',501, array('red', 'green', 'pink')),
    array('22','pop','/popImages/22.jpeg',601, array('red', 'green', 'pink')),
    array('23','pop','/popImages/23.jpeg',501, array('red', 'green', 'pink')),
    array('24','pop','/popImages/24.jpeg',601, array('red', 'green', 'pink')),
    array('25','pop','/popImages/25.jpeg',601, array('red', 'green', 'pink')),
    array('26','pop','/popImages/26.jpeg',601, array('red', 'green', 'pink')),
    array('27','pop','/popImages/27.jpeg',601, array('red', 'green', 'pink')),
    array('28','pop','/popImages/28.jpeg',601, array('red', 'green', 'pink')),
    array('29','pop','/popImages/29.jpeg',601, array('red', 'green', 'pink')),
    array('30','pop','/popImages/30.jpeg',601, array('red', 'green', 'pink')),
    array('31','pop','/popImages/31.jpeg',601, array('red', 'green', 'pink')),
    array('32','pop','/popImages/32.jpeg',601, array('red', 'green', 'pink')),
    array('33','pop','/popImages/33.jpeg',601, array('red', 'green', 'pink')),
    array('34','pop','/popImages/34.jpeg',601, array('red', 'green', 'pink')),
    array('35','pop','/popImages/35.jpeg',601, array('red', 'green', 'pink')),
    array('36','pop','/popImages/36.jpeg',601, array('red', 'green', 'pink')),
    array('37','pop','/popImages/37.jpeg',601, array('red', 'green', 'pink')),
    array('38','pop','/popImages/38.jpeg',601, array('red', 'green', 'pink')),
    array('39','pop','/popImages/39.jpeg',601, array('red', 'green', 'pink')),
    array('40','pop','/popImages/40.jpeg',601, array('red', 'green', 'pink')),
    array('41','pop','/popImages/41.jpeg',601, array('red', 'green', 'pink')),
    array('42','pop','/popImages/42.jpeg',601, array('red', 'green', 'pink')),
    array('43','pop','/popImages/43.jpeg',601, array('red', 'green', 'pink')),
    array('44','pop','/popImages/44.jpeg',601, array('red', 'green', 'pink')),
    array('45','pop','/popImages/45.jpeg',601, array('red', 'green', 'pink')),
    array('46','pop','/popImages/46.jpeg',601, array('red', 'green', 'pink')),
    array('47','pop','/popImages/47.jpeg',601, array('red', 'green', 'pink')),
    array('48','pop','/popImages/48.jpeg',601, array('red', 'green', 'pink')),
    array('49','pop','/popImages/49.jpeg',601, array('red', 'green', 'pink')),
    array('50','pop','/popImages/50.jpeg',601, array('red', 'green', 'pink')),
    array('51','pop','/popImages/51.jpeg',601, array('red', 'green', 'pink')),
    array('52','pop','/popImages/52.jpeg',601, array('red', 'green', 'pink')),
    array('53','pop','/popImages/53.jpeg',601, array('red', 'green', 'pink')),
    array('54','pop','/popImages/54.jpeg',601, array('red', 'green', 'pink')),
    array('55','pop','/popImages/55.jpeg',601, array('red', 'green', 'pink')),
    array('56','pop','/popImages/56.jpeg',601, array('red', 'green', 'pink')),
    array('57','pop','/popImages/57.jpeg',601, array('red', 'green', 'pink')),
    array('58','pop','/popImages/58.jpeg',601, array('red', 'green', 'pink')),
    array('59','pop','/popImages/59.jpeg',601, array('red', 'green', 'pink')),
    array('60','pop','/popImages/60.jpeg',601, array('red', 'green', 'pink')),
    array('61','pop','/popImages/61.jpeg',601, array('red', 'green', 'pink')),
    array('62','pop','/popImages/62.jpeg',601, array('red', 'green', 'pink')),
    array('63','pop','/popImages/63.jpeg',601, array('red', 'green', 'pink')),
    array('64','pop','/popImages/64.jpeg',601, array('red', 'green', 'pink')),
    array('65','pop','/popImages/65.jpeg',601, array('red', 'green', 'pink')),
    array('66','pop','/popImages/66.jpeg',601, array('red', 'green', 'pink')),
    array('67','pop','/popImages/67.jpeg',601, array('red', 'green', 'pink')),
    array('68','pop','/popImages/68.jpeg',601, array('red', 'green', 'pink')),
    array('69','pop','/popImages/69.jpeg',601, array('red', 'green', 'pink')),
    array('70','pop','/popImages/70.jpeg',601, array('red', 'green', 'pink')),
    array('71','pop','/popImages/71.jpeg',601, array('red', 'green', 'pink')),
    array('72','pop','/popImages/72.jpeg',601, array('red', 'green', 'pink')),
    array('73','pop','/popImages/73.jpeg',601, array('red', 'green', 'pink')),
    array('74','pop','/popImages/74.jpeg',601, array('red', 'green', 'pink')),
    array('75','pop','/popImages/75.jpeg',601, array('red', 'green', 'pink')),
    array('76','pop','/popImages/76.jpeg',601, array('red', 'green', 'pink')),
    array('77','pop','/popImages/77.jpeg',601, array('red', 'green', 'pink')),
    array('78','pop','/popImages/78.jpeg',601, array('red', 'green', 'pink')),
    array('79','pop','/popImages/79.jpeg',601, array('red', 'green', 'pink')),
    array('80','pop','/popImages/80.jpeg',601, array('red', 'green', 'pink')),
    array('81','pop','/popImages/81.jpeg',601, array('red', 'green', 'pink')),
    array('82','pop','/popImages/82.jpeg',601, array('red', 'green', 'pink')),
    array('83','pop','/popImages/83.jpeg',601, array('red', 'green', 'pink')),
    array('84','pop','/popImages/84.jpeg',601, array('red', 'green', 'pink')),
    array('85','pop','/popImages/85.jpeg',601, array('red', 'green', 'pink')),
    array('86','pop','/popImages/86.jpeg',601, array('red', 'green', 'pink')),
    array('87','pop','/popImages/87.jpeg',601, array('red', 'green', 'pink')),
    array('88','pop','/popImages/88.jpeg',601, array('red', 'green', 'pink')),
    array('89','pop','/popImages/89.jpeg',601, array('red', 'green', 'pink')),
    array('90','pop','/popImages/90.jpeg',601, array('red', 'green', 'pink')),
    array('91','pop','/popImages/91.jpeg',601, array('red', 'green', 'pink')),
    array('92','pop','/popImages/92.jpeg',601, array('red', 'green', 'pink')),
    array('93','pop','/popImages/93.jpeg',601, array('red', 'green', 'pink')),
    array('94','pop','/popImages/94.jpeg',601, array('red', 'green', 'pink')),
    array('95','pop','/popImages/95.jpeg',601, array('red', 'green', 'pink')),
    array('96','pop','/popImages/96.jpeg',601, array('red', 'green', 'pink')),
    array('97','pop','/popImages/97.jpeg',601, array('red', 'green', 'pink')),
    array('98','pop','/popImages/98.jpeg',601, array('red', 'green', 'pink')),
    array('99','pop','/popImages/99.jpeg',601, array('red', 'green', 'pink')),
    array('100','pop','/popImages/100.jpeg',601, array('red', 'green', 'pink')),
    array('101','pop','/popImages/101.jpeg',601, array('red', 'green', 'pink')),
    array('102','shadu','/popImages/102.jpeg',601, array('red', 'green', 'pink')),
    array('103','shadu','/popImages/103.jpeg',601, array('red', 'green', 'pink')),
    array('104','shadu','/popImages/104.jpeg',601, array('red', 'green', 'pink')),
    
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
