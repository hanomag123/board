<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Bbs;
use Illuminate\Http\Request;

class BbsController extends Controller
{
    public function index() {
        $posts = Bbs::all();
        return view('main', compact('posts'));
    }

    public function show($slug) {
        $post = Bbs::where('slug', $slug)->first();

        if ($post) {
            return view('detail', compact('post'));
        } else {
            abort(404);
        }
    }
};
