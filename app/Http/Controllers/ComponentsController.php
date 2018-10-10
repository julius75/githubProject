<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentsController extends Controller
{
    //get contents
    public function contents($repo){
        return view('github.repo_content',compact('repo'));

    }
    //create new repository
    public function index(){
        $user=Auth::user();
        return view('github.new_repository', compact('user'));
    }
    //get commits
    public function commits($repo){
        return view('github.commits',compact('repo'));
    }
    //edit
    public function edit($repo){
        return view('github.edit_repository',compact('repo'));
    }


    //get branches of a repo


}
