<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feed;

class FeedsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feeds = Feed::orderBy('created_at', 'desc')->paginate(10);
        return view('feeds.index')->with('feeds', $feeds);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('feeds.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        $feed = new Feed;
        $feed->title = $request->input('title');
        $feed->body = $request->input('body');
        $feed->user_id = auth()->user()->id;
        $feed->save();

        return redirect('/feeds')->with('success', 'Feed Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $feed =  Feed::find($id);
        return view('feeds.show')->with('feed', $feed);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $feed =  Feed::find($id);
        if(auth()->user()->id !==$feed->user_id){
            return redirect('/feeds')->with('error', 'Unauthorized Page');
        }
        return view('feeds.edit')->with('feed', $feed);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        $feed = Feed::find($id);
        $feed->title = $request->input('title');
        $feed->body = $request->input('body');
        $feed->save();

        return redirect('/feeds')->with('success', 'Feed Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feed = Feed::find($id);
        $feed->delete();
        return redirect('/feeds')->with('success', 'Feed Removed');
    }
}
