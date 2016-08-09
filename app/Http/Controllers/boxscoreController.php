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
        $boxscores = boxscore::paginate(15);

        return view('boxscores.index', compact('boxscores', 'user'));
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
                $csv_file =Excel::load(Input::file('csv-file'))->get();


                foreach($csv_file as $csv)
                {
                    $game_string=$csv->game_string;
                    $datey=$csv->datey;
                    $dashy_date=$csv->dashy_date;
                    $afname=$csv->afname;
                    $hfname=$csv->hfname;
                    $atotal=$csv->atotal;
                    $htotal=$csv->htotal;
                    $arena=$csv->arena;
                    $capacity=$csv->capacity;
                    $attendance=$csv->attendance;
                    $ref1=$csv->ref1;
                    $ref2=$csv->ref2;
                    $ref3=$csv->ref3;
                    $hp1_name=$csv->hp1_name;
                    $hp1_min=$csv->hp1_min;
                    $hp1_pts=$csv->hp1_pts;
                    $hp1_fgma=$csv->hp1_fgma;
                    $hp1_3pma=$csv->hp1_3pma;
                    $hp1_ftma=$csv->hp1_ftma;
                    $hp1_oreb=$csv->hp1_oreb;
                    $hp1_dreb=$csv->hp1_dreb;
                    $hp1_reb=$csv->hp1_reb;
                    $hp1_ast=$csv->hp1_ast;
                    $hp1_stl=$csv->hp1_stl;
                    $hp1_blk=$csv->hp1_blk;
                    $hp1_to=$csv->hp1_to;
                    $hp1_pf=$csv->hp1_pf;
                    $hp1_starter=$csv->hp1_starter;
                    $hp2_name=$csv->hp2_name;
                    $hp2_min=$csv->hp2_min;
                    $hp2_pts=$csv->hp2_pts;
                    $hp2_fgma=$csv->hp2_fgma;
                    $hp2_3pma=$csv->hp2_3pma;
                    $hp2_ftma=$csv->hp2_ftma;
                    $hp2_oreb=$csv->hp2_oreb;
                    $hp2_dreb=$csv->hp2_dreb;
                    $hp2_reb=$csv->hp2_reb;
                    $hp2_ast=$csv->hp2_ast;
                    $hp2_stl=$csv->hp2_stl;
                    $hp2_blk=$csv->hp2_blk;
                    $hp2_to=$csv->hp2_to;
                    $hp2_pf=$csv->hp2_pf;
                    $hp2_starter=$csv->hp2_starter;
                    $hp3_name=$csv->hp3_name;
                    $hp3_min=$csv->hp3_min;
                    $hp3_pts=$csv->hp3_pts;
                    $hp3_fgma=$csv->hp3_fgma;
                    $hp3_3pma=$csv->hp3_3pma;
                    $hp3_ftma=$csv->hp3_ftma;
                    $hp3_oreb=$csv->hp3_oreb;
                    $hp3_dreb=$csv->hp3_dreb;
                    $hp3_reb=$csv->hp3_reb;
                    $hp3_ast=$csv->hp3_ast;
                    $hp3_stl=$csv->hp3_stl;
                    $hp3_blk=$csv->hp3_blk;
                    $hp3_to=$csv->hp3_to;
                    $hp3_pf=$csv->hp3_pf;
                    $hp3_starter=$csv->hp3_starter;
                    $hp4_name=$csv->hp4_name;
                    $hp4_min=$csv->hp4_min;
                    $hp4_pts=$csv->hp4_pts;
                    $hp4_fgma=$csv->hp4_fgma;
                    $hp4_3pma=$csv->hp4_3pma;
                    $hp4_ftma=$csv->hp4_ftma;
                    $hp4_oreb=$csv->hp4_oreb;
                    $hp4_dreb=$csv->hp4_dreb;
                    $hp4_reb=$csv->hp4_reb;
                    $hp4_ast=$csv->hp4_ast;
                    $hp4_stl=$csv->hp4_stl;
                    $hp4_blk=$csv->hp4_blk;
                    $hp4_to=$csv->hp4_to;
                    $hp4_pf=$csv->hp4_pf;
                    $hp4_starter=$csv->hp4_starter;
                    $hp5_name=$csv->hp5_name;
                    $hp5_min=$csv->hp5_min;
                    $hp5_pts=$csv->hp5_pts;
                    $hp5_fgma=$csv->hp5_fgma;
                    $hp5_3pma=$csv->hp5_3pma;
                    $hp5_ftma=$csv->hp5_ftma;
                    $hp5_oreb=$csv->hp5_oreb;
                    $hp5_dreb=$csv->hp5_dreb;
                    $hp5_reb=$csv->hp5_reb;
                    $hp5_ast=$csv->hp5_ast;
                    $hp5_stl=$csv->hp5_stl;
                    $hp5_blk=$csv->hp5_blk;
                    $hp5_to=$csv->hp5_to;
                    $hp5_pf=$csv->hp5_pf;
                    $hp5_starter=$csv->hp5_starter;
                    $hp6_name=$csv->hp6_name;
                    $hp6_min=$csv->hp6_min;
                    $hp6_pts=$csv->hp6_pts;
                    $hp6_fgma=$csv->hp6_fgma;
                    $hp6_3pma=$csv->hp6_3pma;
                    $hp6_ftma=$csv->hp6_ftma;
                    $hp6_oreb=$csv->hp6_oreb;
                    $hp6_dreb=$csv->hp6_dreb;
                    $hp6_reb=$csv->hp6_reb;
                    $hp6_ast=$csv->hp6_ast;
                    $hp6_stl=$csv->hp6_stl;
                    $hp6_blk=$csv->hp6_blk;
                    $hp6_to=$csv->hp6_to;
                    $hp6_pf=$csv->hp6_pf;
                    $hp6_starter=$csv->hp6_starter;
                    $hp7_name=$csv->hp7_name;
                    $hp7_min=$csv->hp7_min;
                    $hp7_pts=$csv->hp7_pts;
                    $hp7_fgma=$csv->hp7_fgma;
                    $hp7_3pma=$csv->hp7_3pma;
                    $hp7_ftma=$csv->hp7_ftma;
                    $hp7_oreb=$csv->hp7_oreb;
                    $hp7_dreb=$csv->hp7_dreb;
                    $hp7_reb=$csv->hp7_reb;
                    $hp7_ast=$csv->hp7_ast;
                    $hp7_stl=$csv->hp7_stl;
                    $hp7_blk=$csv->hp7_blk;
                    $hp7_to=$csv->hp7_to;
                    $hp7_pf=$csv->hp7_pf;
                    $hp7_starter=$csv->hp7_starter;
                    $hp8_name=$csv->hp8_name;
                    $hp8_min=$csv->hp8_min;
                    $hp8_pts=$csv->hp8_pts;
                    $hp8_fgma=$csv->hp8_fgma;
                    $hp8_3pma=$csv->hp8_3pma;
                    $hp8_ftma=$csv->hp8_ftma;
                    $hp8_oreb=$csv->hp8_oreb;
                    $hp8_dreb=$csv->hp8_dreb;
                    $hp8_reb=$csv->hp8_reb;
                    $hp8_ast=$csv->hp8_ast;
                    $hp8_stl=$csv->hp8_stl;
                    $hp8_blk=$csv->hp8_blk;
                    $hp8_to=$csv->hp8_to;
                    $hp8_pf=$csv->hp8_pf;
                    $hp8_starter=$csv->hp8_starter;
                    $hp9_name=$csv->hp9_name;
                    $hp9_min=$csv->hp9_min;
                    $hp9_pts=$csv->hp9_pts;
                    $hp9_fgma=$csv->hp9_fgma;
                    $hp9_3pma=$csv->hp9_3pma;
                    $hp9_ftma=$csv->hp9_ftma;
                    $hp9_oreb=$csv->hp9_oreb;
                    $hp9_dreb=$csv->hp9_dreb;
                    $hp9_reb=$csv->hp9_reb;
                    $hp9_ast=$csv->hp9_ast;
                    $hp9_stl=$csv->hp9_stl;
                    $hp9_blk=$csv->hp9_blk;
                    $hp9_to=$csv->hp9_to;
                    $hp9_pf=$csv->hp9_pf;
                    $hp9_starter=$csv->hp9_starter;
                    $hp10_name=$csv->hp10_name;
                    $hp10_min=$csv->hp10_min;
                    $hp10_pts=$csv->hp10_pts;
                    $hp10_fgma=$csv->hp10_fgma;
                    $hp10_3pma=$csv->hp10_3pma;
                    $hp10_ftma=$csv->hp10_ftma;
                    $hp10_oreb=$csv->hp10_oreb;
                    $hp10_dreb=$csv->hp10_dreb;
                    $hp10_reb=$csv->hp10_reb;
                    $hp10_ast=$csv->hp10_ast;
                    $hp10_stl=$csv->hp10_stl;
                    $hp10_blk=$csv->hp10_blk;
                    $hp10_to=$csv->hp10_to;
                    $hp10_pf=$csv->hp10_pf;
                    $hp10_starter=$csv->hp10_starter;
                    $hp11_name=$csv->hp11_name;
                    $hp11_min=$csv->hp11_min;
                    $hp11_pts=$csv->hp11_pts;
                    $hp11_fgma=$csv->hp11_fgma;
                    $hp11_3pma=$csv->hp11_3pma;
                    $hp11_ftma=$csv->hp11_ftma;
                    $hp11_oreb=$csv->hp11_oreb;
                    $hp11_dreb=$csv->hp11_dreb;
                    $hp11_reb=$csv->hp11_reb;
                    $hp11_ast=$csv->hp11_ast;
                    $hp11_stl=$csv->hp11_stl;
                    $hp11_blk=$csv->hp11_blk;
                    $hp11_to=$csv->hp11_to;
                    $hp11_pf=$csv->hp11_pf;
                    $hp11_starter=$csv->hp11_starter;
                    $hp12_name=$csv->hp12_name;
                    $hp12_min=$csv->hp12_min;
                    $hp12_pts=$csv->hp12_pts;
                    $hp12_fgma=$csv->hp12_fgma;
                    $hp12_3pma=$csv->hp12_3pma;
                    $hp12_ftma=$csv->hp12_ftma;
                    $hp12_oreb=$csv->hp12_oreb;
                    $hp12_dreb=$csv->hp12_dreb;
                    $hp12_reb=$csv->hp12_reb;
                    $hp12_ast=$csv->hp12_ast;
                    $hp12_stl=$csv->hp12_stl;
                    $hp12_blk=$csv->hp12_blk;
                    $hp12_to=$csv->hp12_to;
                    $hp12_pf=$csv->hp12_pf;
                    $hp12_starter=$csv->hp12_starter;
                    $hp13_name=$csv->hp13_name;
                    $hp13_min=$csv->hp13_min;
                    $hp13_pts=$csv->hp13_pts;
                    $hp13_fgma=$csv->hp13_fgma;
                    $hp13_3pma=$csv->hp13_3pma;
                    $hp13_ftma=$csv->hp13_ftma;
                    $hp13_oreb=$csv->hp13_oreb;
                    $hp13_dreb=$csv->hp13_dreb;
                    $hp13_reb=$csv->hp13_reb;
                    $hp13_ast=$csv->hp13_ast;
                    $hp13_stl=$csv->hp13_stl;
                    $hp13_blk=$csv->hp13_blk;
                    $hp13_to=$csv->hp13_to;
                    $hp13_pf=$csv->hp13_pf;
                    $hp13_starter=$csv->hp13_starter;
                    $ap1_name=$csv->ap1_name;
                    $ap1_min=$csv->ap1_min;
                    $ap1_pts=$csv->ap1_pts;
                    $ap1_fgma=$csv->ap1_fgma;
                    $ap1_3pma=$csv->ap1_3pma;
                    $ap1_ftma=$csv->ap1_ftma;
                    $ap1_oreb=$csv->ap1_oreb;
                    $ap1_dreb=$csv->ap1_dreb;
                    $ap1_reb=$csv->ap1_reb;
                    $ap1_ast=$csv->ap1_ast;
                    $ap1_stl=$csv->ap1_stl;
                    $ap1_blk=$csv->ap1_blk;
                    $ap1_to=$csv->ap1_to;
                    $ap1_pf=$csv->ap1_pf;
                    $ap1_starter=$csv->ap1_starter;
                    $ap2_name=$csv->ap2_name;
                    $ap2_min=$csv->ap2_min;
                    $ap2_pts=$csv->ap2_pts;
                    $ap2_fgma=$csv->ap2_fgma;
                    $ap2_3pma=$csv->ap2_3pma;
                    $ap2_ftma=$csv->ap2_ftma;
                    $ap2_oreb=$csv->ap2_oreb;
                    $ap2_dreb=$csv->ap2_dreb;
                    $ap2_reb=$csv->ap2_reb;
                    $ap2_ast=$csv->ap2_ast;
                    $ap2_stl=$csv->ap2_stl;
                    $ap2_blk=$csv->ap2_blk;
                    $ap2_to=$csv->ap2_to;
                    $ap2_pf=$csv->ap2_pf;
                    $ap2_starter=$csv->ap2_starter;
                    $ap3_name=$csv->ap3_name;
                    $ap3_min=$csv->ap3_min;
                    $ap3_pts=$csv->ap3_pts;
                    $ap3_fgma=$csv->ap3_fgma;
                    $ap3_3pma=$csv->ap3_3pma;
                    $ap3_ftma=$csv->ap3_ftma;
                    $ap3_oreb=$csv->ap3_oreb;
                    $ap3_dreb=$csv->ap3_dreb;
                    $ap3_reb=$csv->ap3_reb;
                    $ap3_ast=$csv->ap3_ast;
                    $ap3_stl=$csv->ap3_stl;
                    $ap3_blk=$csv->ap3_blk;
                    $ap3_to=$csv->ap3_to;
                    $ap3_pf=$csv->ap3_pf;
                    $ap3_starter=$csv->ap3_starter;
                    $ap4_name=$csv->ap4_name;
                    $ap4_min=$csv->ap4_min;
                    $ap4_pts=$csv->ap4_pts;
                    $ap4_fgma=$csv->ap4_fgma;
                    $ap4_3pma=$csv->ap4_3pma;
                    $ap4_ftma=$csv->ap4_ftma;
                    $ap4_oreb=$csv->ap4_oreb;
                    $ap4_dreb=$csv->ap4_dreb;
                    $ap4_reb=$csv->ap4_reb;
                    $ap4_ast=$csv->ap4_ast;
                    $ap4_stl=$csv->ap4_stl;
                    $ap4_blk=$csv->ap4_blk;
                    $ap4_to=$csv->ap4_to;
                    $ap4_pf=$csv->ap4_pf;
                    $ap4_starter=$csv->ap4_starter;
                    $ap5_name=$csv->ap5_name;
                    $ap5_min=$csv->ap5_min;
                    $ap5_pts=$csv->ap5_pts;
                    $ap5_fgma=$csv->ap5_fgma;
                    $ap5_3pma=$csv->ap5_3pma;
                    $ap5_ftma=$csv->ap5_ftma;
                    $ap5_oreb=$csv->ap5_oreb;
                    $ap5_dreb=$csv->ap5_dreb;
                    $ap5_reb=$csv->ap5_reb;
                    $ap5_ast=$csv->ap5_ast;
                    $ap5_stl=$csv->ap5_stl;
                    $ap5_blk=$csv->ap5_blk;
                    $ap5_to=$csv->ap5_to;
                    $ap5_pf=$csv->ap5_pf;
                    $ap5_starter=$csv->ap5_starter;
                    $ap6_name=$csv->ap6_name;
                    $ap6_min=$csv->ap6_min;
                    $ap6_pts=$csv->ap6_pts;
                    $ap6_fgma=$csv->ap6_fgma;
                    $ap6_3pma=$csv->ap6_3pma;
                    $ap6_ftma=$csv->ap6_ftma;
                    $ap6_oreb=$csv->ap6_oreb;
                    $ap6_dreb=$csv->ap6_dreb;
                    $ap6_reb=$csv->ap6_reb;
                    $ap6_ast=$csv->ap6_ast;
                    $ap6_stl=$csv->ap6_stl;
                    $ap6_blk=$csv->ap6_blk;
                    $ap6_to=$csv->ap6_to;
                    $ap6_pf=$csv->ap6_pf;
                    $ap6_starter=$csv->ap6_starter;
                    $ap7_name=$csv->ap7_name;
                    $ap7_min=$csv->ap7_min;
                    $ap7_pts=$csv->ap7_pts;
                    $ap7_fgma=$csv->ap7_fgma;
                    $ap7_3pma=$csv->ap7_3pma;
                    $ap7_ftma=$csv->ap7_ftma;
                    $ap7_oreb=$csv->ap7_oreb;
                    $ap7_dreb=$csv->ap7_dreb;
                    $ap7_reb=$csv->ap7_reb;
                    $ap7_ast=$csv->ap7_ast;
                    $ap7_stl=$csv->ap7_stl;
                    $ap7_blk=$csv->ap7_blk;
                    $ap7_to=$csv->ap7_to;
                    $ap7_pf=$csv->ap7_pf;
                    $ap7_starter=$csv->ap7_starter;
                    $ap8_name=$csv->ap8_name;
                    $ap8_min=$csv->ap8_min;
                    $ap8_pts=$csv->ap8_pts;
                    $ap8_fgma=$csv->ap8_fgma;
                    $ap8_3pma=$csv->ap8_3pma;
                    $ap8_ftma=$csv->ap8_ftma;
                    $ap8_oreb=$csv->ap8_oreb;
                    $ap8_dreb=$csv->ap8_dreb;
                    $ap8_reb=$csv->ap8_reb;
                    $ap8_ast=$csv->ap8_ast;
                    $ap8_stl=$csv->ap8_stl;
                    $ap8_blk=$csv->ap8_blk;
                    $ap8_to=$csv->ap8_to;
                    $ap8_pf=$csv->ap8_pf;
                    $ap8_starter=$csv->ap8_starter;
                    $ap9_name=$csv->ap9_name;
                    $ap9_min=$csv->ap9_min;
                    $ap9_pts=$csv->ap9_pts;
                    $ap9_fgma=$csv->ap9_fgma;
                    $ap9_3pma=$csv->ap9_3pma;
                    $ap9_ftma=$csv->ap9_ftma;
                    $ap9_oreb=$csv->ap9_oreb;
                    $ap9_dreb=$csv->ap9_dreb;
                    $ap9_reb=$csv->ap9_reb;
                    $ap9_ast=$csv->ap9_ast;
                    $ap9_stl=$csv->ap9_stl;
                    $ap9_blk=$csv->ap9_blk;
                    $ap9_to=$csv->ap9_to;
                    $ap9_pf=$csv->ap9_pf;
                    $ap9_starter=$csv->ap9_starter;
                    $ap10_name=$csv->ap10_name;
                    $ap10_min=$csv->ap10_min;
                    $ap10_pts=$csv->ap10_pts;
                    $ap10_fgma=$csv->ap10_fgma;
                    $ap10_3pma=$csv->ap10_3pma;
                    $ap10_ftma=$csv->ap10_ftma;
                    $ap10_oreb=$csv->ap10_oreb;
                    $ap10_dreb=$csv->ap10_dreb;
                    $ap10_reb=$csv->ap10_reb;
                    $ap10_ast=$csv->ap10_ast;
                    $ap10_stl=$csv->ap10_stl;
                    $ap10_blk=$csv->ap10_blk;
                    $ap10_to=$csv->ap10_to;
                    $ap10_pf=$csv->ap10_pf;
                    $ap10_starter=$csv->ap10_starter;
                    $ap11_name=$csv->ap11_name;
                    $ap11_min=$csv->ap11_min;
                    $ap11_pts=$csv->ap11_pts;
                    $ap11_fgma=$csv->ap11_fgma;
                    $ap11_3pma=$csv->ap11_3pma;
                    $ap11_ftma=$csv->ap11_ftma;
                    $ap11_oreb=$csv->ap11_oreb;
                    $ap11_dreb=$csv->ap11_dreb;
                    $ap11_reb=$csv->ap11_reb;
                    $ap11_ast=$csv->ap11_ast;
                    $ap11_stl=$csv->ap11_stl;
                    $ap11_blk=$csv->ap11_blk;
                    $ap11_to=$csv->ap11_to;
                    $ap11_pf=$csv->ap11_pf;
                    $ap11_starter=$csv->ap11_starter;
                    $ap12_name=$csv->ap12_name;
                    $ap12_min=$csv->ap12_min;
                    $ap12_pts=$csv->ap12_pts;
                    $ap12_fgma=$csv->ap12_fgma;
                    $ap12_3pma=$csv->ap12_3pma;
                    $ap12_ftma=$csv->ap12_ftma;
                    $ap12_oreb=$csv->ap12_oreb;
                    $ap12_dreb=$csv->ap12_dreb;
                    $ap12_reb=$csv->ap12_reb;
                    $ap12_ast=$csv->ap12_ast;
                    $ap12_stl=$csv->ap12_stl;
                    $ap12_blk=$csv->ap12_blk;
                    $ap12_to=$csv->ap12_to;
                    $ap12_pf=$csv->ap12_pf;
                    $ap12_starter=$csv->ap12_starter;
                    $ap13_name=$csv->ap13_name;
                    $ap13_min=$csv->ap13_min;
                    $ap13_pts=$csv->ap13_pts;
                    $ap13_fgma=$csv->ap13_fgma;
                    $ap13_3pma=$csv->ap13_3pma;
                    $ap13_ftma=$csv->ap13_ftma;
                    $ap13_oreb=$csv->ap13_oreb;
                    $ap13_dreb=$csv->ap13_dreb;
                    $ap13_reb=$csv->ap13_reb;
                    $ap13_ast=$csv->ap13_ast;
                    $ap13_stl=$csv->ap13_stl;
                    $ap13_blk=$csv->ap13_blk;
                    $ap13_to=$csv->ap13_to;
                    $ap13_pf=$csv->ap13_pf;
                    $ap13_starter=$csv->ap13_starter;
                    $h_nick=$csv->h_nick;
                    $a_nick=$csv->a_nick;
                    $h_initials=$csv->h_initials;
                    $a_initials=$csv->a_initials;
                    $aq1=$csv->aq1;
                    $aq2=$csv->aq2;
                    $aq3=$csv->aq3;
                    $aq4=$csv->aq4;
                    $aq5=$csv->aq5;
                    $aq6=$csv->aq6;
                    $aq7=$csv->aq7;
                    $aq8=$csv->aq8;
                    $aq9=$csv->aq9;
                    $aq10=$csv->aq10;
                    $hq1=$csv->hq1;
                    $hq2=$csv->hq2;
                    $hq3=$csv->hq3;
                    $hq4=$csv->hq4;
                    $hq5=$csv->hq5;
                    $hq6=$csv->hq6;
                    $hq7=$csv->hq7;
                    $hq8=$csv->hq8;
                    $hq9=$csv->hq9;
                    $hq10=$csv->hq10;
                    $afgp=$csv->afgp;
                    $aftp=$csv->aftp;
                    $a3ptp=$csv->a3ptp;
                    $arebt=$csv->arebt;
                    $aastt=$csv->aastt;
                    $astlt=$csv->astlt;
                    $ablkt=$csv->ablkt;
                    $hfgp=$csv->hfgp;
                    $hftp=$csv->hftp;
                    $h3ptp=$csv->h3ptp;
                    $hrebt=$csv->hrebt;
                    $hastt=$csv->hastt;
                    $hstlt=$csv->hstlt;
                    $hblkt=$csv->hblkt;
                    $awaytfgma=$csv->awaytfgma;
                    $awaytftma=$csv->awaytftma;
                    $awayt3fgma=$csv->awayt3fgma;
                    $hometfgma=$csv->hometfgma;
                    $hometftma=$csv->hometftma;
                    $homet3fgma=$csv->homet3fgma;
                    $hometoreb=$csv->hometoreb;
                    $hometdreb=$csv->hometdreb;
                    $awaytoreb=$csv->awaytoreb;
                    $awaytdreb=$csv->awaytdreb;
                    $hometto=$csv->hometto;
                    $hometpf=$csv->hometpf;
                    $awaytto=$csv->awaytto;
                    $awaytpf=$csv->awaytpf;


                   $csv_import = new Boxscore(['game_string:string' => $game_string,'datey' => $datey,'dashy_date' => $dashy_date,'afname' => $afname,'hfname' => $hfname,'atotal'=>$atotal,'htotal'=>$htotal,'arena' => $arena,'capacity'=>$capacity,'attendance'=>$attendance,'ref1'=>$ref1,'ref2'=>$ref2,'ref3'=> $ref3,'hp1_name'=>$hp1_name,'hp1_min' => $hp1_min,'hp1_pts' => $hp1_pts,'hp1_fgma' => $hp1_fgma,'hp1_3pma' => $hp1_3pma,'hp1_ftma' => $hp1_ftma,'hp1_oreb' => $hp1_oreb,'hp1_dreb' => $hp1_dreb,'hp1_reb' => $hp1_reb,'hp1_ast' => $hp1_ast,'hp1_stl' => $hp1_stl,'hp1_blk' => $hp1_blk,'hp1_to' => $hp1_to,'hp1_pf' => $hp1_pf,'hp1_starter' => $hp1_starter,'hp2_name' => $hp2_name,'hp2_min' => $hp2_min,'hp2_pts' => $hp2_pts,'hp2_fgma' => $hp2_fgma,'hp2_3pma' => $hp2_3pma,'hp2_ftma' => $hp2_ftma,'hp2_oreb' => $hp2_oreb,'hp2_dreb' => $hp2_dreb,'hp2_reb' => $hp2_reb,'hp2_ast' => $hp2_ast,'hp2_stl' => $hp2_stl,'hp2_blk' => $hp2_blk,'hp2_to' => $hp2_to,'hp2_pf' => $hp2_pf,'hp2_starter' => $hp2_starter,'hp3_name' => $hp3_name,'hp3_min' => $hp3_min,'hp3_pts' => $hp3_pts,'hp3_fgma' => $hp3_fgma,'hp3_3pma' => $hp3_3pma,'hp3_ftma' => $hp3_ftma,'hp3_oreb' => $hp3_oreb,'hp3_dreb' => $hp3_dreb,'hp3_reb' => $hp3_reb,'hp3_ast' => $hp3_ast,'hp3_stl' => $hp3_stl,'hp3_blk' => $hp3_blk,'hp3_to' => $hp3_to,'hp3_pf' => $hp3_pf,'hp3_starter' => $hp3_starter,'hp4_name' => $hp4_name,'hp4_min' => $hp4_min,'hp4_pts' => $hp4_pts,'hp4_fgma' => $hp4_fgma,'hp4_3pma' => $hp4_3pma,'hp4_ftma' => $hp4_ftma,'hp4_oreb' => $hp4_oreb,'hp4_dreb' => $hp4_dreb,'hp4_reb' => $hp4_reb,'hp4_ast' => $hp4_ast,'hp4_stl' => $hp4_stl,'hp4_blk' => $hp4_blk,'hp4_to' => $hp4_to,'hp4_pf' => $hp4_pf,'hp4_starter' => $hp4_starter,'hp5_name' => $hp5_name,'hp5_min' => $hp5_min,'hp5_pts' => $hp5_pts,'hp5_fgma' => $hp5_fgma,'hp5_3pma' => $hp5_3pma,'hp5_ftma' => $hp5_ftma,'hp5_oreb' => $hp5_oreb,'hp5_dreb' => $hp5_dreb,'hp5_reb' => $hp5_reb,'hp5_ast' => $hp5_ast,'hp5_stl' => $hp5_stl,'hp5_blk' => $hp5_blk,'hp5_to' => $hp5_to,'hp5_pf' => $hp5_pf,'hp5_starter' => $hp5_starter,'hp6_name' => $hp6_name,'hp6_min' => $hp6_min,'hp6_pts' => $hp6_pts,'hp6_fgma' => $hp6_fgma,'hp6_3pma' => $hp6_3pma,'hp6_ftma' => $hp6_ftma,'hp6_oreb' => $hp6_oreb,'hp6_dreb' => $hp6_dreb,'hp6_reb' => $hp6_reb,'hp6_ast' => $hp6_ast,'hp6_stl' => $hp6_stl,'hp6_blk' => $hp6_blk,'hp6_to' => $hp6_to,'hp6_pf' => $hp6_pf,'hp6_starter' => $hp6_starter,'hp7_name' => $hp7_name,'hp7_min' => $hp7_min,'hp7_pts' => $hp7_pts,'hp7_fgma' => $hp7_fgma,'hp7_3pma' => $hp7_3pma,'hp7_ftma' => $hp7_ftma,'hp7_oreb' => $hp7_oreb,'hp7_dreb' => $hp7_dreb,'hp7_reb' => $hp7_reb,'hp7_ast' => $hp7_ast,'hp7_stl' => $hp7_stl,'hp7_blk' => $hp7_blk,'hp7_to' => $hp7_to,'hp7_pf' => $hp7_pf,'hp7_starter' => $hp7_starter,'hp8_name' => $hp8_name,'hp8_min' => $hp8_min,'hp8_pts' => $hp8_pts,'hp8_fgma' => $hp8_fgma,'hp8_3pma' => $hp8_3pma,'hp8_ftma' => $hp8_ftma,'hp8_oreb' => $hp8_oreb,'hp8_dreb' => $hp8_dreb,'hp8_reb' => $hp8_reb,'hp8_ast' => $hp8_ast,'hp8_stl' => $hp8_stl,'hp8_blk' => $hp8_blk,'hp8_to' => $hp8_to,'hp8_pf' => $hp8_pf,'hp8_starter' => $hp8_starter,'hp9_name' => $hp9_name,'hp9_min' => $hp9_min,'hp9_pts' => $hp9_pts,'hp9_fgma' => $hp9_fgma,'hp9_3pma' => $hp9_3pma,'hp9_ftma' => $hp9_ftma,'hp9_oreb' => $hp9_oreb,'hp9_dreb' => $hp9_dreb,'hp9_reb' => $hp9_reb,'hp9_ast' => $hp9_ast,'hp9_stl' => $hp9_stl,'hp9_blk' => $hp9_blk,'hp9_to' => $hp9_to,'hp9_pf' => $hp9_pf,'hp9_starter' => $hp9_starter,'hp10_name' => $hp10_name,'hp10_min' => $hp10_min,'hp10_pts' => $hp10_pts,'hp10_fgma' => $hp10_fgma,'hp10_3pma' => $hp10_3pma,'hp10_ftma' => $hp10_ftma,'hp10_oreb' => $hp10_oreb,'hp10_dreb' => $hp10_dreb,'hp10_reb' => $hp10_reb,'hp10_ast' => $hp10_ast,'hp10_stl' => $hp10_stl,'hp10_blk' => $hp10_blk,'hp10_to' => $hp10_to,'hp10_pf' => $hp10_pf,'hp10_starter' => $hp10_starter,'hp11_name' => $hp11_name,'hp11_min' => $hp11_min,'hp11_pts' => $hp11_pts,'hp11_fgma' => $hp11_fgma,'hp11_3pma' => $hp11_3pma,'hp11_ftma' => $hp11_ftma,'hp11_oreb' => $hp11_oreb,'hp11_dreb' => $hp11_dreb,'hp11_reb' => $hp11_reb,'hp11_ast' => $hp11_ast,'hp11_stl' => $hp11_stl,'hp11_blk' => $hp11_blk,'hp11_to' => $hp11_to,'hp11_pf' => $hp11_pf,'hp11_starter' => $hp11_starter,'hp12_name' => $hp12_name,'hp12_min' => $hp12_min,'hp12_pts' => $hp12_pts,'hp12_fgma' => $hp12_fgma,'hp12_3pma' => $hp12_3pma,'hp12_ftma' => $hp12_ftma,'hp12_oreb' => $hp12_oreb,'hp12_dreb' => $hp12_dreb,'hp12_reb' => $hp12_reb,'hp12_ast' => $hp12_ast,'hp12_stl' => $hp12_stl,'hp12_blk' => $hp12_blk,'hp12_to' => $hp12_to,'hp12_pf' => $hp12_pf,'hp12_starter' => $hp12_starter,'hp13_name' => $hp13_name,'hp13_min' => $hp13_min,'hp13_pts' => $hp13_pts,'hp13_fgma' => $hp13_fgma,'hp13_3pma' => $hp13_3pma,'hp13_ftma' => $hp13_ftma,'hp13_oreb' => $hp13_oreb,'hp13_dreb' => $hp13_dreb,'hp13_reb' => $hp13_reb,'hp13_ast' => $hp13_ast,'hp13_stl' => $hp13_stl,'hp13_blk' => $hp13_blk,'hp13_to' => $hp13_to,'hp13_pf' => $hp13_pf,'hp13_starter' => $hp13_starter,'ap1_name' => $ap1_name,'ap1_min' => $ap1_min,'ap1_pts' => $ap1_pts,'ap1_fgma' => $ap1_fgma,'ap1_3pma' => $ap1_3pma,'ap1_ftma' => $ap1_ftma,'ap1_oreb' => $ap1_oreb,'ap1_dreb' => $ap1_dreb,'ap1_reb' => $ap1_reb,'ap1_ast' => $ap1_ast,'ap1_stl' => $ap1_stl,'ap1_blk' => $ap1_blk,'ap1_to' => $ap1_to,'ap1_pf' => $ap1_pf,'ap1_starter' => $ap1_starter,'ap2_name' => $ap2_name,'ap2_min' => $ap2_min,'ap2_pts' => $ap2_pts,'ap2_fgma' => $ap2_fgma,'ap2_3pma' => $ap2_3pma,'ap2_ftma' => $ap2_ftma,'ap2_oreb' => $ap2_oreb,'ap2_dreb' => $ap2_dreb,'ap2_reb' => $ap2_reb,'ap2_ast' => $ap2_ast,'ap2_stl' => $ap2_stl,'ap2_blk' => $ap2_blk,'ap2_to' => $ap2_to,'ap2_pf' => $ap2_pf,'ap2_starter' => $ap2_starter,'ap3_name' => $ap3_name,'ap3_min' => $ap3_min,'ap3_pts' => $ap3_pts,'ap3_fgma' => $ap3_fgma,'ap3_3pma' => $ap3_3pma,'ap3_ftma' => $ap3_ftma,'ap3_oreb' => $ap3_oreb,'ap3_dreb' => $ap3_dreb,'ap3_reb' => $ap3_reb,'ap3_ast' => $ap3_ast,'ap3_stl' => $ap3_stl,'ap3_blk' => $ap3_blk,'ap3_to' => $ap3_to,'ap3_pf' => $ap3_pf,'ap3_starter' => $ap3_starter,'ap4_name' => $ap4_name,'ap4_min' => $ap4_min,'ap4_pts' => $ap4_pts,'ap4_fgma' => $ap4_fgma,'ap4_3pma' => $ap4_3pma,'ap4_ftma' => $ap4_ftma,'ap4_oreb' => $ap4_oreb,'ap4_dreb' => $ap4_dreb,'ap4_reb' => $ap4_reb,'ap4_ast' => $ap4_ast,'ap4_stl' => $ap4_stl,'ap4_blk' => $ap4_blk,'ap4_to' => $ap4_to,'ap4_pf' => $ap4_pf,'ap4_starter' => $ap4_starter,'ap5_name' => $ap5_name,'ap5_min' => $ap5_min,'ap5_pts' => $ap5_pts,'ap5_fgma' => $ap5_fgma,'ap5_3pma' => $ap5_3pma,'ap5_ftma' => $ap5_ftma,'ap5_oreb' => $ap5_oreb,'ap5_dreb' => $ap5_dreb,'ap5_reb' => $ap5_reb,'ap5_ast' => $ap5_ast,'ap5_stl' => $ap5_stl,'ap5_blk' => $ap5_blk,'ap5_to' => $ap5_to,'ap5_pf' => $ap5_pf,'ap5_starter' => $ap5_starter,'ap6_name' => $ap6_name,'ap6_min' => $ap6_min,'ap6_pts' => $ap6_pts,'ap6_fgma' => $ap6_fgma,'ap6_3pma' => $ap6_3pma,'ap6_ftma' => $ap6_ftma,'ap6_oreb' => $ap6_oreb,'ap6_dreb' => $ap6_dreb,'ap6_reb' => $ap6_reb,'ap6_ast' => $ap6_ast,'ap6_stl' => $ap6_stl,'ap6_blk' => $ap6_blk,'ap6_to' => $ap6_to,'ap6_pf' => $ap6_pf,'ap6_starter' => $ap6_starter,'ap7_name' => $ap7_name,'ap7_min' => $ap7_min,'ap7_pts' => $ap7_pts,'ap7_fgma' => $ap7_fgma,'ap7_3pma' => $ap7_3pma,'ap7_ftma' => $ap7_ftma,'ap7_oreb' => $ap7_oreb,'ap7_dreb' => $ap7_dreb,'ap7_reb' => $ap7_reb,'ap7_ast' => $ap7_ast,'ap7_stl' => $ap7_stl,'ap7_blk' => $ap7_blk,'ap7_to' => $ap7_to,'ap7_pf' => $ap7_pf,'ap7_starter' => $ap7_starter,'ap8_name' => $ap8_name,'ap8_min' => $ap8_min,'ap8_pts' => $ap8_pts,'ap8_fgma' => $ap8_fgma,'ap8_3pma' => $ap8_3pma,'ap8_ftma' => $ap8_ftma,'ap8_oreb' => $ap8_oreb,'ap8_dreb' => $ap8_dreb,'ap8_reb' => $ap8_reb,'ap8_ast' => $ap8_ast,'ap8_stl' => $ap8_stl,'ap8_blk' => $ap8_blk,'ap8_to' => $ap8_to,'ap8_pf' => $ap8_pf,'ap8_starter' => $ap8_starter,'ap9_name' => $ap9_name,'ap9_min' => $ap9_min,'ap9_pts' => $ap9_pts,'ap9_fgma' => $ap9_fgma,'ap9_3pma' => $ap9_3pma,'ap9_ftma' => $ap9_ftma,'ap9_oreb' => $ap9_oreb,'ap9_dreb' => $ap9_dreb,'ap9_reb' => $ap9_reb,'ap9_ast' => $ap9_ast,'ap9_stl' => $ap9_stl,'ap9_blk' => $ap9_blk,'ap9_to' => $ap9_to,'ap9_pf' => $ap9_pf,'ap9_starter' => $ap9_starter,'ap10_name' => $ap10_name,'ap10_min' => $ap10_min,'ap10_pts' => $ap10_pts,'ap10_fgma' => $ap10_fgma,'ap10_3pma' => $ap10_3pma,'ap10_ftma' => $ap10_ftma,'ap10_oreb' => $ap10_oreb,'ap10_dreb' => $ap10_dreb,'ap10_reb' => $ap10_reb,'ap10_ast' => $ap10_ast,'ap10_stl' => $ap10_stl,'ap10_blk' => $ap10_blk,'ap10_to' => $ap10_to,'ap10_pf' => $ap10_pf,'ap10_starter' => $ap10_starter,'ap11_name' => $ap11_name,'ap11_min' => $ap11_min,'ap11_pts' => $ap11_pts,'ap11_fgma' => $ap11_fgma,'ap11_3pma' => $ap11_3pma,'ap11_ftma' => $ap11_ftma,'ap11_oreb' => $ap11_oreb,'ap11_dreb' => $ap11_dreb,'ap11_reb' => $ap11_reb,'ap11_ast' => $ap11_ast,'ap11_stl' => $ap11_stl,'ap11_blk' => $ap11_blk,'ap11_to' => $ap11_to,'ap11_pf' => $ap11_pf,'ap11_starter' => $ap11_starter,'ap12_name' => $ap12_name,'ap12_min' => $ap12_min,'ap12_pts' => $ap12_pts,'ap12_fgma' => $ap12_fgma,'ap12_3pma' => $ap12_3pma,'ap12_ftma' => $ap12_ftma,'ap12_oreb' => $ap12_oreb,'ap12_dreb' => $ap12_dreb,'ap12_reb' => $ap12_reb,'ap12_ast' => $ap12_ast,'ap12_stl' => $ap12_stl,'ap12_blk' => $ap12_blk,'ap12_to' => $ap12_to,'ap12_pf' => $ap12_pf,'ap12_starter' => $ap12_starter,'ap13_name' => $ap13_name,'ap13_min' => $ap13_min,'ap13_pts' => $ap13_pts,'ap13_fgma' => $ap13_fgma,'ap13_3pma' => $ap13_3pma,'ap13_ftma' => $ap13_ftma,'ap13_oreb' => $ap13_oreb,'ap13_dreb' => $ap13_dreb,'ap13_reb' => $ap13_reb,'ap13_ast' => $ap13_ast,'ap13_stl' => $ap13_stl,'ap13_blk' => $ap13_blk,'ap13_to' => $ap13_to,'ap13_pf' => $ap13_pf,'ap13_starter' => $ap13_starter,'h_nick' => $h_nick,'a_nick' => $a_nick,'h_initials' => $h_initials,'a_initials' => $a_initials,'aq1' => $aq1,'aq2' => $aq2,'aq3' => $aq3,'aq4' => $aq4,'aq5' => $aq5,'aq6' => $aq6,'aq7' => $aq7,'aq8' => $aq8,'aq9' => $aq9,'aq10' => $aq10,'hq1' => $hq1,'hq2' => $hq2,'hq3' => $hq3,'hq4' => $hq4,'hq5' => $hq5,'hq6' => $hq6,'hq7' => $hq7,'hq8' => $hq8,'hq9' => $hq9,'hq10' => $hq10,'afgp' => $afgp,'aftp' => $aftp,'a3ptp' => $a3ptp,'arebt' => $arebt,'aastt' => $aastt,'astlt' => $astlt,'ablkt' => $ablkt,'hfgp' => $hfgp,'hftp' => $hftp,'h3ptp' => $h3ptp,'hrebt' => $hrebt,'hastt' => $hastt,'hstlt' => $hstlt,'hblkt' => $hblkt,'awaytfgma' => $awaytfgma,'awaytftma' => $awaytftma,'awayt3fgma' => $awayt3fgma,'hometfgma' => $hometfgma,'hometftma' => $hometftma,'homet3fgma' => $homet3fgma,'hometoreb' => $hometoreb,'hometdreb' => $hometdreb,'awaytoreb' => $awaytoreb,'awaytdreb' => $awaytdreb,'hometto' => $hometto,'hometpf' => $hometpf,'awaytto' => $awaytto,'awaytpf' => $awaytpf ]);
                    $csv_import->save();}
                    \Session::flash('success','Post uploaded successfully.');
                return redirect(route('boxscores.index',compact('results')));
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
