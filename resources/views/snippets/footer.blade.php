<footer>
    <div class="logo">
        <img class="footer-logo" src="{{ asset('image/footer-logo.png') }}" alt="">
        <p class="mona-sans frase">Protegiendo tu negocio con soluciones éticas, técnicas y alineadas a la normativa.</p>
    </div>
    <div class="footer-text">
        <ul id="footer-menu"  class="mona-sans">
            <li>Inicio</li>
            <li>Nosotros</li>
            <li>Servicio</li>
            <li>Contacto</li>
        </ul>
        <div class="productos-y-servicios">
            <p class="productos-y-servicios-title mona-sans">Productos y Servicios</p>
            <ul class="footer-productos-y-servicios">
                <li><a href="{{ url('diagnostico-360') }}" class="mona-sans">Diagnóstico 360° de Ciberseguridad y Compliance</a></li>
                <li><a href="{{ url('read-team-&-hethical-hacking') }}" class="mona-sans">Red Team y Ethical Hacking</a></li>
                <li><a href="{{ url('alineamiento-legal') }}" class="mona-sans">Alineamiento Legal y Normativo</a></li>
                <li><a href="{{ url('implementacion-sgsi') }}" class="mona-sans">Implementación de SGSI</a></li>
                <li><a href="{{ url('analisis_de_riesgos') }}" class="mona-sans">Análisis de Riesgos y Planes de Acción</a></li>
                <li><a href="{{ url('capacitacion') }}" class="mona-sans">Capacitación y Concientización</a></li>
            </ul>
        </div>
        <div class="vias-contacto">
            <p class="vias-contacto-title mona-sans">Vias de contacto</p>
            <ul id="footer-contacto"  class="mona-sans">
                <li class="list-item-telefono">+56 9 5847 36521</li>
                <li class="list-item-correo">contacto@ccs.cl</li>
                <li class="list-item-ubicacion">Doctor Manuel Barros Borgoño 71, Santiago, Chile</li>
            </ul>
        </div>
        <div class="sociales">
            <p class="sociales-title mona-sans">Redes Sociales</p>
            <div class="footer-sociales">
                <img src="{{ asset('image/footer/inkedin.png') }}" alt="inkedin">
                <img class="footer-instagram" src="{{ asset('image/footer/instagram.png') }}" alt="instagram">
            </div>
        </div>
    </div>
    <p class="footer-licencia mona-sans">© 2025 Cybersecurity Compliance Solutions (CCS). Todos los derechos reservados.</p>
</footer>