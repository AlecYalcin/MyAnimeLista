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

	$Usuarios = [
		'alec',
		'william',
		'victor',
		'ronald',
	];

    return view('welcome', ['usuarios'=> $Usuarios]);
});

Route::Get('/{nome}', function($nome) {

	$animes = [];
	$notas = [];

	if ($nome == 'alec')  {

		$animes = [
			'Shingeki-No-Kyojin',
			'One-Piece',
			'Hunter-x-Hunter',
		];

		$notas = [
			10,
			10,
			10,
		];
	} elseif ($nome == 'william') {

		$animes = [
			'Code-geass',
			'Bakuman',
			'Yesterday-wo-utatte',
		];

		$notas = [
			'10',
			'9',
			'7',
		];
	} elseif ($nome == 'victor') {
		$animes = [
			'to love-ru',
			'sword art online',
			'Beastars',
		];

		$notas = [
			7,
			8.5,
			'Não visto',
		];
	} elseif ($nome == 'ronald') {
		$animes = ['Boku no Hero Academia'];
		$notas = [9];
	}

	return view('user', ['animes'=>$animes, 'notas'=>$notas]);
})->name('users');