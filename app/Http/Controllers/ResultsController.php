<?php

namespace App\Http\Controllers;

use App\Questions;
use App\Results;
use Illuminate\Http\Request;

class ResultsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Results::all()->toJson();
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
        $this->validate($request, [
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
        ]);
        $data = $request->all();
        $answers = $data['answers'];
        $data['answers'] = serialize($answers);
        $data['url'] = str_random(10);
        $result = Results::create($data);
        return $result->url;
    }


    /**
     * @param $id
     * @param $url
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function show($id, $url)
    {
        $results = Results::where(['surveys_id' => $id, 'url' => $url])->get()->toArray();
        $answers = unserialize($results[0]['answers']);
        $surveyData = [];
        foreach ($answers[0] as $key => $answer) {
            $surveyData[$key] = Questions::where(['id' => $answer['qid']])->get()->makeVisible(['answer', 'point']);
            $surveyData[$key]['survey_answers'] = $answer['answers'];
            $surveyData[$key]['answer_correct'] = false;
        }

        $survey_points = 0;
        foreach ($surveyData as $key => $data) {
            $q_answer = $data[0]['answer'];
            $s_answer = $data['survey_answers'];
            $a_answer_point = $data[0]['point'];

            if (count($q_answer) == count($s_answer) && $q_answer == $s_answer[0]) {
                $surveyData[$key]['answer_correct'] = true;
                $survey_points += $a_answer_point;
            } else {
                $surveyData[$key]['answer_correct'] = false;
            }
        }

        $data = [
            'name' => $results[0]['name'],
            'surname' => $results[0]['surname'],
            'survey_data' => $surveyData,
            'total_points' => $survey_points
        ];
        return response($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Results $results
     * @return \Illuminate\Http\Response
     */
    public function edit(Results $results)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Results $results
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Results $results)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Results $results
     * @return \Illuminate\Http\Response
     */
    public function destroy(Results $results)
    {
        //
    }

}
