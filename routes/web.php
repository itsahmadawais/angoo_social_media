<?php

use App\Http\Controllers\AdsManagerController;
use App\Http\Controllers\AlertController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\FriendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
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



Auth::routes();

Route::post('authsignup',[AuthController::class,'signup']);
Route::post('authlogin',[AuthController::class,'login']);

Route::middleware(['auth'])->group(function(){
    Route::get('/',[FeedController::class,'index']);
    Route::get('/feed',[FeedController::class,'index']);

    Route::get('/ads/create',[AdsManagerController::class,'create']);
    

    Route::post('user/cover_photo',[ProfileController::class,'update_cover_photo']);
    Route::post('user/avatar_photo',[ProfileController::class,'update_avatar_photo']);
    Route::get('/alert',[AlertController::class,'index']);

    /**
     * Settings
     */
    Route::get('/settings',[SettingsController::class,'index']);
    /**
     * Friends and Friend Request
     */
    Route::get('friends/request',[FriendController::class,'friends_request']);
    Route::post('friends/request/accept',[FriendController::class,'accept_friend_request']);
    Route::post('friends/request/delete',[FriendController::class,'delete_friend_request']);
    Route::post('/send-friend-request',[FriendController::class,'send_friend_request']);
    Route::get('/about/{username}',[ProfileController::class,'about']);
    Route::get('/friends/{username}',[ProfileController::class,'friends']);
    Route::get('{username}',[ProfileController::class,'view']);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
