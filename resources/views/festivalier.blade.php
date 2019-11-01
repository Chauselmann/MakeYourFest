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
          <p id="days"></p>
          <p>jours</p>
        </div>
      </div>
      <div class="square">
        <div class="round">
          <p id="hours"></p>
          <p>heures</p>
        </div>
      </div>
      <div class="square">
        <div class="round">
          <p id="minutes"></p>
          <p>minutes</p>
        </div>
      </div>
      <div class="square">
        <div class="round">
          <p id="seconds"></p>
          <p>secondes</p>
        </div>
      </div>
    </div>
    <div class="row row-text d-flex justify-content-center r-second">
      <p>POUR VOTER !</p>
    </div>
    <div class="row row-text d-flex justify-content-center r-second r-promo">
      <p>Vote dès maintenant pour obtenir un code promo sur ta place de concert </p>
    </div>
    <div class="row row-section">
      <div class="col-md-8 col-image">
        <div class="img-section">
          <img src="@asset('images/pop.jpg')">
          <div class="white-rectangle"></div>
        </div>
      </div>
      <div class="col-md-4 col-btn">
        <h2>ROCK</h2>
        <hr>
        <div class="custom-btn">
          <a href="">Voir les vidéos</a>
          <div class="background"></div>
        </div>
      </div>
    </div>
    <div class="row row-section reverse">
      <div class="col-md-4 col-btn">
        <h2>ROCK</h2>
        <hr>
        <div class="custom-btn">
          <a href="">Voir les vidéos</a>
          <div class="background"></div>
        </div>
      </div>
      <div class="col-md-8 col-image">
        <div class="img-section">
          <img src="@asset('images/pop.jpg')">
          <div class="white-rectangle"></div>
        </div>
      </div>
    </div>
    <div class="row row-section">
      <div class="col-md-8 col-image">
        <div class="img-section">
          <img src="@asset('images/pop.jpg')">
          <div class="white-rectangle"></div>
        </div>
      </div>
      <div class="col-md-4 col-btn">
        <h2>ROCK</h2>
        <hr>
        <div class="custom-btn">
          <a href="">Voir les vidéos</a>
          <div class="background"></div>
        </div>
      </div>
    </div>
    <div class="row row-section reverse">
      <div class="col-md-4 col-btn">
        <h2>ROCK</h2>
        <hr>
        <div class="custom-btn">
          <a href="">Voir les vidéos</a>
          <div class="background"></div>
        </div>
      </div>
      <div class="col-md-8 col-image">
        <div class="img-section">
          <img src="@asset('images/pop.jpg')">
          <div class="white-rectangle"></div>
        </div>
      </div>
    </div>
    <div class="row row-section">
      <div class="col-md-8 col-image">
        <div class="img-section">
          <img src="@asset('images/pop.jpg')">
          <div class="white-rectangle"></div>
        </div>
      </div>
      <div class="col-md-4 col-btn">
        <h2>ROCK</h2>
        <hr>
        <div class="custom-btn">
          <a href="">Voir les vidéos</a>
          <div class="background"></div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 coll-img-full">
        <a href="<?= get_the_permalink(27) ;?>" class="img-section">
          <img src="@asset('images/pop.jpg')" width="100%" height="100%">
          <div class="white-rectangle">
            <p class="underline--magical">Découvrez le jury</p>
          </div>
        </a>
      </div>
    </div>
  </div>
@endsection
