<div class="equipo">
    <h1 class="mona-sans">nuestro equipo</h1>
    <p class="mona-sans">Cybersecurity Compliance Solutions (CCS) nace de la experiencia combinada de tres profesionales con más de 30 años en el sector público y privado.</p>
    <div class="equipo-cards">
        <div class="card">
            <img class="card-img" src="{{ asset('image/nosotros/equipo/hugo_miranda.png') }}" alt="Hugo Miranda">
            <div class="card-body">
                <h3 class="mona-sans">Hugo Miranda</h3>
                <p class="mona-sans">Gerente General</p>
            </div>
            <div class="card-footer">
                <a href=""><img src="{{ asset('image/nosotros/equipo/inkedin.png') }}" alt=""></a>
                <a href="" id="btn-cv-hugo"><img src="{{ asset('image/nosotros/equipo/cv.png') }}" alt=""></a>
            </div>
        </div>
        <div class="card">
            <img class="card-img" src="{{ asset('image/nosotros/equipo/equipo_user.png') }}" alt="Hugo Miranda">
            <div class="card-body">
                <h3 class="mona-sans">Paolo Norambuena</h3>
                <p class="mona-sans">Gerente de Ciberseguridad Ofensiva</p>
            </div>
            <div class="card-footer">
                <a href=""><img src="{{ asset('image/nosotros/equipo/inkedin.png') }}" alt=""></a>
                <a href="" id="btn-cv-paolo"><img src="{{ asset('image/nosotros/equipo/cv.png') }}" alt=""></a>
            </div>
        </div>
        <div class="card">
            <img class="card-img" src="{{ asset('image/nosotros/equipo/equipo_user.png') }}" alt="Hugo Miranda">
            <div class="card-body">
                <h3 class="mona-sans">Nilvia Sepúlveda</h3>
                <p class="mona-sans">Gerente de Desarrollo Seguro y Cumplimiento Normativo</p>
            </div>
            <div class="card-footer">
                <a href=""><img src="{{ asset('image/nosotros/equipo/inkedin.png') }}" alt=""></a>
                <a href="" id="btn-cv-nilvia"><img src="{{ asset('image/nosotros/equipo/cv.png') }}" alt=""></a>
            </div>
        </div>
    </div>
</div>

<!-- Popup modal -->
<div id="cv-hugo-popup" class="equipo-popup" style="display:none;">
    <div class="equipo-popup-content">
        <span class="equipo-popup-close" id="close-hugo">&times;</span>
        <h2 class="mona-sans">Hugo Miranda</h2>
        <h6 class="mona-sans">Gerente General</h6>
        <p class="mona-sans">Profesional con más de 30 años de experiencia en transformación digital, gestión tecnológica y ciberseguridad. Ha liderado equipos en instituciones públicas y privadas, incluyendo la Policía de Investigaciones de Chile. Fundador de CCS, combina la visión estratégica con la aplicación práctica de marcos normativos como ISO 27001 y NIST.
        <br><br><b>Formación y certificaciones:</b> Ingeniero en Informática, Magíster en Ciberseguridad y en Gestión de TI, Diplomados en ISO 27001, Compliance, Hacking Ético, Innovación y Gobernanza.</p>
    </div>
</div>

<div id="cv-paolo-popup" class="equipo-popup" style="display:none;">
    <div class="equipo-popup-content">
        <span class="equipo-popup-close" id="close-paolo">&times;</span>
        <h2 class="mona-sans">Paolo Norambuena</h2>
        <h6 class="mona-sans">Gerente de Ciberseguridad Ofensiva</h6>
        <p class="mona-sans">Ingeniero en Informática con mención en Ciberseguridad y Magíster en Ciberseguridad, con más de 20 años de trayectoria en informática. Especialista en ciberseguridad ofensiva, análisis de amenazas y respuesta a incidentes en entornos corporativos y críticos. Docente universitario en áreas de cloud, seguridad y gestión tecnológica.
        <br><br><b>Formación y certificaciones:</b> Magíster en Ciberseguridad (UAI), Diplomados en Ethical Hacking y Gestión de Ciberseguridad, certificaciones en ISO 27001, NIST y administración de infraestructura en cloud (AWS, Azure, GCP).</p>
    </div>
</div>

<div id="cv-nilvia-popup" class="equipo-popup" style="display:none;">
    <div class="equipo-popup-content">
        <span class="equipo-popup-close" id="close-nilvia">&times;</span>
        <h2 class="mona-sans">Nilvia Sepúlveda</h2>
        <h6 class="mona-sans">Gerente de Desarrollo Seguro y Cumplimiento Normativo</h6>
        <p class="mona-sans">Ingeniera en Informática con sólida experiencia como desarrolladora full stack en entornos PHP, Laravel, Python y Vue. Ha trabajado en modernización tecnológica, automatización de procesos y despliegues en la nube (AWS, Vultr). Destaca por su dominio en metodologías ágiles y DevSecOps, actualmente profundizando en esta especialidad.
        <br><br><b>Formación y certificaciones:</b> Ingeniera en Informática (IACC), Analista Programador (DUOC), Diplomado en DevSecOps (USACH).</p>
    </div>
</div>

<!-- Popup modal -->

<script>

    document.getElementById('btn-cv-hugo').addEventListener('click', function(e){
            e.preventDefault();
            document.getElementById('cv-hugo-popup').style.display = 'flex';
        });
    
    document.getElementById('btn-cv-paolo').addEventListener('click', function(e){
        e.preventDefault();
        document.getElementById('cv-paolo-popup').style.display = 'flex';
    });

    document.getElementById('btn-cv-nilvia').addEventListener('click', function(e){
        e.preventDefault();
        document.getElementById('cv-nilvia-popup').style.display = 'flex';
    });

    document.getElementById('close-hugo').addEventListener('click', function(){
        document.getElementById('cv-hugo-popup').style.display = 'none';
    });

    document.getElementById('close-paolo').addEventListener('click', function(){
        document.getElementById('cv-paolo-popup').style.display = 'none';
    });

    document.getElementById('close-nilvia').addEventListener('click', function(){
        document.getElementById('cv-nilvia-popup').style.display = 'none';
    });

    // Opcional: cerrar al hacer click fuera del contenido
    document.getElementById('cv-hugo-popup').addEventListener('click', function(e){
        if(e.target === this){
            this.style.display = 'none';
        }
    });
        document.getElementById('cv-paolo-popup').addEventListener('click', function(e){
        if(e.target === this){
            this.style.display = 'none';
        }
    });
        document.getElementById('cv-nilvia-popup').addEventListener('click', function(e){
        if(e.target === this){
            this.style.display = 'none';
        }
    });
</script>