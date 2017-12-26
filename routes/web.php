<?php

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

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
    //        // Uses Auth Middleware
    //    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
    //department
    Route::get('departments/datatable', 'DepartmentController@datatable');
    Route::resource('departments', 'DepartmentController');
    Route::get('/departments/edit/{id}', 'DepartmentController@edit');
    Route::get('/departments/delete/{id}', 'DepartmentController@destroy');

    //roles
    Route::get('roles/datatable', 'RoleController@datatable');
    Route::get('roles/add-edit-remove-column-data', 'RoleController@getAddEditRemoveColumnData');
    Route::resource('roles', 'RoleController');
    Route::get('/roles/edit/{id}', 'RoleController@edit');
    Route::get('/roles/delete/{id}', 'RoleController@destroy');

    //Customers for Spa
    Route::get('customers/datatable', 'CustomersController@datatable');
    Route::resource('customers', 'CustomersController');
    Route::get('/customers/edit/{id}', 'CustomersController@edit');
    Route::get('/customers/delete/{id}', 'CustomersController@destroy');

    //Employees for HR
    Route::get('employees/datatable', 'EmployeesController@datatable');
    Route::resource('employees', 'EmployeesController');
    Route::get('/employees/edit/{id}', 'EmployeesController@edit');
    Route::get('/employees/delete/{id}', 'EmployeesController@destroy');

    //Personal Information of employees HR Module
    Route::get('personal/datatable', 'PersonalController@datatable');
    Route::resource('personal', 'PersonalController');
    Route::get('/personal/edit/{id}', 'PersonalController@edit');
    Route::get('/personal/delete/{id}', 'PersonalController@destroy');

    //Pre Employement Information of Employees HR Module
    Route::get('pre_employment/datatable', 'PreEmploymentController@datatable');
    Route::resource('pre_employment', 'PreEmploymentController');
    Route::get('/pre_employment/edit/{fileNo}', 'PreEmploymentController@edit');
    Route::get('/pre_employment/delete/{fileNo}', 'PreEmploymentController@destroy');



});

Route::group(['middleware' => 'admin'], function () {
    Route::get('users/datatable', 'UsersController@datatable');
    Route::resource('users', 'UsersController');
    Route::get('/users/edit/{id}', 'UsersController@edit');
    Route::get('/users/delete/{id}', 'UsersController@destroy');
});
