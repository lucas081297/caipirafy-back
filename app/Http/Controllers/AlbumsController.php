<?php

namespace App\Http\Controllers;

use App\Models\Albums;
use Illuminate\Http\Request;


class AlbumsController extends Controller
{
    public function listAll() {
        $allAlbums = Albums::all();
        return response()->json($allAlbums, 200);
    }

    public function listOne(Request $req) {
        $album = Albums::find($req->id);
        return response()->json($album, 200);
    }

    public function createAlbum(Request $req) {
        $newAlbum = new Albums();
        $newAlbum->name = $req->input('name');
        $newAlbum->price = $req->input('price');
        $newAlbum->release_date = $req->input('release_date');
        $newAlbum->save();
        return response()->json($newAlbum);

    }

    public function updateAlbum(Request $req) {
        $album = Albums::find($req->input('id'));
        $album->update($req->all());
        return response()->json($album);
    }

    public function deleteAlbum(Request $req) {
        Albums::destroy($req->input('id'));
        return response('',200);
    }

    public function searchAlbum(Request $req){
        return Albums::where('name','like','%'.$req->name.'%')->get();
    }

}
