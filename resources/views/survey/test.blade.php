<?php
/**
 * Created by PhpStorm.
 * User: Ovidijus
 * Date: 2017-07-02
 * Time: 17:01
 */
?>

@extends('layouts.master')
@section('pageTitle', 'CSS')
@section('content')
    <h1>{{strtoupper($survey->type)}} - testas</h1>
    <form action="{{url()->current()}}" method="POST" class="form-inline" role="form">
        {{ csrf_field() }}
        @foreach($questions as $question)
            <div v-if="seen" class="question">
                <input type="hidden" name="_q" value="{{$question->id}}">
                <h1 class="header">{{$question->title}}</h1>
                <div class="answers">
                    @foreach($question->answers as $answer)
                        <label class="checkbox-inline">
                            <input class="checkbox" required="required" type="checkbox" name="answer"
                                   id="input-{{$answer->id}}" value="{{$answer->answer}}">{{$answer->answer}}
                        </label>
                    @endforeach
                </div>
            </div>
        @endforeach
    </form>
@stop