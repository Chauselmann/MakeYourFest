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
    </div>
  </body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                 integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                 crossorigin="anonymous">
</script>
<script>
    !function(a){a.hoverPlay={},a.fn.hoverPlay=function(e){if(!this.length)return this;var t=a.extend(!0,{},a.hoverPlay.defaults,e);return this.each(function(){var e=a(this),o=e.get(0);'function'==typeof o.play&&(o.controls=!1,o.loop=!0,e.on('mouseover',function(){var a=e.data('hoverPlayTimeout');a||(a=setTimeout(function(){e.data('hoverPlayTimeout',null),t.callbacks.play(e,o),e.trigger('hoverPlay')},t.playDelay),e.data('hoverPlayTimeout',a))}).on('mouseout',function(){var a=e.data('hoverPlayTimeout');a&&(clearTimeout(a),e.data('hoverPlayTimeout',null)),setTimeout(function(){t.callbacks.pause(e,o),e.trigger('hoverPause')},t.pauseDelay)}))}),this},a.hoverPlay.defaults={playDelay:350,pauseDelay:0,callbacks:{play:function(a,e){e.play()},pause:function(a,e){e.pause()}}},jQuery(document).ready(function(a){a('[data-play=hover]').hoverPlay()})}(jQuery);
    jQuery('#videoID').hoverPlay();
</script>
</html>
