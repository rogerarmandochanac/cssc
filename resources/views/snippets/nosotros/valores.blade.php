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

      let sliderInstance3 = null;

function handleSlider3() {
    if (window.innerWidth <= 1020) {
        if (!sliderInstance3) {
            sliderInstance3 = $('#slider3').bxSlider({
            slideWidth:328,
            slideHeight:326,
            wrapperClass:"",
            auto: true,
            pager:false,
            controls:false,
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