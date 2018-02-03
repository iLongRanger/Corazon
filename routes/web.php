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

    //Customers for Spa
    Route::get('customers/datatable', 'CustomersController@datatable');
    Route::resource('customers', 'CustomersController');
    Route::get('/customers/edit/{id}', 'CustomersController@edit');
    Route::get('/customers/delete/{id}', 'CustomersController@destroy');


});

Route::group(['middleware' => 'admin'], function () {
    Route::get('users/datatable', 'UsersController@datatable');
    Route::resource('users', 'UsersController');
    Route::get('/users/edit/{id}', 'UsersController@edit');
    Route::get('/users/delete/{id}', 'UsersController@destroy');
});

//Route for Human resources module
Route::group(['middleware' => 'humanresourceman'], function(){
    //Employees for HR
    Route::get('employees/datatable', 'EmployeesController@datatable');
    Route::resource('employees', 'EmployeesController');
    Route::get('/employees/edit/{id}', 'EmployeesController@edit');
    Route::get('/employees/delete/{id}', 'EmployeesController@destroy');

    //Personal Information of employees HR Module
    Route::get('personal/add-edit-remove-column-data', 'PersonalController@getAddEditRemoveColumnData');
    Route::resource('personal', 'PersonalController');
    Route::get('/personal/edit/{id}', 'PersonalController@edit');
    Route::get('/personal/delete/{id}', 'PersonalController@destroy');

    //Pre Employement Information of Employees HR Module
    Route::get('pre_employment/add-edit-remove-column-data', 'PreEmploymentController@getAddEditRemoveColumnData');
    Route::resource('pre_employment', 'PreEmploymentController');
    Route::get('/pre_employment/edit/{id}', 'PreEmploymentController@edit');
    Route::get('/pre_employment/delete/{id}', 'PreEmploymentController@destroy');

    //Employment Information of Employees HR Module
    Route::get('employment/add-edit-remove-column-data', 'EmploymentController@getAddEditRemoveColumnData');
    Route::resource('employment', 'EmploymentController');
    Route::get('/employment/edit/{id}', 'EmploymentController@edit');
    Route::get('/employment/delete/{id}', 'EmploymentController@destroy');

    //Payroll Management
    Route::get('payroll/datatable', 'PayrollController@datatable');
    Route::resource('payroll', 'PayrollController');
    Route::get('/payroll/edit/{id}', 'PayrollController@edit');
    Route::get('/payroll/delete/{id}', 'PayrollController@destroy');

    //Maintenance
    //department
    Route::get('departments/add-edit-remove-column-data', 'DepartmentController@getAddEditRemoveColumnData');
    Route::resource('departments', 'DepartmentController');
    Route::get('/departments/edit/{id}', 'DepartmentController@edit');
    Route::get('/departments/delete/{id}', 'DepartmentController@destroy');

    //roles
    Route::get('roles/add-edit-remove-column-data', 'RoleController@getAddEditRemoveColumnData');
    Route::resource('roles', 'RoleController');
    Route::get('/roles/edit/{id}', 'RoleController@edit');
    Route::get('/roles/delete/{id}', 'RoleController@destroy');

});
