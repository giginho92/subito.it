<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Http\Requests\AnnouncementsRequest;

class AnnouncementsController extends Controller
{
    public function announcements_create(){
        return view('announcements_create');
    }

    public function announcements_store(AnnouncementsRequest $request){
        $announcement = Announcement::create([
            'name'=>$request->name,
            'price'=>$request->price,
            'category'=>$request->category,
            // 'img'=>$request->file('img')->store('public/articles/img')
        ]);

        if($request->img){
            $announcement->img = $request->file('img')->store('public/articles/img');
            $announcement->save();
        }
        return redirect(route('announcements_show'));


    }

    public function announcements_show(){
        $announcements = Announcement::all();
        return view('announcements_show', compact('announcements'));
    }

}

