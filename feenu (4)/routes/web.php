<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\GameController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CommentsController;
use App\Http\Controllers\User\FrontController;
use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\User\FrontgameController;
use App\Http\Controllers\User\CategoriesController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\FUsersController;
use App\Http\Controllers\User\ChangePwdController;
use App\Http\Controllers\User\FAboutController;
use App\Http\Controllers\User\FPrivacyController;
use App\Http\Controllers\User\FDmcaController;
use App\Http\Controllers\User\FPolicyController;
use App\Http\Controllers\User\FCookiesController;
use App\Http\Controllers\User\FSitemapController;
use App\Http\Controllers\User\FGameController;
use App\Http\Controllers\User\FCommentController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [FrontController::class, 'index'])->name('frontend-index');
Route::get('games/{gameId}', [FGameController::class, 'gameDetail'])->name('game-detail');
Route::get('about', [FAboutController::class, 'about'])->name('about');
Route::get('privacy', [FPrivacyController::class, 'privacy'])->name('privacy');
Route::get('dmca', [FDmcaController::class, 'dmca'])->name('dmca');
Route::get('policy', [FPolicyController::class, 'policy'])->name('policy');
Route::get('cookies', [FCookiesController::class, 'cookies'])->name('cookies');
Route::get('sitemap', [FSitemapController::class, 'sitemap'])->name('sitemap');
Route::get('login', [LoginController::class, 'login'])->name('frontend.login');
Route::get('feenu/login', [AdminController::class, 'login'])->name('admin.login');
Route::group(['prefix' => 'feenu','as'=>'admin.', 'middleware' => ['auth','isAdmin']], function(){
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    // Route::get('profile', [UserController::class, 'profile'])->name('admin.profile');
    Route::get('categories', [CategoryController::class, 'categories'])->name('categories');
    Route::match(['get','post'],'categories/add', [CategoryController::class, 'addCategory'])->name('categories-add');
    Route::match(['get','post'],'categories/{categoryId}', [CategoryController::class, 'editCategory'])->name('categories-edit');
    Route::match(['get','post'],'categories/delete/{categoryId}', [CategoryController::class, 'deleteCategory'])->name('categories-delete');
    Route::get('tags', [TagController::class, 'tags'])->name('tags');
    Route::match(['get','post'],'tags/add', [TagController::class, 'addTag'])->name('tags-add');
    Route::match(['get','post'],'tags/{tagId}', [TagController::class, 'editTag'])->name('tags-edit');
    Route::match(['get','post'],'tags/delete/{tagId}', [TagController::class, 'deleteTag'])->name('tags-delete');
    Route::get('games', [GameController::class, 'games'])->name('games');
    Route::match(['get','post'],'games/add', [GameController::class, 'addGame'])->name('games-add');
    Route::match(['get','post'],'games/{gameId}', [GameController::class, 'editGame'])->name('games-edit');
    Route::match(['get','post'],'games/delete/{gameId}', [GameController::class, 'deleteGame'])->name('games-delete');
    Route::get('users', [UserController::class, 'users'])->name('users');
    Route::post('users/status/update', [UserController::class, 'updateUserStatus'])->name('users-status-update');
    Route::get('about', [AboutController::class, 'about'])->name('about');
    Route::match(['get','post'],'about/add', [AboutController::class, 'addabout'])->name('about-add');
    Route::match(['get','post'],'about/{id}', [AboutController::class, 'editabout'])->name('about-edit');
    Route::match(['get','post'],'about/delete/{id}', [AboutController::class, 'deleteabout'])->name('about-delete');
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::get('/admin/profile/edit', [AdminController::class, 'AdminProfileEdit'])->name('admin.profile.edit');
    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('admin.update.password');

    Route::get('comments', [CommentsController::class, 'comments'])->name('comments');
});

Route::group(['middleware' => ['auth','isUser']], function(){
    Route::get('dashboard', [FrontController::class, 'dashboard'])->name('dashboard');
    Route::get('categoris', [CategoriesController::class, 'categories']);
    Route::get('profile', [ProfileController::class, 'profile'])->name('profile');
    Route::get('editprofile', [ProfileController::class, 'editprofile'])->name('editprofile');
    Route::get('changepassword', [ChangePwdController::class, 'changepassword'])->name('changepassword');
    Route::get('users', [FUserController::class, 'users'])->name('users');
    Route::post('save-comment', [FCommentController::class, 'saveComment'])->name('save-comment');
    Route::post('update-favorite-status', [FCommentController::class, 'updateFavoriteStatus'])->name('update-favorite-status');
    Route::post('update-like-status', [FCommentController::class, 'updateLikeStatus'])->name('update-like-status');


    // Route::match(['get','post'],'profile/{id}', [FUsersController::class, 'editprofile'])->name('frontend.editprofile');

});


require __DIR__.'/auth.php';
