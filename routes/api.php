<?php

//Route::get('clientes','Api\ClienteApiController@index');
//Cliente
Route::resource('clientes','Api\ClienteApiController');
Route::get('clientes/{id}/contas','Api\ClienteApiController@conta_corrente');
//CC
Route::get('contas/{id}/clientes','Api\ContaCorrenteApiController@cliente');
Route::get('contas/{id}/depositos','Api\ContaCorrenteApiController@deposito');
Route::get('contas/{id}/saques','Api\ContaCorrenteApiController@saque');
//Route::put('contas/{id}','Api\ContaCorrenteApiController');
Route::resource('contas','Api\ContaCorrenteApiController');
//Depositos
Route::resource('depositos','Api\DepositoApiController');
Route::get('depositos/{id}/contas','Api\DepositoApiController@conta_corrente');
//Saques
Route::resource('saques','Api\SaqueApiController');
Route::get('saques/{id}/contas','Api\SaqueApiController@conta_corrente');