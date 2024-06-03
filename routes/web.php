<?php

use App\Livewire\Auth\Login;
use App\Livewire\Admin\Users;
use App\Livewire\Auth\Signup;
use App\Livewire\Company\Job;
use App\Livewire\Admin\Company;
use App\Livewire\Admin\Message;
use App\Livewire\Admin\Homepage;
use App\Livewire\Admin\Messages;
use App\Livewire\Company\Chat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Livewire\Company\Homepage as CompanyHomepage;
use Illuminate\Broadcasting\Channel;

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

Route::get('/', Login::class)->name('auth.signin');
Route::get('/signup', Signup::class)->name('auth.signup');
Route::get('/resume',function(){
    return view('resume');
});
Route::get('/resumetailwindcss',function(){
    return view('resumetailwindcss');
});
Route::prefix('admin')->group(function()
{
    Route::get('homapage',Homepage::class)->name('admin.homepage');
    Route::get('company',Company::class)->name('admin.company');
    Route::get('users',Users::class)->name('admin.users');
    Route::get('messages',Messages::class)->name('admin.messages');
    Route::get('message/{id}',Message::class)->name('admin.message');

    Route::get('logout',function(){
        Auth::guard('web')->logout();
        return redirect()->route('auth.signin');
    })->name('admin.logout');
});
Route::prefix('company')->group(function()
{
    Route::get('homapage',CompanyHomepage::class)->name('company.homepage');
    Route::get('jobs',Job::class)->name('company.jobs');
    Route::get('chat-support',Chat::class)->name('company.chat');

    Route::get('logout',function(){
        Auth::guard('company')->logout();
        return redirect()->route('auth.signin');
    })->name('company.logout');
});
Route::middleware('student')->group(function()
{
    Route::get('homapage',\App\Livewire\Student\Homepage::class)->name('student.homepage');
    Route::get('company/{company}/{id}',\App\Livewire\Student\Company::class)->name('student.company');
    Route::get('company/job/{job}/{id}',\App\Livewire\Student\Job::class)->name('student.job');
    Route::get('company/job/{job}/{id}',\App\Livewire\Student\Job::class)->name('student.job');
    Route::get('bookmarks',\App\Livewire\Student\Bookmark::class)->name('student.bookmark');
    Route::get('profile',\App\Livewire\Student\Profile::class)->name('student.profile');
    Route::get('chat',\App\Livewire\Student\Chat::class)->name('student.chat');
    Route::get('resume-builder',\App\Livewire\Student\Resume::class)->name('student.resume');



    Route::get('logout',function(){
        Auth::guard('student')->logout();
        return redirect()->route('auth.signin');
    })->name('student.logout');
});
