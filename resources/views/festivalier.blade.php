{{--
  Template Name: Festivalier
--}}

@extends('layouts.app')

@section('content')
  <div class="main-container container festivalier">
    <div class="row">
      <div class="col-12 d-flex justify-content-center">
        <video width="50%" controls>
          <source src="@asset('images/RENDER_COMP.mp4')" type="video/mp4">
          Your browser does not support the video tag.
        </video>
      </div>
    </div>
    <div class="row row-text d-flex justify-content-center r-first">
      <p>IL NE TE RESTE PLUS QUE </p>
    </div>
    <div class="row countdown row-text">
      <div class="square">
        <div class="round">
          <p>JOURS</p>
          <p id="days"></p>
        </div>
      </div>
      <div class="square">
        <div class="round">
          <p>HEURES</p>
          <p id="hours"></p>
        </div>
      </div>
      <div class="square">
        <div class="round">
          <p>MINUTES</p>
          <p id="minutes"></p>
        </div>
      </div>
      <div class="square">
        <div class="round">
          <p>SECONDES</p>
          <p id="seconds"></p>
        </div>
      </div>
    </div>
    <div class="row row-text d-flex justify-content-center r-second">
      <p>POUR VOTER !</p>
    </div>
    <div class="row row-text d-flex justify-content-center r-second r-promo">
      <p>Vote dès maintenant pour obtenir un code promo sur ta place de concert </p>
    </div>
  </div>
@endsection
