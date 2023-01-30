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
    return view('welcome');
});

// Dashboard Folder
Route::prefix('dashboard')->group(function () {

    # Configuration Folder
    Route::prefix('configurations')->group(function () {
        //Banks
        Route::resource('banks', App\Http\Controllers\Dashboard\Configuration\BanksController::class)->except('show');
        //Commitment-Situations
        Route::resource('commitment-situations', App\Http\Controllers\Dashboard\Configuration\CommitmentSituationController::class)->except('show');
        //Courts
        Route::resource('courts', App\Http\Controllers\Dashboard\Configuration\CourtsController::class)->except('show');
        //Forums
        Route::resource('forums', App\Http\Controllers\Dashboard\Configuration\ForumsController::class)->except('show');
        //Genders
        Route::resource('genders', App\Http\Controllers\Dashboard\Configuration\GendersController::class)->except('show');
        //Holidays
        Route::resource('holidays', App\Http\Controllers\Dashboard\Configuration\HolidaysController::class)->except('show');
        //Issuing institutions
        Route::resource('issuing-institutions', App\Http\Controllers\Dashboard\Configuration\IssuingInstitutionsController::class)->except('show');
        //Judges
        Route::resource('judges', App\Http\Controllers\Dashboard\Configuration\JudgesController::class)->except('show');
        //Kinships
        Route::resource('kinships', App\Http\Controllers\Dashboard\Configuration\KinshipsController::class)->except('show');
        //Marital status
        Route::resource('marital-status', App\Http\Controllers\Dashboard\Configuration\MaritalStatusController::class)->except('show');
        //procedural-conditions
        Route::resource('procedural-conditions', App\Http\Controllers\Dashboard\Configuration\ProceduralConditionController::class)->except('show');
        //Professionals
        Route::resource('occupations', App\Http\Controllers\Dashboard\Configuration\OccupationsController::class)->except('show');
        //Situations
        Route::resource('situations', App\Http\Controllers\Dashboard\Configuration\SituationsController::class)->except('show');
    });

    # Financial Folder
    Route::prefix('financials')->group(function () {
        //Accounts
        Route::resource('accounts', App\Http\Controllers\Dashboard\Financial\AccountsController::class)->except('show');
        //Categories
        Route::resource('categories', App\Http\Controllers\Dashboard\Financial\CategoriesController::class)->except('show');
        //Expenses
        Route::resource('expenses', App\Http\Controllers\Dashboard\Financial\ExpensesController::class)->except('show');
        //Incomes
        Route::resource('incomes', App\Http\Controllers\Dashboard\Financial\IncomesController::class)->except('show');
        //Payment Methods
        Route::resource('payment-methods', App\Http\Controllers\Dashboard\Financial\PaymentMethodsController::class)->except('show');
    });

    # Registration Folder
    //Cases
    Route::resource('processos', App\Http\Controllers\Dashboard\Registration\ProcessController::class)->except('show');
    //Clients
    Route::resource('clientes', App\Http\Controllers\Dashboard\Registration\CustomersController::class)->except('show');
    //Lawyers
    Route::resource('lawyers', App\Http\Controllers\Dashboard\Registration\LawyersController::class)->except('show');
    //Printings
    Route::resource('printings', App\Http\Controllers\Dashboard\Registration\PrintingsController::class)->except('show');

    # Types Folder
    Route::prefix('types')->group(function () {
        //Actions
        Route::resource('actions', App\Http\Controllers\Dashboard\Types\ActionsController::class)->except('show');
        //Address
        Route::resource('address', App\Http\Controllers\Dashboard\Types\AddressController::class)->except('show');
        //Case
        Route::resource('cases', App\Http\Controllers\Dashboard\Types\ProcessController::class)->except('show');
        //Clients
        Route::resource('clients', App\Http\Controllers\Dashboard\Types\CustomersController::class)->except('show');
        //Defenders
        Route::resource('defenders', App\Http\Controllers\Dashboard\Types\DefendersController::class)->except('show');
        //Justices
        Route::resource('justices', App\Http\Controllers\Dashboard\Types\JusticesController::class)->except('show');
        //Phones
        Route::resource('phones', App\Http\Controllers\Dashboard\Types\PhonesController::class)->except('show');
    });

    // Home
    Route::get('/', [App\Http\Controllers\Dashboard\IndexController::class, 'index'])->name('dashboard');

    //Failed Logins
    Route::resource('failed-logins', \App\Http\Controllers\Dashboard\FailedLoginsController::class)->except('show');

    //Notifications
    Route::resource('notifications', \App\Http\Controllers\Dashboard\NotificationsController::class)->except('show');

    //Settings
    Route::resource('settings', \App\Http\Controllers\Dashboard\SettingsController::class)->except('show');

    //Users
    Route::resource('users', \App\Http\Controllers\Dashboard\UsersController::class)->except('show');

    //Visitors
    Route::resource('visitors', \App\Http\Controllers\Dashboard\VisitorsController::class)->except('show');

});
