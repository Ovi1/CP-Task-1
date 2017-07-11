<?php

namespace App\Http\Controllers;

use App\Questions;
use App\Surveys;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class SurveysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surveys = Surveys::with('questions')->get();
        return response($surveys->toJson());
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Pagination\Paginator
     */
    public function start($id)
    {
        $questions = Questions::with('answers')->where(['surveys_id' => $id])->orderBy(DB::raw('RAND()'))->simplePaginate(1);
        return $questions;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Surveys $surveys
     * @return \Illuminate\Http\Response
     */
    public function show(Surveys $surveys)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Surveys $surveys
     * @return \Illuminate\Http\Response
     */
    public function edit(Surveys $surveys)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Surveys $surveys
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Surveys $surveys)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Surveys $surveys
     * @return \Illuminate\Http\Response
     */
    public function destroy(Surveys $surveys)
    {
        //
    }
}
