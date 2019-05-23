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
    Route::apiResource('/{bank}/ballances','BookBallanceController');
    Route::apiResource('/{bank}/reps','BankrepController');
});

// Evacuation Request
Route::apiResource('/evacuations','EvacuationController');
Route::group(['prefix' => 'evacuations'], function () {
    Route::apiResource('/{evacuation}/evacuationpreparations','EvacuationpreparationController');
    Route::apiResource('/{evacuation}/cits','CitController');
});

// Bundle Confirmations
Route::apiResource('/bundleconfirmations','BundleconfirmationController');
Route::group(['prefix' => 'bundleconfirmations'], function () {
    Route::apiResource('/{bundleconfirmation}/bundleconfirmationbags','BundleconfirmationbagController');
    Route::apiResource('/{bundleconfirmation}/thrownexceptions','ThrownexceptionController');
});

// Supply Requests
Route::apiResource('/supplies','SupplyController');
Route::group(['prefix' => 'supplies'], function () {
    Route::apiResource('/{supply}/supplybranches','SupplybranchController');
});

// Cash Allocations
Route::apiResource('/cashallocations','CashallocationController');

// Consignment Locations
Route::apiResource('/consignmentlocations','ConsignmentlocationController');

// Container Types
Route::apiResource('/containertypes','ContainertypeController');

// Currencies
Route::apiResource('/currencies','CurrencyController');

// Day Shift
Route::apiResource('/dayshifts','DayshiftController');

// Denomination
Route::apiResource('/denominations','DenominationController');

// Deposit Category
Route::apiResource('/depositcategories','DepositcategoryController');

// Deposit Type
Route::apiResource('/deposittypes','DeposittypeController');

// Generals
Route::apiResource('/generals','GeneralController');

// Internal Movements
Route::apiResource('/internalmovements','InternalmovementController');

// Notifications
Route::apiResource('/notifications','NotificationController');

// Sealing
Route::apiResource('/sealings','SealingController');

// Shifts Day
Route::apiResource('/shiftsdays','ShiftsdayController');

// Vehicles
Route::apiResource('/vehicles','VehicleController');