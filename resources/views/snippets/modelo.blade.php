<div class="modelo">
    <h3 class="modelo-title mona-sans">MODELO DE SERVICIO</h3>
    <p class="modelo-subtitle mona-sans">Enfoque metodológico de evaluación de seguridad</p>
    <div class="slider2-container" style="display: flex; align-items: center; justify-content: center;">
        <div id="slider2-prev"></div>
        <div id="slider2">
            <div><img src="{{ asset('image/modelo/entender.png') }}" alt="entender.png" width="250px"></div>
            <div><img src="{{ asset('image/modelo/evaluar.png') }}" alt="entender.png" width="250px"></div>
            <div><img src="{{ asset('image/modelo/determinar.png') }}" alt="entender.png" width="250px"></div>
        </div>
        <div id="slider2-next"></div>
    </div>
    <script>
let sliderInstance2 = null;

function handleSlider2() {
    if (window.innerWidth <= 768) {
        if (!sliderInstance2) {
            sliderInstance2 = $('#slider2').bxSlider({
                slideWidth: 250,
                pager: false,
                prevSelector: '#slider2-prev',
                nextSelector: '#slider2-next',
                prevText: '<img src="{{ asset('image/modelo/previous.png') }}" alt="prev">',
                nextText: '<img src="{{ asset('image/modelo/next.png') }}" alt="next">',
                controls: true,
            });
        }
    } else {
        if (sliderInstance2) {
            sliderInstance2.destroySlider();
            sliderInstance2 = null;
        }
    }
}

$(document).ready(function(){
    handleSlider2();
    $(window).resize(handleSlider2);
});
</script>
</div>