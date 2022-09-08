<?php

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

Route::get('time', function () {
    return view('time');
});
Route::get('/{timezone?}', function ($timezone = null) {
    if (!empty($timezone)) {

        // Khởi tạo giá trị giờ theo múi giờ UTC
        $time = new DateTime(date('Y-m-d H:i:s'), new DateTimeZone('UTC'));

        // Thay đổi về múi giờ được chọn
        $time->setTimezone(new DateTimeZone(str_replace('-', '/', $timezone)));

        // Hiển thị giờ theo định dạng mong muốn
        echo 'Múi giờ bạn chọn ' . $timezone . ' hiện tại đang là: ' . $time->format('d-m-Y H:i:s');
    }
    return view('time');
});
