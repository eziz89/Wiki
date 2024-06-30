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

Route::get('articles', [ArticleController::class, 'index']);
Route::post('articles', [ArticleController::class, 'store']);
Route::get('articles/{id}', [ArticleController::class, 'show']);
Route::put('articles/{id}', [ArticleController::class, 'update']);
Route::delete('articles/{id}', [ArticleController::class, 'destroy']);
Route::get('article-titles', [ArticleController::class, 'titles']);
Route::get('published-articles', [ArticleController::class, 'published']);

Route::get('categories', [CategoryController::class, 'index']);
Route::post('categories', [CategoryController::class, 'store']);
Route::get('categories/{id}', [CategoryController::class, 'show']);
Route::put('categories/{id}', [CategoryController::class, 'update']);
Route::delete('categories/{id}', [CategoryController::class, 'destroy']);
Route::get('category-names', [CategoryController::class, 'names']);
Route::get('active-categories', [CategoryController::class, 'active']);

Route::get('tags', [TagController::class, 'index']);
Route::post('tags', [TagController::class, 'store']);
Route::get('tags/{id}', [TagController::class, 'show']);
Route::put('tags/{id}', [TagController::class, 'update']);
Route::delete('tags/{id}', [TagController::class, 'destroy']);
Route::get('tag-names', [TagController::class, 'names']);
Route::get('popular-tags', [TagController::class, 'popular']);

Route::get('comments', [CommentController::class, 'index']);
Route::post('comments', [CommentController::class, 'store']);
Route::get('comments/{id}', [CommentController::class, 'show']);
Route::put('comments/{id}', [CommentController::class, 'update']);
Route::delete('comments/{id}', [CommentController::class, 'destroy']);
Route::get('latest-comments', [CommentController::class, 'latest']);

Route::get('revisions', [RevisionController::class, 'index']);
Route::post('revisions', [RevisionController::class, 'store']);
Route::get('revisions/{id}', [RevisionController::class, 'show']);
Route::put('revisions/{id}', [RevisionController::class, 'update']);
Route::delete('revisions/{id}', [RevisionController::class, 'destroy']);
Route::get('recent-revisions', [RevisionController::class, 'recent']);

Route::get('likes', [LikeController::class, 'index']);
Route::post('likes', [LikeController::class, 'store']);
Route::get('likes/{id}', [LikeController::class, 'show']);
Route::put('likes/{id}', [LikeController::class, 'update']);
Route::delete('likes/{id}', [LikeController::class, 'destroy']);
Route::get('popular-likes', [LikeController::class, 'popular']);

Route::get('groups', [GroupController::class, 'index']);
Route::post('groups', [GroupController::class, 'store']);
Route::get('groups/{id}', [GroupController::class, 'show']);
Route::put('groups/{id}', [GroupController::class, 'update']);
Route::delete('groups/{id}', [GroupController::class, 'destroy']);
Route::get('group-names', [GroupController::class, 'names']);
Route::get('active-groups', [GroupController::class, 'active']);

Route::get('group-members', [GroupMemberController::class, 'index']);
Route::post('group-members', [GroupMemberController::class, 'store']);
Route::get('group-members/{id}', [GroupMemberController::class, 'show']);
Route::put('group-members/{id}', [GroupMemberController::class, 'update']);
Route::delete('group-members/{id}', [GroupMemberController::class, 'destroy']);
Route::get('group-members/{groupId}', [GroupMemberController::class, 'byGroup']);

Route::get('users', [UserController::class, 'index']);
Route::post('users', [UserController::class, 'store']);
Route::get('users/{id}', [UserController::class, 'show']);
Route::put('users/{id}', [UserController::class, 'update']);
Route::delete('users/{id}', [UserController::class, 'destroy']);
Route::get('user-emails', [UserController::class, 'emails']);
Route::get('active-users', [UserController::class, 'active']);

