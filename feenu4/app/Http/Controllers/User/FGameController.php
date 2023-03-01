<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Game;
use App\Models\Comment;
use App\Models\UserFavoriteGame;
use App\Models\UserLikedDislikedGames;

class FGameController extends Controller
{
    public function gameDetail($gameId, Request $request){

        $user = Auth::user();
        $game = Game::where('game_id',$gameId)->first();
        if(empty($game))
            abort(404);

        $comments = Comment::where('game_id',$gameId)->where('parent_id',NULL)->orderBy('comment_id','DESC')->get();
        $categoryId = $game->category_id;
        $relatedGames = Game::where('category_id',$categoryId)->orderBy('game_id','DESC')->take(10)->get();
        $relatedGames1 = Game::where('category_id',$categoryId)->orderBy('game_id','DESC')->take(20)->get();
        $newGames = Game::orderBy('game_id','DESC')->take(10)->get();

        $favoriteStatus = 0;
        if(!empty($user)){
            $favoriteStatusObj = UserFavoriteGame::where('game_id',$gameId)->where('user_id',$user->id)->first();
            $favoriteStatus = empty($favoriteStatusObj) ? 0 : $favoriteStatusObj->favorite_status;
        }

        $likeStatus = NULL;
        if(!empty($user)){
            $likeStatusObj = UserLikedDislikedGames::where('game_id',$gameId)->where('user_id',$user->id)->first();
            $likeStatus = empty($likeStatusObj) ? 0 : $likeStatusObj->like_status;
        }

        return view('frontend.game',[
            'game'=>$game,
            'relatedGames'=>$relatedGames,
            'relatedGames1'=>$relatedGames1,
            'newGames'=>$newGames,
            'comments'=>$comments,
            'favoriteStatus'=>$favoriteStatus,
            'likeStatus'=>$likeStatus
        ]);
    }
}
