<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Category;

class FrontController extends Controller
{
    public function index(Request $request){

        $categoryId = $request->categoryId;
        $category = Category::where('category_id',$categoryId)->first();
        if(empty($category))
            $games = Game::orderBy('game_id','DESC')->get();
        else
            $games = Game::where('category_id',$categoryId)->orderBy('game_id','DESC')->get();
        return view('frontend.index',['games'=>$games]);
    }

    public function dashboard(){

        return view('user.dashboard');
    }

}
