<div class="valores">
    <h3 class="mona-sans">Nuestros <span>valores</span></h3>
    <div class="slider3-container" style="display: flex; flex-direction: row; align-items: center; justify-content: center;">
        <div id="slider3-prev"></div>    
        <div id="slider3">
            <div><img src="{{ asset('image/nosotros/valores/confidencialidad.png') }}" alt=""></div>
            <div><img src="{{ asset('image/nosotros/valores/integridad.png') }}" alt=""></div>
            <div><img src="{{ asset('image/nosotros/valores/calidad.png') }}" alt=""></div>
            <div><img src="{{ asset('image/nosotros/valores/responsabilidad.png') }}" alt=""></div>
            <div><img src="{{ asset('image/nosotros/valores/adaptabilidad.png') }}" alt=""></div>
            <div><img src="{{ asset('image/nosotros/valores/mejora_continua.png') }}" alt=""></div>
        </div>
        <div id="slider3-next"></div>
    </div>
    <script>
      let sliderInstance3 = null;

      function handleSlider3() {
          if (window.innerWidth <= 1020) {
              if (!sliderInstance3) {
                  sliderInstance3 = $('#slider3').bxSlider({
                      slideWidth:328,
                      slideHeight:326,
                      auto: false,
                      pager:false,
                      prevSelector: '#slider3-prev',
                      nextSelector: '#slider3-next',
                      prevText: '<img src="{{ asset('image/nosotros/valores/prev.png') }}" alt="prev">',
                      nextText: '<img src="{{ asset('image/nosotros/valores/next.png') }}" alt="next">',
                      controls:true,
                  });
              }
          } else {
              if (sliderInstance3) {
                  sliderInstance3.destroySlider();
                  sliderInstance3 = null;
              }
          }
      }

      $(document).ready(function(){
          handleSlider3();
          $(window).resize(handleSlider3);
      });
    </script>
</div>