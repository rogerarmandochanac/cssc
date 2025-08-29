<div class="modelo">
    <h3 class="modelo-title mona-sans">MODELO DE SERVICIO</h3>
    <p class="modelo-subtitle mona-sans">Enfoque metodológico de evaluación de seguridad</p>
    <div id="slider2">
        <div><img src="{{ asset('image/modelo/entender.png') }}" alt="entender.png" width="250px"></div>
        <div><img src="{{ asset('image/modelo/evaluar.png') }}" alt="entender.png" width="250px"></div>
        <div><img src="{{ asset('image/modelo/determinar.png') }}" alt="entender.png" width="250px"></div>
    </div>
    <script>
let sliderInstance2 = null;

function handleSlider2() {
    if (window.innerWidth <= 768) {
        if (!sliderInstance2) {
            sliderInstance2 = $('#slider2').bxSlider({
                wrapperClass:"",
                slideWidth: 250,
                auto: true,
                pager: false,
                controls: false,
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