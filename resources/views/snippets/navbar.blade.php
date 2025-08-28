<nav class="bg-blue">
    <div id="navbar">
        <img src="{{ asset('image/Logo.png') }}" alt="logotipo" width="186px" height="32.42px">
        <ul class="nav_links bg-blue">
            <li class="nav_list"><a href="{{ url('') }}" class="nav_link mona-sans">Inicio</a></li>
            <li class="nav_list"><a href="{{ url('nosotros') }}" class="nav_link mona-sans">Nosotros</a></li>
            <li class="nav_list nav_servicios">
                <a href="#" class="nav_link mona-sans" id="servicios-link">Servicios<span class="arrow"></span></a>
                <ul class="submenu" id="submenu-servicios">
                    <li><a href="{{ url('diagnostico-360') }}" class="nav_link mona-sans">Diagnóstico 360° de Ciberseguridad y Compliance</a></li>
                    <li><a href="{{ url('read-team-&-hethical-hacking') }}" class="nav_link mona-sans">Red Team y Ethical Hacking</a></li>
                    <li><a href="{{ url('alineamiento-legal') }}" class="nav_link mona-sans">Alineamiento Legal y Normativo</a></li>
                    <li><a href="{{ url('implementacion-sgsi') }}" class="nav_link mona-sans">Implementación de SGSI</a></li>
                    <li><a href="{{ url('analisis_de_riesgos') }}" class="nav_link mona-sans">Análisis de Riesgos y Planes de Acción</a></li>
                    <li><a href="{{ url('capacitacion') }}" class="nav_link mona-sans">Capacitación y Concientización</a></li>

                </ul>
            </li>
            <li class="nav_list"><a href="{{ url('contacto') }}" class="nav_link mona-sans">Contacto</a></li>
            <li class="nav_list list_telefono"><a href="" class="nav_link mona-sans">+56 9 5847 36521</a></li>
            <li class="nav_list list_correo"><a href="" class="nav_link mona-sans">contacto@ccs.cl</a></li>
        </ul>
        <a href="#" class="nav_active"><img src="{{ asset('image/menu/close.svg') }}" alt="close icono" class="nav_img" width="50px"></a>
        <a href="#navbar" class="nav_hamburger"><img src="{{ asset('image/menu/hamburger.svg') }}" alt="close icono" class="nav_img" width="50px"></a>
    </div>
</nav>

<script>
document.getElementById('servicios-link').addEventListener('click', function(e) {
    e.preventDefault();
    document.querySelector('.nav_servicios').classList.toggle('active');
});
</script>