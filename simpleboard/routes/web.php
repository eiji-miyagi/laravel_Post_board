<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|これは、アプリケーションのWebルートを登録できる場所です。これらのルートは、
「web」ミドルウェアグループを含むグループ内のRouteServiceProviderによってロードされます。
　今、素晴らしいものを作成してください！
*/
// URL末尾/でウェルカムのビューを基本表示
Route::get('/', function () {
    return view('welcome');
});
// URL末尾postsでPostControllerのリソース実行/
Route::resource('posts', 'PostController');

if (env('APP_ENV')=== 'local'){
    URL::forceScheme('http');
}
