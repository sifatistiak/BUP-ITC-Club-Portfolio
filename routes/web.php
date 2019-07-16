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

Route::get('/','FrontendController@index')->name('index');
Route::get('/events','FrontendController@events')->name('events');
Route::get('/single_event/{id}','FrontendController@singleEvent')->name('single.event');

Route::get('/achievements','FrontendController@achievements')->name('achievements');
Route::get('/single_achievement/{id}','FrontendController@singleAchievement')->name('single.achievement');

Route::get('/members','FrontendController@members')->name('members');
Route::get('/single_member/{id}','FrontendController@singleMember')->name('single.member');

Route::get('/blog','FrontendController@blog')->name('blog');
Route::get('/single_blog/{id}','FrontendController@singleBlog')->name('single.blog');

Route::get('/be_a_member','FrontendController@beAMember')->name('be.a.member');
Route::post('/submit_member','FrontendController@submitMember')->name('submit.member');

// Authentication Routes...
Route::get('admin/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('admin/login', 'Auth\LoginController@login');
Route::post('admin/logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
//Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
//Route::get('admin/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
//Route::post('admin/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
//Route::get('admin/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
//Route::post('admin/password/reset', 'Auth\ResetPasswordController@reset');

Route::get('admin/home', 'Admin\HomeController@index')->name('admin.home');

Route::prefix('admin')->group(function () {
    Route::name('admin.')->group(function () {
        Route::get('change_password', 'Admin\AdminController@changePasswordView')->name('change.password.view');
        Route::post('change_password', 'Admin\AdminController@changePassword')->name('change.password');

        //event
        Route::resource('events', 'Admin\EventController');
//        achievement
        Route::resource('achievement', 'Admin\AchievementController');
        Route::resource('notice', 'Admin\NoticeController');
        Route::resource('testimonial', 'Admin\TestimonialController');
        Route::resource('meeting', 'Admin\MeetingController');
        Route::resource('member', 'Admin\MemberController');
        Route::resource('blog', 'Admin\BlogController');
        Route::get('requests','Admin\MemberController@requests')->name('requests');
        Route::get('accept/{id}','Admin\MemberController@accept')->name('accept');


    });
});
