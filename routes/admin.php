<?php

/*
|--------------------------------------------------------------------------
| Web Routes :::: Admin
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['middleware' => ['auth', 'verified']], function() {
 
	  Route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');

	  Route::resource('admin/email-templates', App\Http\Controllers\Admin\EmailTemplatesController::class, ['except' => ['show']]);

	Route::resource('admin/sms-templates', App\Http\Controllers\Admin\SmsTemplateController::class, ['except' => ['show']]);

	Route::resource('admin/settings/captcha', App\Http\Controllers\Admin\GoogleCaptchaController::class, ['except' => ['show', 'update']]);
	Route::post('/admin/settings/captcha/update/{id}', [App\Http\Controllers\Admin\GoogleCaptchaController::class, 'update'])->name('admim.captcha.update');

	Route::resource('admin/settings/twilio', App\Http\Controllers\Admin\TwilioSettingController::class, ['except' => ['show', 'update']]);
	Route::post('/admin/settings/twilio/update/{id}', [App\Http\Controllers\Admin\TwilioSettingController::class, 'update'])->name('admim.twilio.update');

	Route::resource('admin/pages', App\Http\Controllers\Admin\PagesController::class);

	Route::resource('admin/settings', App\Http\Controllers\Admin\SiteConfigController::class, ['except' => ['show']]);
});



