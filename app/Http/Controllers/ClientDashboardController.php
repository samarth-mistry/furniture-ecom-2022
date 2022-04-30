<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Item;
use Illuminate\Http\Request;

class ClientDashboardController extends Controller
{    
    public function index()
    {
        return view('clients.dashboard');
    }

    public function home()
    {
        return view('bizland');
    }

    public function shopping()
    {
        return view('shopping');
    }

    public function profile()
    {
        $user = Auth::user();
        return view('clients.profile', compact('user'));
    }

    public function description($id)
    {
        $item = Item::find($id);
        return view('description', compact('item'));
    }
}
