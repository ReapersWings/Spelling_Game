<?php

namespace App\Http\Controllers;

use App\Models\mini_game_answers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class mini_game_controller extends Controller
{
    public function view(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return view('nickname');
    }
    public function viewgame(){
        return view('game');
    }
    public function history(){
        
        return view('history',['data'=>User::orderBy('record','desc')->get()]);
    }
    public function insert(Request $request){
        $data=User::create(['name'=>$request->name,'record'=>0]);
        Auth::login($data);
        return redirect()->route('game');
    }
    public function update(Request $request){
        User::where('id',Auth::user()->id)->update(['record'=>$request->record]);
        return redirect()->route('history');
    }
}
