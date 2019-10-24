<header class="banner header" id="myHeader">
  <div class="container">
    <div class="row">
      <a class="brand col-md-6" href="{{ home_url('/') }}"><img src="@asset('images/logo-black.png')" width="100"></a>
      <nav class="nav-primary col-md-6 d-flex align-items-center justify-content-end">
        <!-- Button trigger modal -->
        <img src="@asset('images/menu-button.svg')" class="menu-burger" data-toggle="modal" data-target="#exampleModal" width="30" height="30"/>
      </nav>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header d-flex justify-content-end">
          <img src="@asset('images/close-button.svg')" data-dismiss="modal" aria-label="Close" width="20" height="20">
        </div>
        <div class="modal-body">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
          @endif
        </div>
        <div class="modal-footer d-flex align-items-center justify-content-center">
          <img src="@asset('images/facebook-logo.svg')" class="menu-burger" data-toggle="modal" data-target="#exampleModal" width="30" height="30"/>
          <img src="@asset('images/instagram.svg')" class="menu-burger" data-toggle="modal" data-target="#exampleModal" width="30" height="30"/>
        </div>
      </div>
    </div>
  </div>
</header>
