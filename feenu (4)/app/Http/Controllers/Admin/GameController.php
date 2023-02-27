<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Game;

class GameController extends Controller
{
    public function games(){

        $games = Game::orderBy('game_id','DESC')->get();
        // dd($games);
        return view('admin.games',['games'=>$games]);
    }

    public function addGame(Request $request){

        if ($request->isMethod('post')) {
            // dd($request->tags);
            $name = $request->name;
            $categoryId = $request->category;
            $ifameUrl = $request->ifame_url;
            $tags = $request->tags;

            $gameThumb = $request->file('game_thumb');
            $gameThumbPath = "";
            if(!empty($gameThumb)){
                $gameThumbDestinationPath = 'images/game-thumb';
                $gameThumbFileName = str_replace(' ','_',$name).'_thumb_'.strtotime(now()).'.'.$gameThumb->getClientOriginalExtension();
                $gameThumb->move($gameThumbDestinationPath,$gameThumbFileName);
                $gameThumbPath = $gameThumbDestinationPath."/".$gameThumbFileName;
            }

            $game = new Game();
            $game->name = $name;
            $game->game_thumb = $gameThumbPath;
            $game->category_id = $categoryId;
            $game->ifame_url = $ifameUrl;
            $game->tags = implode(',',$tags);
            $game->save();
            return redirect()->route('admin.games');
        }
        $categories = Category::orderBy('category_id','DESC')->get();
        $tags = Tag::orderBy('name','DESC')->get();
        return view('admin.games_add',['categories'=>$categories, 'tags'=>$tags]);
    }

    public function editGame($gameId, Request $request){

        $game = Game::where('game_id',$gameId)->first();
        if(empty($game))
            abort(404);

        if ($request->isMethod('post')) {
            $name = $request->name;
            $gameThumb = $request->file('game_thumb');
            if(!empty($gameThumb)){
                $gameThumbDestinationPath = 'images/game-thumb';
                $gameThumbFileName = str_replace(' ','_',$name).'_thumb_'.strtotime(now()).'.'.$gameThumb->getClientOriginalExtension();
                $gameThumb->move($gameThumbDestinationPath,$gameThumbFileName);
                $gameThumbPath = $gameThumbDestinationPath."/".$gameThumbFileName;
                $game->game_thumb = $gameThumbPath;
            }
            $categoryId = $request->category;
            $ifameUrl = $request->ifame_url;
            $tags = $request->tags;

            $game->name = $name;
            $game->category_id = $categoryId;
            $game->ifame_url = $ifameUrl;
            $game->tags = implode(',',$tags);
            $game->save();
            return redirect()->route('admin.games');
        }
        $categories = Category::orderBy('category_id','DESC')->get();
        $tags = Tag::orderBy('tag_id','DESC')->get();
        return view('admin.games_add',['game'=>$game,'categories'=>$categories, 'tags'=>$tags]);
    }

    public function deleteGame($gameId, Request $request){

        $game = Game::where('game_id',$gameId)->first();
        if(empty($game))
            abort(404);

        $game->delete();
        return redirect()->route('admin.games');

    }
}
