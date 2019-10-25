<!doctype html>
<html {!! get_language_attributes() !!}>
@include('partials.head')
  <body @php body_class() @endphp>
  @php do_action('get_header') @endphp
    <div class="wrap" role="document">
      <div class="content content-index">
        <main class="main index">
          @yield('content')
        </main>
      </div>
  @php do_action('get_footer') @endphp
  @include('partials.footer')
  @php wp_footer() @endphp

  </body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                 integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                 crossorigin="anonymous">
</script>
</html>
