<?php

use Illuminate\Support\Facades\Route;
//Llamamos a todos los controladores que usaremos
use App\Http\Controllers\UsuariosControllers;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\Jadde;
use App\http\Controllers\CustomerController;
use App\http\Controllers\OficinaController;
use App\http\Controllers\PedidosController;






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

Route::get('/usuarios', function () {
    return "Aqui van los usuarios";
});

Route::get('/usuarios2',
[UsuariosController::class, 'listar']
);

Route::get('/productos',
[ProductoController::class, 'listar']
);

Route::get('/jadde',
[ProductoController::class, 'listar']
);
Route::get('/jadde',
[Jadde::class, 'listar']
);

route::get('/clientes',
[CustomerController::class, 'listar']
);

route::get('/oficinas',
[OficinaController::class,'listar']
);

route::get('/pedidos',
[PedidosController::class,'listar']
);

