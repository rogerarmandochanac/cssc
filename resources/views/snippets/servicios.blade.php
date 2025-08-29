<div id="servicios">
    <div id="servicios-frase">
        <h3 class="servicios-text01 mona-sans">SERVICIOS</h3>
        <h2 class="servicios-text02 mona-sans">Productos y soluciones</h2>
        <p class="servicios-text03 mona-sans">Te ayudamos a cumplir con tus reguladores, proteger tus sistemas y convertir la ciberseguridad en una ventaja competitiva.</p>
    </div>
    <div id="slider">
        <div class="slide"><img src="{{ asset('image/servicios/diagnostico.png') }}" alt="" width="314px"></div>
        <div class="slide"><img src="{{ asset('image/servicios/red_team.png') }}" alt="" width="314px"></div>
        <div class="slide"><img src="{{ asset('image/servicios/aliniamiento.png') }}" alt="" width="314px"></div>
        <div class="slide"><img src="{{ asset('image/servicios/implementacion.png') }}" alt="" width="314px"></div>
        <div class="slide"><img src="{{ asset('image/servicios/analisis.png') }}" alt="" width="314px"></div>
        <div class="slide"><img src="{{ asset('image/servicios/capacitacion.png') }}" alt="" width="314px"></div>
    </div>

    <div class="outside">
        <span id="slider-prev"></span>
        <span id="slider-next"></span> 
    </div>
    <script>
let sliderInstance = null;

function handleSlider() {
    if (window.innerWidth <= 768) {
        if (!sliderInstance) {
            sliderInstance = $("#slider").bxSlider({
                wrapper_class:"slider",
                slideWidth:314,
                wrapperClass:"",
                auto:true,
                pager:false,
                mode:'fade',
                nextSelector: '#slider-next',
                prevSelector: '#slider-prev',
                nextText: '<img src="{{ asset('image/servicios/next.svg') }}" alt="">',
                prevText: '<img src="{{ asset('image/servicios/previous.svg') }}" alt="">'
            });
        }
    } else {
        if (sliderInstance) {
            sliderInstance.destroySlider();
            sliderInstance = null;
        }
    }
}

$(document).ready(function(){
    handleSlider();
    $(window).resize(handleSlider);
});
</script>
</div>