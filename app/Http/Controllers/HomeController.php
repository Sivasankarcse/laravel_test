<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\WelcomeNotification;
use Illuminate\Support\Facades\Notification;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // $post = [
        //     'title' => 'Post Title',
        //     'slug' => 'post-slug',
        // ];

        $user = User::first();
        // Notification::send($user, new WelcomeNotification($post));
        return view('home');
    }
}
