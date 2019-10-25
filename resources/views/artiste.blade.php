{{--
  Template Name: Artiste
--}}

@extends('layouts.app')

@section('content')
  <div class="main-container container">
    <div class="row">
      <div class="col-12 d-flex justify-content-center">
        <video controls width="50%">
          <source src="@asset('images/RENDER_COMP.mov')" type="video/mp4">
          Your browser does not support the video tag.
        </video>
      </div>
    </div>
  </div>
@endsection
