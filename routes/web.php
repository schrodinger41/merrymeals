<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\DeliverController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\VolunteerController;

Route::get('/', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/menu-listing', function () {
        return view('menu-listing');
    })->name('menu-listing');
});



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    if (Auth::check()) {

        if (Auth::user()->role == 'member') {
            return redirect()->route('member#index');
        } else if (Auth::user()->role == 'partner') {
            return redirect()->route('partner#index');
        } else if (Auth::user()->role == 'volunteer') {
            return redirect()->route('volunteer#index');
        // } else if (Auth::user()->role == 'admin') {
        //     return redirect()->route('admin#index');
        }
    }
})->name('welcome');


//Member
Route::group(['prefix' => 'member'], function () {
    Route::get('/', [MemberController::class, 'index'])->name('member#index'); //member dashboard
    Route::get('/member/{id}', [MemberController::class, 'saveMemberMealPlan'])->name('member#saveMemberMealPlan');
    Route::get('/viewAllMenu', [MemberController::class, 'viewAllMenu'])->name('member#viewAllMenu');
    Route::get('/viewMenu/{id}', [MemberController::class, 'viewMenu'])->name('member#viewMenu');
    Route::get('/foodSafety', [MemberController::class, 'foodSafety'])->name('member#foodSafety');
    Route::get('/orderConfirmation/{partner_id}/{menu_id}/{user_id}', [MemberController::class, 'orderConfirmation'])->name('member#orderConfirmation');
    Route::post('/saveOrder', [OrderController::class, 'saveOrder'])->name('order#saveOrder');
    Route::get('/showOrderDelivery/{id}', [OrderController::class, 'showOrderDelivery'])->name('order#showOrderDelivery');
    Route::get('/updateMemberOrder/{id}', [MemberController::class, 'updateMemberOrder'])->name('member#updateMemberOrder');
    Route::get('/updateProfile/{id}', [MemberController::class, 'updateProfile'])->name('member#updateProfile');
    Route::get('/reassesment/{id}', [MemberController::class, 'reassesment'])->name('member#reassesment');
    Route::post('/newReassesment//{id}', [MemberController::class, 'newReassesment'])->name('member#newReassesment');
});


//Partner
Route::group(['prefix' => 'partner'], function () {
    Route::get('/', [PartnerController::class, 'index'])->name('partner#index'); //partner dashboard
    Route::get('/createMenu', [PartnerController::class, 'createMenu'])->name('partner#createMenu'); //calling the menu creation page
    Route::post('/saveMenu', [PartnerController::class, 'saveMenu'])->name('partner#saveMenu'); //saving a new menu into the database
    Route::get('/viewMenu/{id}', [PartnerController::class, 'viewMenu'])->name('partner#viewMenu'); //partner view a specific menu
    Route::get('/foodSafety', [partnerController::class, 'foodSafety'])->name('partner#foodSafety');
    Route::get('/deleteMenu/{id}', [PartnerController::class, 'deleteMenu'])->name('partner#deleteMenu'); //deleting a specific menu
    Route::get('/updateMenu/{id}', [PartnerController::class, 'updateMenu'])->name('partner#updateMenu'); //calling the updation page
    Route::post('/saveUpdate{id}', [PartnerController::class, 'saveUpdate'])->name('partner#saveUpdate'); //saving the updated data
    Route::get('/AllOrderForPartner/{id}', [OrderController::class, 'AllOrderForPartner'])->name('order#AllOrderForPartner');
    Route::get('/updateOrder/{id}', [OrderController::class, 'updateOrder'])->name('order#updateOrder');
    Route::get('/updateProfile/{id}', [PartnerController::class, 'updateProfile'])->name('partner#updateProfile');
});


//Volunteer
Route::group(['prefix' => 'volunteer'], function () {
    Route::get('/', [VolunteerController::class, 'index'])->name('volunteer#index'); //volunteer dashboard
    Route::get('/viewAllMenu', [VolunteerController::class, 'viewAllMenu'])->name('volunteer#viewAllMenu');
    Route::get('/updateDelivery/{id}', [DeliverController::class, 'updateDelivery'])->name('delivery#updateDelivery');
    Route::get('/AllDeliveryForVolunteer', [DeliverController::class, 'AllDeliveryForVolunteer'])->name('deliver#AllDeliveryForVolunteer');
    Route::get('/updateDelivery/{id}', [DeliverController::class, 'updateDelivery'])->name('deliver#updateDelivery');
    Route::get('/updateProfile/{id}', [VolunteerController::class, 'updateProfile'])->name('volunteer#updateProfile');
});






