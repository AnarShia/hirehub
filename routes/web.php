<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;
use App\Models\Post;

Route::get('/', function () {
    return Inertia::render('HomePage');
});
Route::get('/companies', function () {
    $posts=Post::all();
    return Inertia::render('Companies', [
        'jobs' => $posts,
    ]);
    return Inertia::render('Companies');
});
Route::get('/jobs', function () {
    return Inertia::render('Jobs');
});
Route::get('/login', function () {
    return Inertia::render('Login');
});
Route::post('/companies', function () {
    Request::validate([
        'title' => 'required|min:3',
        'salary' => 'required',
        'duration' => 'required',
        'description' => 'required',
    ]);
    Post::create([
        'title' => Request::get('title'),
        'salary' => Request::get('salary'),
        'duration' => Request::get('duration'),
        'description' => Request::get('description'),
    ]);

    return redirect('/companies');
});
Route::get('/signup', function () {
    return Inertia::render('Signup');
});

Route::get('/login', function () {
    return Inertia::render('Users', [
        'users' => User::paginate(10)->map(fn ($user) => [
            'id' => $user->id,
            'name' => $user->name,
        ])
    ]);
});


Route::get('/post/create', function () {
    return Inertia::render('Posts/Create');
});

Route::get('/post/index', function () {
    return Inertia::render('Posts/Index');
});

Route::get('/nav', function () {
    return Inertia::render('Navy');
});
Route::post('/post/create', function () {
    Request::validate([
        'name' => 'required|min:3',
        'surname' => 'required',
    ]);
    Post::create([
        'name' => Request::input('name'),
        'surname' => Request::input('surname'),
    ]);

    return redirect('/post/index');
});

Route::post('/logout', function () {
    return Inertia::render('HomePage');
});
