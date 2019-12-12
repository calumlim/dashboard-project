<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard.index');
    }

    public function show(){
        $user = Auth::user();
        
        return view('dashboard.show', compact('user'));

    }

    public function edit() {
        $user = Auth::user();

        return view('dashboard.edit', compact('user'));
    }

    public function update() {
        $data = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);

        $user = Auth::user();
        $user->update($data);
        
        
        return redirect('/home/'.$user->name);
    }
}
