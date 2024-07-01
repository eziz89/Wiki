<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\RevisionController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\GroupMemberController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('articles', [ArticleController::class, 'index'])->name('articles.index');
Route::post('articles', [ArticleController::class, 'store'])->name('articles.store');
Route::get('articles/{id}', [ArticleController::class, 'show'])->name('articles.show');
Route::put('articles/{id}', [ArticleController::class, 'update'])->name('articles.update');
Route::delete('articles/{id}', [ArticleController::class, 'destroy'])->name('articles.destroy');
Route::get('article-titles', [ArticleController::class, 'titles'])->name('articles.titles');
Route::get('published-articles', [ArticleController::class, 'published'])->name('articles.published');

Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
Route::post('categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('categories/{id}', [CategoryController::class, 'show'])->name('categories.show');
Route::put('categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
Route::get('category-names', [CategoryController::class, 'names'])->name('categories.names');
Route::get('active-categories', [CategoryController::class, 'active'])->name('categories.active');

Route::get('tags', [TagController::class, 'index'])->name('tags.index');
Route::post('tags', [TagController::class, 'store'])->name('tags.store');
Route::get('tags/{id}', [TagController::class, 'show'])->name('tags.show');
Route::put('tags/{id}', [TagController::class, 'update'])->name('tags.update');
Route::delete('tags/{id}', [TagController::class, 'destroy'])->name('tags.destroy');
Route::get('tag-names', [TagController::class, 'names'])->name('tags.names');
Route::get('popular-tags', [TagController::class, 'popular'])->name('tags.popular');

Route::get('comments', [CommentController::class, 'index'])->name('comments.index');
Route::post('comments', [CommentController::class, 'store'])->name('comments.store');
Route::get('comments/{id}', [CommentController::class, 'show'])->name('comments.show');
Route::put('comments/{id}', [CommentController::class, 'update'])->name('comments.update');
Route::delete('comments/{id}', [CommentController::class, 'destroy'])->name('comments.destroy');
Route::get('latest-comments', [CommentController::class, 'latest'])->name('comments.latest');

Route::get('revisions', [RevisionController::class, 'index'])->name('revisions.index');
Route::post('revisions', [RevisionController::class, 'store'])->name('revisions.store');
Route::get('revisions/{id}', [RevisionController::class, 'show'])->name('revisions.show');
Route::put('revisions/{id}', [RevisionController::class, 'update'])->name('revisions.update');
Route::delete('revisions/{id}', [RevisionController::class, 'destroy'])->name('revisions.destroy');
Route::get('recent-revisions', [RevisionController::class, 'recent'])->name('revisions.recent');

Route::get('likes', [LikeController::class, 'index'])->name('likes.index');
Route::post('likes', [LikeController::class, 'store'])->name('likes.store');
Route::get('likes/{id}', [LikeController::class, 'show'])->name('likes.show');
Route::put('likes/{id}', [LikeController::class, 'update'])->name('likes.update');
Route::delete('likes/{id}', [LikeController::class, 'destroy'])->name('likes.destroy');
Route::get('popular-likes', [LikeController::class, 'popular'])->name('likes.popular');

Route::get('groups', [GroupController::class, 'index'])->name('groups.index');
Route::post('groups', [GroupController::class, 'store'])->name('groups.store');
Route::get('groups/{id}', [GroupController::class, 'show'])->name('groups.show');
Route::put('groups/{id}', [GroupController::class, 'update'])->name('groups.update');
Route::delete('groups/{id}', [GroupController::class, 'destroy'])->name('groups.destroy');
Route::get('group-names', [GroupController::class, 'names'])->name('groups.names');
Route::get('active-groups', [GroupController::class, 'active'])->name('groups.active');

Route::get('group-members', [GroupMemberController::class, 'index'])->name('group-members.index');
Route::post('group-members', [GroupMemberController::class, 'store'])->name('group-members.store');
Route::get('group-members/{id}', [GroupMemberController::class, 'show'])->name('group-members.show');
Route::put('group-members/{id}', [GroupMemberController::class, 'update'])->name('group-members.update');
Route::delete('group-members/{id}', [GroupMemberController::class, 'destroy'])->name('group-members.destroy');
Route::get('group-members/{groupId}', [GroupMemberController::class, 'byGroup'])->name('group-members.byGroup');

Route::get('users', [UserController::class, 'index'])->name('users.index');
Route::post('users', [UserController::class, 'store'])->name('users.store');
Route::get('users/{id}', [UserController::class, 'show'])->name('users.show');
Route::put('users/{id}', [UserController::class, 'update'])->name('users.update');
Route::delete('users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
Route::get('user-emails', [UserController::class, 'emails'])->name('users.emails');
Route::get('active-users', [UserController::class, 'active'])->name('users.active');
