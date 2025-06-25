<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    $name = 'malak';
     $departments = [
        '1' => 'Tichnical',
        '2' => 'financial',
        '3' => 'sales',
    ];  

    return view('about', compact('name','departments'));
});


Route::post('/about', function (Request $request) {
    $name = $request->input('name');
    $departments = [
        '1' => 'Tichnical',
        '2' => 'financial',
        '3' => 'sales',
    ];  
    return view('about', compact('name', 'departments'));
});
Route::get('/tasks',function(){
    $tasks=DB::table('laravel')-> get();
    return view('tasks',compact('tasks'));
});
Route::post('/create',function(){
    $task_name=$_POST['name'];
    DB::table(table:'laravel')->insert(values:['name'=> $task_name]);
   return redirect()->back();
});
Route::post('delete/{id}',function($id){
    DB::table(table:'laravel')->where( 'id','=',$id)->delete();
     return redirect()->back();

});