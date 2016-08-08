<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\boxscore;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class boxscoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $boxscore = boxscore::paginate(15);

        return view('boxscore.index', compact('boxscore'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('boxscore.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        
        boxscore::create($request->all());

        Session::flash('flash_message', 'boxscore added!');

        return redirect('boxscore');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function show($id)
    {
        $boxscore = boxscore::findOrFail($id);

        return view('boxscore.show', compact('boxscore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function edit($id)
    {
        $boxscore = boxscore::findOrFail($id);

        return view('boxscore.edit', compact('boxscore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function update($id, Request $request)
    {
        
        $boxscore = boxscore::findOrFail($id);
        $boxscore->update($request->all());

        Session::flash('flash_message', 'boxscore updated!');

        return redirect('boxscore');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function destroy($id)
    {
        boxscore::destroy($id);

        Session::flash('flash_message', 'boxscore deleted!');

        return redirect('boxscore');
    }
}
