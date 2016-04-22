<?php

namespace CodeTalk\Http\Controllers;

use Illuminate\Http\Request;

use CodeTalk\Http\Requests;

class TestController extends Controller
{
    public function store(Request $request)
    {
	    $this->validate($request, [
		    'title' => 'required|unique:posts|max:255',
		    'body' => 'required',
	    ]);
    }
}
