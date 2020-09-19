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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo1',function(){
    return "hello";
});

Route::get('/demo2', function(){
    return view('demo2');
});

Route::get('/demo3',function()
{
    $data = ['ten'=>'Thuy', 'dc'=>'HCM'];
    // dd($data);
    // return view('user.demo3', ['thongtin'=>$data]);
    return view('user.demo3')->with(['thongtin'=>$data]);
});

Route::get('/demo4',function(){
    $data = DB::table('sach')->get();
    // dd($data);
    return view('user.demo4',['data'=>$data]);
});

Route::get('/demo5',function(){
    $data = DB::table('sach')->get();
    $dataloai = DB::table('loai')->get();
    return view('user.demo5',['data'=>$data,'loai'=>$dataloai]);
});

Route::get('/loai/{id}',function($id){
    $dataloai = DB::table('loai')->get();
    // DB::enableQueryLog();
    $data = DB::table('sach') -> where(['maloai'=>$id])->get();
    // $qr = DB::getQueryLog();
    // print_r($qr);
    // dd($data);
    // return "ID của sách là $data";
    return view('user.demo5',['data'=>$data,'loai'=>$dataloai]);
});

Route::get('dbs',function(){
    // $data = DB::table('sach')->simplePaginate(5);
    $data = DB::table('sach')->paginate(5);
    return view('dbs', ['data'=>$data]);
});

Route::get('/chitiet/{id}',function($masach){
    $data = DB::table('sach')->where(['masach'=>$masach])->first();
    return view('user.chitietsach',['data'=>$data]);
});