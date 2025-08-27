<div class="valores">
    <h3 class="mona-sans">Nuestros <span>valores</span></h3>
    <div id="slider3">
        <div><img src="{{ asset('../image/nosotros/valores/confidencialidad.png') }}" alt=""></div>
        <div><img src="{{ asset('../image/nosotros/valores/integridad.png') }}" alt=""></div>
        <div><img src="{{ asset('../image/nosotros/valores/calidad.png') }}" alt=""></div>
        <div><img src="{{ asset('../image/nosotros/valores/responsabilidad.png') }}" alt=""></div>
        <div><img src="{{ asset('../image/nosotros/valores/adaptabilidad.png') }}" alt=""></div>
         <div><img src="{{ asset('../image/nosotros/valores/mejora_continua.png') }}" alt=""></div>
    </div>
    <script>
      $(document).ready(function(){
        $('#slider3').bxSlider({
            slideWidth:328,
            slideHeight:326,
            wrapperClass:"",
            auto: true,
            pager:false,
            controls:false,
        });
      });
    </script>
</div>