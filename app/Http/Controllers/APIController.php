<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class APIController extends Controller
{
	//User API
	public function getUser($id){
		$user = DB::table('users')
                     ->where('id', $id)
                     ->get();
		
		return $user;
	}
	
	public function updateUser(Request $request){
		$id = ($request->input('id') !== null) ? $request->input('id') : "";
		$email = ($request->input('email') !== null) ? $request->input('email') : "";
		$name = ($request->input('name') !== null) ? $request->input('name') : "";
		$address = ($request->input('address') !== null) ? $request->input('address') : "";
		$phone_num = ($request->input('phone_num') !== null) ? $request->input('phone_num') : "";
		
		$affected = DB::table('users')
						  ->where('id', $id)
						  ->update(
								[
									'email' => $email,
									'name' => $name,
									'address' => $address,
									'phone_num' => $phone_num
								]
							);
							
		if($affected)
			echo json_encode(array("status" => 200, "message" => "Account updated successfully!"));
		else
			echo json_encode(array("status" => 500, "message" => "Account update failed!"));
	}
	//End of User API
	
	//Story API
	public function getStory($id){
		$story = DB::table('stories')
                     ->where('id', $id)
                     ->get();
					 
		return $story;
	}
	
	public function getStories($user_id){
		$stories = DB::table('stories')
                     ->where('user_id', $user_id)
                     ->get();
					 
		return $stories;
	}
	
	public function addStory(Request $request){
		$title = ($request->input('title') !== null) ? $request->input('title') : "";
		$content = ($request->input('content') !== null) ? $request->input('content') : "";
		$user_id = ($request->input('user_id') !== null) ? $request->input('user_id') : "";
		
		$story_id = DB::table('stories')->insertGetId(
			[
				'title' => $title, 
				'content' => $content,
				'user_id' => $user_id
			]
		);
		
		if($story_id)
			echo json_encode(array("story_id" => $story_id, "status" => 200, "message" => "Story added successfully!"));
		else
			echo json_encode(array("story_id" => 0, "status" => 500, "message" => "Failed to add story!"));
	}
	
	public function updateStory(Request $request){
		$id = ($request->input('id') !== null) ? $request->input('id') : "";
		$title = ($request->input('title') !== null) ? $request->input('title') : "";
		$content = ($request->input('content') !== null) ? $request->input('content') : "";
		
		$affected = DB::table('stories')
						  ->where('id', $id)
						  ->update(
								[
									'title' => $title,
									'content' => $content
								]
							);
							
		if($affected)
			echo json_encode(array("status" => 200, "message" => "Story updated successfully!"));
		else
			echo json_encode(array("status" => 500, "message" => "Story update failed!"));
	}
	
	public function deleteStory($id){
		$affected = DB::table('stories')
				->where('id', $id)
				->delete();
		
		if($affected)
			echo json_encode(array("status" => 200, "message" => "Story deleted successfully!"));
		else
			echo json_encode(array("status" => 500, "message" => "Story delete failed!"));
	}
	//End of Story API
}
