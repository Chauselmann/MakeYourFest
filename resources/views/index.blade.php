@extends('layouts.default')

@section('content')
  <div class="main-container container">
    <img class="logo-home" src="@asset('images/Logo_premiere_page.svg')">
    <div class="row row-home">
      <a href="<?= get_the_permalink('5');?>" class="col-md-6">
        <div class="container-text">
          <h1>JE SUIS UN <span class="underline--magical">FESTIVALIER</span></h1>
          <p>POUR M'ÉCLATER</p>
        </div>
        <div class="video-container">
          <video id="videoID" controls data-play="hover" muted="muted" class="v-left">
            <source src="@asset('images/festivalier.mov')" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>
      </a>
      <a href="<?= get_the_permalink('7');?>" class="col-md-6">
        <div class="container-text">
          <h1>JE SUIS UN<span class="underline--magical">ARTISTE</span></h1>
          <p>POUR ME PRODUIRE</p>
        </div>
        <div class="video-container">
          <video id="videoID" controls data-play="hover" muted="muted" class="v-right">
            <source src="@asset('images/artiste.mov')" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>
      </a>
    </div>
  </div>
@endsection

