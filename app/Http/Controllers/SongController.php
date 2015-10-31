<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;
use Illuminate\Database\Eloquent\Model;
use App\Songs;

class SongController extends Controller
{
    private $songs;
    public function __constructs(Songs $songs){
        $this->songs= $songs;
    }

    public function index(){

        return view('pages.index')
                ->with('songs', $this->getSongs());
    }

    public function show($slug){

        $song= Songs::where('slug', $slug)
            ->first();

        return view('pages.details')
                ->with('song', $song);
    }

    private function getSongs(){
        return Songs::get();
    }

    public function edit($slug){
        
        $song= Songs::whereSlug($slug)->first();
        return view('pages.edit', compact('song'));
    
        
    }
    
}
