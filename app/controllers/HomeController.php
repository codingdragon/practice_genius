<?php
use PracticeGenius\Models\Chimi;
use PracticeGenius\Models\Dog;
class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}
	
	public function index($id = null, $weight = null)
	{	

	    /*
	    $query = "SELECT p.`id`, c.`title`, c.`content`, pw.`weight`, cat.`name` FROM `practices` p
	    JOIN `socialmedia_practice_posted` pp ON p.`id` = pp.`practice_id`
	    JOIN socialmedia_contents c ON c.`id` = pp.`content_id`
	    JOIN socialmedia_category_practice_weights pw ON pw.`category_id` = c.`category_id`
	    JOIN socialmedia_categories cat ON cat.id = pw.`category_id`
	    WHERE p.id = :id AND p.id = pw.practice_id";
	     
	    if(isset($weight)){
	    $query .= " AND pw.weight = :weight";
	    $p = DB::select(DB::raw($query), array('id' => $id, 'weight' => $weight));
	    } else{
	    $p = DB::select(DB::raw($query), array('id' => $id));
	    }*/
	    
	    $p = ($id) ? Practice::where('id', '=', $id)->first() : Practice::all();
	    return View::make('index', array('practices' => $p, 'id' => $id));
	}
	
	public function content($id = null, $weight = null)
	{
	    if($id){
	        // get rand posted content 
	        $c = SocialmediaContent::orderBy(DB::raw('RAND()'))->where('category_id', '=', $id)->first();
	    }
	    
	    return View::make('content', array('content' => $c));
	    
	}

}