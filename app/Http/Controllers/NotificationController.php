<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;
use Symfony\Component\HttpKernel\Event\ViewEvent;
use App\Like;

class NotificationController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function index()
    {
        auth()->user()->unreadNotifications->markAsRead();
        return view('notification.index');
    }
}
