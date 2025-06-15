<?php

use Illuminate\Support\Facades\Route;

Route::get(uri:'/', action: function (): Factory|View {
    return view( view: 'welcome');
});
Route::get(uri:'/about', action: function (): Factory|View {
    $name='malak';
     return view( view: 'about', data: compact(var_name:'name'));
    
});
Route::post(uri:'/about', action: function (): Factory|View {
     return view( view: 'about');
});