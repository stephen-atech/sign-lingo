@extends('layouts.app')
@section('content')

<div class="container title">
  <h2 class="title-labl fw-bold d-block" style="
          color: hsl(0, 0%, 100%);
          text-transform: capitalize;
          font-size: 5em;
        ">
    Level Cat
  </h2>
</div>

<div class="container main">
  <div class="container card">
    <div class="bttn">
      <div class="levels">
        <a href="#.html" class="btn active">Alphabets</a>
      </div>
      <div class="levels">
        <a href="" class="btn disabled">Words</a>
      </div>
      <div class="levels">
        <a href="" class="btn disabled">Sentences</a>
      </div>
    </div>
  </div>
</div>

@endsection