<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;
use Symfony\Component\HttpKernel\Event\ViewEvent;

class NotificationController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function index()
    {
        return view('notification.index');
    }
}
