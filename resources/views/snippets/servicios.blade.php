<div id="servicios">
    <div id="servicios-frase">
        <h3 class="servicios-text01 mona-sans">SERVICIOS</h3>
        <h2 class="servicios-text02 mona-sans">Productos y soluciones</h2>
        <p class="servicios-text03 mona-sans">Te ayudamos a cumplir con tus reguladores, proteger tus sistemas y convertir la ciberseguridad en una ventaja competitiva.</p>
    </div>
    <div class="slider">
        <div><img src="{{ asset('image/servicios/diagnostico.png') }}" alt=""></div>
        <div><img src="{{ asset('image/servicios/red_team.png') }}" alt=""></div>
        <div><img src="{{ asset('image/servicios/aliniamiento.png') }}" alt=""></div>
        <div><img src="{{ asset('image/servicios/implementacion.png') }}" alt=""></div>
        <div><img src="{{ asset('image/servicios/analisis.png') }}" alt=""></div>
        <div><img src="{{ asset('image/servicios/capacitacion.png') }}" alt=""></div>
    </div>
    <div class="outside">
        <img id="slider-prev" src="{{ asset('image/servicios/previous.svg') }}" alt="">
        <img id="slider-prev" src="{{ asset('image/servicios/next.svg') }}" alt="">
    </div>
    <script>
      $(document).ready(function(){
        $(".slider").bxSlider({
            wrapperClass:"",
            captions:false,
            auto:true,
            pager:false,
            hideControlOnEnd: true,
            mode:'fade',
            nextSelector: '#slider-next',
            prevSelector: '#slider-prev',
            nextText: 'Onward →',
            prevText: '← Go back'
        });
      });
    </script>
</div>