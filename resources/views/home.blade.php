
@extends('layouts.app')
@section('content')

    <div class="container title">
        <h2 class="title-labl fw-bold d-block" style="
          color: hsl(0, 0%, 100%);
          text-transform: capitalize;
          font-size: 5em;
        ">
            levels
        </h2>
    </div>

    <div class="container main">
        <div class="container card">
            <div class="bttn">
                <div class="levels">
                    <a href="cathegory.html" class="btn active">Beginner</a>
                </div>
                <div class="levels">
                    <a href="" class="btn disabled">Intermediate</a>
                </div>
                <div class="levels">
                    <a href="" class="btn disabled">Advanced</a>
                </div>
            </div>
        </div>
    </div>

    @endsection