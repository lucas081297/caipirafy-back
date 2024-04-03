<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TracksController;
use App\Http\Controllers\AlbumsController;

Route::get('/albums',[AlbumsController::class,'listAll']);
Route::get('/albums/{id}',[AlbumsController::class,'listOne']);
Route::post('/albums/new',[AlbumsController::class,'createAlbum']);
Route::patch('/albums/edit',[AlbumsController::class,'updateAlbum']);
Route::delete('/albums/delete',[AlbumsController::class,'deleteAlbum']);
Route::get('/albums/search/{name}',[AlbumsController::class,'searchAlbum']);

Route::get('/tracks',[TracksController::class,'listAll']);
Route::get('/tracks/{id}',[TracksController::class,'listOne']);
Route::post('/tracks/new',[TracksController::class,'createTrack']);
Route::patch('/tracks/edit',[TracksController::class,'updateTrack']);
Route::delete('/tracks/delete',[TracksController::class,'deleteTrack']);
Route::get('/tracks/search/{name}',[TracksController::class,'searchTrack']);
