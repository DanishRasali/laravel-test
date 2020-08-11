<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\APIController;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
	protected $APIController;
    public function __construct(APIController $APIController)
    {
		$this->middleware('auth');
        $this->APIController = $APIController;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){	
		$user = $this->APIController->getUser(Auth::id());

		return view('user.index')
					->with('user', $user);
    }
	
	public function updateUser(){
		$user = $this->APIController->getUser(Auth::id());
					 
		return view('user.updateUser')
					->with('user', $user);
	}
}
