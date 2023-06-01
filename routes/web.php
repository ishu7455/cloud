<?php

use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request; 
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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/upload',function(Request $request){
    $uploadedFileUrl = Cloudinary::upload($request->file('file')->getRealPath(),['folder' => 'testing',])->getSecurePath();
    dd($uploadedFileUrl);
});
Route::get('/', function () {
    return "guyghiuyhi";
});
