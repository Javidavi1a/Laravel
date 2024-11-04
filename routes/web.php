<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\PagosController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\FacturasController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



//------------------------------Rutas: clientes----------------------
Route::name('clientes')->get('/clientes', [ClienteController::class, 'clientes']);
Route::name('cliente_alta')->get('/cliente_alta', [ClienteController::class, 'cliente_alta']);
Route::name('cliente_registrar')->post('/cliente_registrar', [ClienteController::class, 'cliente_registrar']);
Route::name('cliente_detalle')->get('/cliente_detalle/{id}', [ClienteController::class, 'cliente_detalle']);
Route::name('cliente_editar')->get('/cliente_editar/{id}', [ClienteController::class, 'cliente_editar']);
Route::name('cliente_salvar')->put('/cliente_salvar/{id}', [ClienteController::class, 'cliente_salvar']);
Route::name('cliente_borrar')->get('/cliente_borrar/{id}', [ClienteController::class, 'cliente_borrar']);
//------------------------------Rutas: Empleados----------------------
Route::name('empleados')->get('/empleados', [EmpleadoController::class, 'empleados']);
Route::name('empleado_alta')->get('/empleado_alta', [EmpleadoController::class, 'empleado_alta']);
Route::name('empleado_registrar')->post('/empleado_registrar', [EmpleadoController::class, 'empleado_registrar']);
Route::name('empleado_detalle')->get('/empleado_detalle/{id}', [EmpleadoController::class, 'empleado_detalle']);
Route::name('empleado_editar')->get('/empleado_editar/{id}', [EmpleadoController::class, 'empleado_editar']);
Route::name('empleado_salvar')->put('/empleado_salvar/{id}', [EmpleadoController::class, 'empleado_salvar']);
Route::name('empleado_borrar')->get('/empleado_borrar/{id}', [EmpleadoController::class, 'empleado_borrar']);
//-----------------------------Rutas: Proveedor--------------------
Route::name('proveedores')->get('/proveedores', [ProveedorController::class, 'proveedores']);
Route::name('proveedor_alta')->get('/proveedor_alta', [ProveedorController::class, 'proveedor_alta']);
Route::name('proveedor_registrar')->post('/proveedor_registrar', [ProveedorController::class, 'proveedor_registrar']);
Route::name('proveedor_detalle')->get('/proveedor_detalle/{id}', [ProveedorController::class, 'proveedor_detalle']);
Route::name('proveedor_editar')->get('/proveedor_editar/{id}', [ProveedorController::class, 'proveedor_editar']);
Route::name('proveedor_salvar')->put('/proveedor_salvar/{id}', [ProveedorController::class, 'proveedor_salvar']);
Route::name('proveedor_borrar')->get('/proveedor_borrar/{id}', [ProveedorController::class, 'proveedor_borrar']);

//-----------------------------Rutas: Servicio--------------------
Route::name('servicios')->get('/servicios', [ServicioController::class, 'servicios']);
Route::name('servicio_alta')->get('/servicio_alta', [ServicioController::class, 'servicio_alta']);
Route::name('servicio_registrar')->post('/servicio_registrar', [ServicioController::class, 'servicio_registrar']);
Route::name('servicio_detalle')->get('/servicio_detalle/{id}', [ServicioController::class, 'servicio_detalle']);
Route::name('servicio_editar')->get('/servicio_editar/{id}', [ServicioController::class, 'servicio_editar']);
Route::name('servicio_salvar')->put('/servicio_salvar/{id}', [ServicioController::class, 'servicio_salvar']);
Route::name('servicio_borrar')->get('/servicio_borrar/{id}', [ServicioController::class, 'servicio_borrar']);

//-----------------------------Rutas: Reservas--------------------
Route::name('reservas')->get('/reservas', [ReservaController::class, 'reservas']);
Route::name('reserva_registrar')->post('/reserva_registrar', [ReservaController::class, 'reserva_registrar']);
Route::name('reserva_borrar')->get('/reserva_borrar/{id}', [ReservaController::class, 'reserva_borrar']);

//-----------------------------Rutas: Pagos--------------------
Route::name('pagos')->get('/pagos', [PagosController::class, 'pagos']);
Route::name('pago_registrar')->post('/pago_registrar', [PagosController::class, 'pago_registrar']);
Route::name('pago_borrar')->get('/pago_borrar/{id}', [PagosController::class, 'pago_borrar']);

//-----------------------------Rutas: Inventario--------------------
Route::name('inventarios')->get('/inventarios', [InventarioController::class, 'inventarios']);
Route::name('inventario_alta')->get('/inventario_alta', [InventarioController::class, 'inventario_alta']);
Route::name('inventario_registrar')->post('/inventario_registrar', [InventarioController::class, 'inventario_registrar']);
Route::name('inventario_detalle')->get('/inventario_detalle/{id}', [InventarioController::class, 'inventario_detalle']);
Route::name('inventario_editar')->get('/inventario_editar/{id}', [InventarioController::class, 'inventario_editar']);
Route::name('inventario_salvar')->put('/inventario_salvar/{id}', [InventarioController::class, 'inventario_salvar']);
Route::name('inventario_borrar')->get('/inventario_borrar/{id}', [InventarioController::class, 'inventario_borrar']);

//-----------------------------Rutas: facturas--------------------
Route::name('facturas')->get('/facturas', [FacturasController::class, 'facturas']);
Route::name('facturas_registrar')->post('/facturas_registrar', [FacturasController::class, 'facturas_registrar']);
Route::name('facturas_borrar')->get('/facturas_borrar/{id}', [FacturasController::class, 'facturas_borrar']);

///-----------
Route::name('index')->get('/index', [IndexController::class, 'index']);
