@extends('frontend.Layouts.main')
@section('main')
    <div class="container">
        <div class="row gr">
            <div class="col-md-3">
                <div class="nit-content g1">
                    <ul>
                        <li>
                            <div class="nit-ads"><a href="#"><img src="{{ url('frontend/images/more/ads-600.jpg') }}"
                                        alt=""></a></div>
                        </li>

                        @foreach ($newGames as $newGame)
                            <li class="newGame"><a href="{{ route('game-detail', ['gameId' => $newGame->game_id]) }}"><img
                                        src="{{ asset($newGame->game_thumb) }}" alt="">
                                    <figcaption>{{ $newGame->shortName() }}</figcaption>
                                </a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="nit-main">
                    <div class="main-game-content">
                        <div class="video-box">
                            <figure id="myvideo">
                                <div class="frame-container">   
                                        {{-- <img src="{{url('frontend/images/more/v1.png')}}" width="100%"> --}}
                                    
                                        <button onclick="navigate()" class="btn">
                                            <figcaption><a href="{{ $game->ifame_url }}" target="iframe_a" class="btn" >Play Game</a>
                                                <h2>{{ $game->name }}</h2>
                                            </figcaption>
                                    </button>
                                    <iframe scrolling="auto" allowtransparency="true" name="iframe_a" 
                                    style="width:100%;height:550px;background:url({{ asset($game->game_thumb) }}) no-repeat center center; 
                                        -webkit-background-size: cover;
                                        -moz-background-size: cover;
                                        -o-background-size: cover;
                                        background-size: cover;"> 
                                    </iframe>
                                </div>
                               
                            </figure>
                        </div>
                        <div class="nit-flex jcsb">
                            <div class="logo"><img src="{{ url('frontend/images/logo/logo.png') }}" alt="">
                            </div>
                            <div onclick="openFullscreen();" class="zoom-icon"><img
                                    src="{{ url('frontend/images/icons/zoom-icon.png') }}" alt=""></div>
                        </div>
                        <div class="nit-footer">
                            <div class="nit-flex">
                                <h2>{{ $game->name }}</h2>
                                <div class="so">
                                    <ul>
                                        @php
                                            if(is_null($likeStatus)){
                                                $likeBtnClass = 'far';
                                                $dislikeBtnClass = 'far';
                                            }else{
                                                if($likeStatus == 0){
                                                    $likeBtnClass = 'far';
                                                    $dislikeBtnClass = 'fas';
                                                }else{
                                                    $likeBtnClass = 'fas';
                                                    $dislikeBtnClass = 'far';
                                                }
                                            }

                                        @endphp
                                        <li class="favorite-btn" data-url="{{route('update-favorite-status')}}"  data-game-id="{{$game->game_id}}" data-favorite-status=@if($favoriteStatus) "0" @else "1" @endif><i class="@if($favoriteStatus) fas @else far @endif fa-heart" style="color: red;cursor: pointer;" ></i></li>
                                        <li class="like-dislike-btn like-btn" data-url="{{route('update-like-status')}}"  data-game-id="{{$game->game_id}}" data-like-status="1"><i class="{{$likeBtnClass}} fa-thumbs-up" style="cursor: pointer;"></i><span>{{$game->likeCount()}}</span></li>
                                        <li class="like-dislike-btn dislike-btn" data-url="{{route('update-like-status')}}"  data-game-id="{{$game->game_id}}" data-like-status="0"><i class="{{$dislikeBtnClass}} fa-thumbs-down" style="cursor: pointer;"></i><span>{{$game->dislikeCount()}}</span></li>
                                        <div class="shareBox">
                                             
                                            <button onclick="myFunction()" id="myBtn">share<i class="fa fa-share" style="font-size:14px;color:rgb(22, 189, 97)"></i></button>
                                            <ul><span id="dots"></span><span id="more"><a href="#" class="fab fa-facebook"></a>
                                                <a href="#" class="fab fa-twitter"></a>
                                                    <a href="#" class="fab fa-google"></a>
                                                        <a href="#" class="fab fa-linkedin"></a>
                                                           <a href="#" class="fab fa-youtube"></a>
                                                          <a href="#" class="fab fa-instagram"></a></span>
                                            </ul>
                                        </div
                                    </ul>
                                </div>
                                <div class="rating">
                                    <ul>
                                        <li class="active"><i class="fas fa-star"></i></li>
                                        <li class="active"><i class="fas fa-star"></i></li>
                                        <li class="active"><i class="fas fa-star"></i></li>
                                        <li class="active"><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ads"><a href="#"><img src="{{ url('frontend/images/more/ads3.png') }}"
                                class="tni" alt=""></a></div>
                    <div class="nit-dis">
                        <div class="nit-flex jcsb">
                            <div class="btn-box">
                                <a href="#">shooting</a>
                                <a href="#">race</a>
                                <a href="#">online game</a>
                            </div>
                            <div class="app-box">
                                <a href="{{$game->app_store_link}}"><img src="{{url('frontend/images/icons/apple.png')}}" alt=""></a>
                                <a href="{{$game->google_store_link}}"><img src="{{url('frontend/images/icons/google-play.png')}}" alt=""></a>
                             
                            </div>
                        </div>
                        <div class="dis-box">
                            <h1>Description</h1>
                            <div class="con">
                                <p>{{$game->description}} <a>show less</a></p>
                            </div>
                            <div class="row">
                                <div class="col-md-5 mr-auto">
                                    <h1>How to play</h1>
                                    <p>{{$game->how_to_play}} </p>
                                </div>
                                <div class="col-md-5 ml-auto">
                                    <h1>Walkthrough Video</h1>
                                    <div class="nit-video"><iframe src="{{$game->walk_through_link}}" width="100%" height="200" style="border:none;">
                                    </iframe></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nit-dis">

                        <div class="dis-box-comment">
                            <h1>User Comments</h1>
                            @foreach ($comments as $comment)
                                <div class="btn-box-comment">
                                    <a><img src="{{ url('frontend/images/more/user_profile_images.png') }}"></a>
                                    <a>
                                        <h1>{{ $comment->user->name }}</h1>
                                    </a>
                                    <p>{{ $comment->comment }}</p>
                                    <p><a href="javascript:void(0)" class="reply-comment text-dark" data-comment-id="{{$comment->comment_id}}" data-game-id="{{$game->game_id}}">Reply <i class='fa fa-reply' style='font-size:12px;color:rgb(8, 163, 73)'></i></a></p>
                                </div>
                                @foreach ($comment->replyComment() as $replyComment)
                                    <div class="btn-box-comment pl-4">
                                        <a><img src="{{ url('frontend/images/more/user_profile_images.png') }}"></a>
                                        <a>
                                            <h1>{{ $replyComment->user->name }}</h1>
                                        </a>
                                        <p>{{ $replyComment->comment }}</p>
                                    </div>
                                @endforeach
                            @endforeach
                            <div class="box-comment-des">
                                <form id="save-comment-form" action="{{ route('save-comment') }}" method="POST">
                                    <input type="hidden" id="gameId" name="gameId" value="{{ $game->game_id }}">
                                    <textarea class="form-control" id="comment" name="comment" rows="6" cols="50" placeholder="Comment"
                                        required></textarea>
                                    <input class="input-color" type="submit" value="Submit">
                                </form>
                            </div>
                        </div>

                    </div>
                    @if (!Auth::check())
                        <div class="nit-comment">
                            <div>Please<a href="#"> Login </a>To Comment</div>
                        </div>
                    @endif
                </div>


                <div class="nit-related">
                    <h1>related games</h1>
                    <div class="owl-carousel related-carousel1 owl-theme">
                        @foreach ($relatedGames as $relatedGame)
                            <div class="item">
                                <ul>
                                    <li><a href="{{ route('game-detail', ['gameId' => $relatedGame->game_id]) }}"><img
                                                src="{{ asset($relatedGame->game_thumb) }}" alt="">
                                            <figcaption>{{ $relatedGame->shortName() }}</figcaption>
                                        </a></li>
                                </ul>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <div class="nit-content g1 g2">
                    <ul>
                        <li>
                            <div class="nit-ads">
                                <a href="#"><img src="{{ url('frontend/images/more/ads.png') }}"alt=""></a>
                            </div>
                        </li>
                        @foreach ($relatedGames as $relatedGame)
                            <li>
                                <a href="{{ route('game-detail', ['gameId' => $relatedGame->game_id]) }}">
                                    <img src="{{ asset($relatedGame->game_thumb) }}" alt="">
                                    <figcaption>{{ $relatedGame->shortName() }}</figcaption>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- reply comment Modal -->
   <div class="modal fade" id="replyCommntModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Reply</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="save-reply-comment-form" action="{{ route('save-comment') }}" method="POST">
                    <div class="modal-body">
                        <input type="hidden" id="parentCommentId" name="gameId" value="">
                        <input type="hidden" id="replyGameId" name="gameId" value="">
                        <textarea class="form-control" id="replyComment" name="replyComment" rows="6" cols="50" placeholder="Comment" required></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary ">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
