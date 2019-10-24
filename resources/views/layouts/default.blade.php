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
</html>
