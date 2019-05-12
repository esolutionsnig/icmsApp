<?php

use Illuminate\Http\Request;

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
    Route::get('signup/activate/{token}', 'AuthController@signupActivate');
  
    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');
    });

});

Route::group([    
    'namespace' => 'Auth',    
    'middleware' => 'api',    
    'prefix' => 'password'
], function () {    
    Route::post('create', 'PasswordResetController@create');
    Route::get('find/{token}', 'PasswordResetController@find');
    Route::post('reset', 'PasswordResetController@reset');
});

// Banks
Route::apiResource('/banks','BanksController');
Route::group(['prefix'=>'banks'],function(){
    Route::apiResource('/{bank}/branches','BankBranchController');
    Route::apiResource('/{bank}/reps','BankRepsController');
    Route::apiResource('/{bank}/balance','BookBalanceController');
});

// Evacuation Request
Route::apiResource('/bankrequests','BankRequestsController');
Route::group(['prefix' => 'bankrequests'], function () {
    Route::apiResource('/{bankrequest}/cashpreparations','CashPreparationsController');
    Route::apiResource('/{bankrequest}/cit','CitController');
});

// Bundle Confirmations
Route::apiResource('/bundleconfirmations','BundleConfirmationStartController');
Route::group(['prefix'=>'bundleconfirmations'],function(){
    Route::apiResource('/{bundleconfirmation}/bundleconfirmations','BundleConfirmationsController');
    Route::apiResource('/{bundleconfirmation}/thrownexceptions','ThrownExceptionsController');
});

// Cash Allocations
Route::apiResource('/cashallocations','CashAllocationsController');

// Consignment Locations
Route::apiResource('/consignmentlocations','ConsignmentLocationsController');

// Container Types
Route::apiResource('/containertypes','ContainerTypesController');

// Currencies
Route::apiResource('/currencies','CurrenciesController');

// Day Shift
Route::apiResource('/dayshift','DayShiftController');

// Denominations
Route::apiResource('/denominations','DenominationsController');

// Deposit Types
Route::apiResource('/deposittypes','DepositTypesController');

// Deposit Categories
Route::apiResource('/depositcategories','DepositCategoryController');

// General
Route::apiResource('/general','GeneralController');

// Internal Movements
Route::apiResource('/internalmovements','InternalMovementsController');

// Message
Route::apiResource('/message','MessageController');

// Notifications
Route::apiResource('/notifications','NotificationsController');

// Sealings
Route::apiResource('/sealings','SealingsController');

// Seal Numbers
Route::apiResource('/sealnumbers','SealNumbersController');

// Shifts Day
Route::apiResource('/shiftsday','ShiftsDayController');

// SupplyRequests
Route::apiResource('/supplyrequests','SupplyRequestsController');
Route::group(['prefix'=>'supplyrequests'],function(){
    Route::apiResource('/{supplyrequest}/supplyrequestsbranch','SupplyRequestsBranchController');
});

// Vaults
Route::apiResource('/vaults','VaultController');

// Vehicles
Route::apiResource('/vehicles','VehiclesController');