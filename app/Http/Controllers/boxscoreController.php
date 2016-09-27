<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\boxscore;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Validator;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;
use Auth;

use \App;
use Illuminate\Support\Facades\DB;

class boxscoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $user=Auth::id();

      //  $boxscores = boxscore::paginate(15);

        $boxscores =boxscore::orderBy('datey', 'desc')->paginate(15);

        return view('boxscores.index', compact('boxscores', 'user'));
    }

    public function file_export()
    {

        //export user posts
        //$scores = boxscore::get();

       // $scores = boxscore::select('select * from boxscores');

        $scores = boxscore::all();
        //$scores = boxscore::all();

//export all posts for super user
//        $posts = Post::select('user_id', 'title', 'subhead','body','imgpath', 'created_at')->get();
        set_time_limit(0);
        ini_set('memory_limit', '1G');

        Excel::create('blog-posts', function($excel) use($scores) {
            $excel->sheet('Blazers', function($sheet) use($scores) {
                $sheet->fromArray($scores);
            });
        })->export('xls');


        return view('boxscores.file_export', compact('xls'));

    }

public function season_2015_2016(){

    $user=Auth::id();

    $season = boxscore::orderBy('datey', 'desc')->whereBetween('datey',array('2015-10-27','2016-07-01'))->paginate(10);

    return view('boxscores.season_2015_2016', compact('season', 'user'));
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

        return view('boxscores.show', compact('boxscore'));
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


    public function file_upload()
    {


        return view('boxscores.file_upload');

    }


    public function statsUploadCsv()
    {
        $rules = array(
//            'title' => 'required',
//            'subHead' => 'required',
//            'body' => 'required'

        );


        $validator = Validator::make(Input::all(), $rules);
        // process the form
        if ($validator->fails())
        {
            return Redirect::route(('boxscores.file_upload'))->withErrors($validator);
        }
        else
        {


            try {
                Excel::load(Input::file('csv-file'), function ($reader) {

                    foreach ($reader->toArray() as $row) {
                        boxscore::firstOrCreate($row);
                    }
                });
                \Session::flash('success', 'Users uploaded successfully.');
                return redirect(route('boxscores.index'));
            } catch (\Exception $e) {
                \Session::flash('error', $e->getMessage());
                return redirect(route('boxscores.index'));
            }

        }
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
