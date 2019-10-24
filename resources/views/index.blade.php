@extends('layouts.default')

@section('content')
  <div class="main-container container">
    <div class="row-image d-flex justify-content-center">
      <img src="@asset('images/logo-black.png')">
    </div>
    <p id="demo"></p>
    <div class="row countdown">
      <div class="col-md-3">
        <div class="round">
          <p>JOURS</p>
          <p id="days"></p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="round">
          <p>HEURES</p>
          <p id="hours"></p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="round">
          <p>MINUTES</p>
          <p id="minutes"></p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="round">
          <p>SECONDES</p>
          <p id="seconds"></p>
        </div>
      </div>
    </div>
    <div class="row row-redirect align-items-center">
      <div class="col-md-6 d-flex align-items-center">
        <a href="<?= get_the_permalink('5');?>"
           class="d-flex align-items-center justify-content-center flex-column container-redirect">
          <p>JE SUIS</p>
          <h2>FESTIVALIER</h2>
          <p>POUR M'ÉCLATER</p>
        </a>
      </div>
      <div class="col-md-6 d-flex align-items-center">
        <a href="<?= get_the_permalink('7');?>"
           class="d-flex align-items-center justify-content-center flex-column container-redirect">
          <p>JE SUIS</p>
          <h2>ARTISTE</h2>
          <p>POUR ME PRODUIRE</p>
        </a>
      </div>
    </div>
  </div>
@endsection
