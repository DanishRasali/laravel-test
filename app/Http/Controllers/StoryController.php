<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\APIController;

class StoryController extends Controller
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
		$stories = $this->APIController->getStories(Auth::id());
		
        return view('story.index')
					->with('stories',$stories);
    }
	
	public function story($story_id){
		$story = $this->APIController->getStory($story_id);
					 
		return view('story.story')
					->with('story', $story);
	}
	
	public function addStory(){
		return view('story.addStory');
	}
	
	public function updateStory($story_id){
		$story = $this->APIController->getStory($story_id);
					 
		return view('story.updateStory')
					->with('story', $story);
	}

}
