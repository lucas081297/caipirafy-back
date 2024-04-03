<?php

namespace App\Http\Controllers;
use App\Models\Tracks;
use Illuminate\Http\Request;

class TracksController extends Controller
{
    public function listAll() {
        $allTracks = Tracks::all();
        return response()->json($allTracks, 200);
    }

    public function listOne(Request $req) {
        $track = Tracks::find($req->id);
        return response()->json($track, 200);

    }

    public function createTrack(Request $req) {
        $newTrack = new Tracks();
        $newTrack->name = $req->input('name');
        $newTrack->release_date = $req->input('release_date');
        $newTrack->album_id = $req->input('album_id');
        $newTrack->save();
        return response()->json($newTrack);

    }

    public function updateTrack(Request $req) {
        $track = Tracks::find($req->input('id'));
        if($req->input('name') != ''){
            $track->update($req->only('name'));
        }
        if($req->input('release_date') != ''){
            $track->update($req->only('release_date'));
        }
        if($req->input('album_id') != ''){
            $track->update($req->only('album_id'));
        }
        try{
            $track->update($req->all());
            return response()->json($track);
        }
        catch (\Exception $err){
            return response()->json($err);
        }
    }

    public function deleteTrack(Request $req) {
        Tracks::destroy($req->input('id'));
        return response($req->input('id'),200);
    }

    public function searchTrack(Request $req){
        return Tracks::where('name','like','%'.$req->name.'%')->get();
    }
}
