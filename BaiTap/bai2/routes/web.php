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

// Tạo 1 nhóm route với tiền tố customer
Route::prefix('customer')->group(function () {
    Route::get('index', function () {
        // Hiển thị danh sách khách hàng
        return view('customer');
    });

    Route::get('create', function () {
      echo  'Hiển thị Form tạo khách hàng';
    });

    Route::post('store', function () {
        echo 'Xử lý lưu dữ liệu tạo khách hàng thong qua phương thức POST từ form';
    });

    Route::get('show/{id?}', function ($id = 1) {
        echo  'Hiển thị thông tin chi tiết khách hàng có mã định danh id';
    })->name('show');

    Route::get('edit/{id?}', function ($id = 1) {
        echo  'Hiển thị Form chỉnh sửa thông tin khách hàng';
    });

    Route::patch('update/{id?}', function ($id = 1) {
        echo 'xử lý lưu dữ liệu thông tin khách hàng được chỉnh sửa thông qua PATCH từ form';
    });

    Route::delete('{id?}', function ($id = 1) {
        echo  'Xóa thông tin dữ liệu khách hàng';
    });
});
