<?php

$idioma_actual = $_SESSION['lang'] ?? 'es';

if ($idioma_actual === 'en') {
    // ==========================================
    // ARRAY DE PROYECTOS EN INGLÉS
    // ==========================================
    $projects = [
        [
            "title" => "Barbershop Appointment System",
            "desc" => "A functional web application to optimize appointment scheduling, allowing clients to register and book appointments intuitively.",
            "long_desc" => "<strong>BarberShop App</strong> is a complete solution to modernize appointment management in barbershops. The platform features a secure authentication system for clients and administrators. Clients can view services, select an available time on a dynamic calendar, and confirm their appointment. The admin panel allows managing all appointments, services, and schedules. The frontend is fully responsive, ensuring an optimal user experience.",
            "tech" => "PHP, MySQL, JavaScript, SASS, Composer, NPM",
            "img" => "../assets/img/fondo.jpeg",
            "link_github" => "https://github.com/FacuLedesmaBertalot/DevWebCamp",
            "link_live" => "#"
        ],
        [
            "title" => "DevWebCamp",
            "desc" => "Full-Stack platform for conference and event management, built with a custom PHP MVC framework and MySQL.",
            "long_desc" => "A complete web application developed from scratch using a custom Object-Oriented PHP 8 MVC framework. It allows users to register with hashed passwords, recover accounts, purchase tickets via integrated payment gateways, and build itineraries with real-time capacity validation. It features a session-protected admin dashboard to manage CRUD operations for speakers and events, optimized with native database pagination.",
            "tech" => "PHP 8, MySQL, MVC, JavaScript (ES6+), Fetch API, SASS, Gulp",
            "img" => "../assets/img/DevWebCamp.png",
            "link_github" => "https://github.com/FacuLedesmaBertalot/DevWebCamp",
            "link_live" => "https://devwebcamp.devledesmabertalot.com/"
        ],
        [
            "title" => "UpTask - Project Manager",
            "desc" => "Advanced task and project management platform built with MVC architecture and automated deployment.",
            "long_desc" => "Full Stack application for project management. It features a custom MVC architecture, robust security with hashed passwords, account verification via email (SMTP), and MySQL database integration. The frontend workflow was optimized using SASS, Gulp, and Webpack for professional-grade styling and performance.",
            "tech" => "PHP (MVC), MySQL, SASS, JavaScript, Gulp, Webpack",
            "img" => "../assets/img/upTask.png",
            "link_github" => "https://github.com/FacuLedesmaBertalot/UpTask_MVC",
            "link_live" => "https://uptask.devledesmabertalot.com"
        ],
        [
            "title" => "Salon Appointment System",
            "desc" => "A functional web application to optimize appointment scheduling, allowing clients to register and book appointments intuitively.",
            "long_desc" => "<strong>BarberShop App</strong> is a complete solution to modernize appointment management in hair salons. The platform features a secure authentication system for clients and administrators. Clients can view services, select an available time on a dynamic calendar, and confirm their appointment. The admin panel allows managing all appointments, services, and schedules. The frontend is fully responsive, ensuring an optimal user experience.",
            "tech" => "PHP, MySQL, JavaScript, SASS, Composer, NPM",
            "img" => "../assets/img/fondo.jpeg",
            "link_github" => "https://github.com/FacuLedesmaBertalot/DirectorioAppSalon",
            "link_live" => "#"
        ],
        [
            "title" => "Regal Realty - Real Estate Platform",
            "desc" => "Static web application for a real estate agency, focused on property presentation, DOM manipulation, and user interactivity.",
            "tech" => "HTML5, CSS3, JavaScript (Vanilla)",
            "img" => "../assets/img/RegalRealty.png",
            "link_github" => "https://github.com/FacuLedesmaBertalot/directorioPaginaProgramacionEstatica",
            "link_live" => "https://regalrealty.devledesmabertalot.com/"
        ]
    ];
} else {
    // ==========================================
    // ARRAY DE PROYECTOS EN ESPAÑOL
    // ==========================================
    $projects = [
        [
            "title" => "Sistema de Citas para Peluquería",
            "desc" => "Una aplicación web funcional para optimizar la gestión de turnos, permitiendo a los clientes registrarse y agendar citas de forma intuitiva.",
            "long_desc" => "<strong>BarberShop App</strong> es una solución completa para modernizar la gestión de citas en peluquerías. La plataforma cuenta con un sistema de autenticación seguro para clientes y administradores. Los clientes pueden ver los servicios, seleccionar un horario disponible en un calendario dinámico y confirmar su cita. El panel de administración permite gestionar todos los turnos, servicios y horarios. El frontend es totalmente responsivo, asegurando una experiencia de usuario óptima.",
            "tech" => "PHP, MySQL, JavaScript, SASS, Composer, NPM",
            "img" => "../assets/img/fondo.jpeg",
            "link_github" => "https://github.com/FacuLedesmaBertalot/DevWebCamp",
            "link_live" => "#"
        ],
        [
            "title" => "DevWebCamp",
            "desc" => "Plataforma Full-Stack para la gestión de conferencias y eventos, construida con un framework MVC propio en PHP y MySQL.",
            "long_desc" => "Aplicación web completa desarrollada desde cero construyendo un Framework MVC propio en PHP 8 aplicando POO. Permite a los usuarios registrarse con contraseñas hasheadas, recuperar accesos, comprar boletos integrando pasarelas de pago y armar itinerarios con validación de cupos en tiempo real. Cuenta con un panel de administración protegido por sesiones para gestionar operaciones CRUD de ponentes y eventos, optimizado con paginación nativa desde la base de datos.",
            "tech" => "PHP 8, MySQL, MVC, JavaScript (ES6+), Fetch API, SASS, Gulp",
            "img" => "../assets/img/DevWebCamp.png",
            "link_github" => "https://github.com/FacuLedesmaBertalot/DevWebCamp",
            "link_live" => "https://devwebcamp.devledesmabertalot.com/"
        ],
        [
            "title" => "UpTask - Administrador de Proyectos",
            "desc" => "Plataforma avanzada de gestión de tareas y proyectos con arquitectura MVC y despliegue automatizado.",
            "long_desc" => "Desarrollo de una aplicación Full Stack para la gestión de proyectos. Implementa una arquitectura MVC personalizada, seguridad con contraseñas hasheadas, validación de cuentas vía email (SMTP) y una base de datos robusta en MySQL. El diseño se gestionó con SASS y Gulp para un flujo de trabajo profesional.",
            "tech" => "PHP (MVC), MySQL, SASS, JavaScript, Gulp, Webpack",
            "img" => "../assets/img/upTask.png",
            "link_github" => "https://github.com/FacuLedesmaBertalot/UpTask_MVC",
            "link_live" => "https://uptask.devledesmabertalot.com"
        ],
        [
            "title" => "Sistema de Citas para Peluquería",
            "desc" => "Una aplicación web funcional para optimizar la gestión de turnos, permitiendo a los clientes registrarse y agendar citas de forma intuitiva.",
            "long_desc" => "<strong>BarberShop App</strong> es una solución completa para modernizar la gestión de citas en peluquerías. La plataforma cuenta con un sistema de autenticación seguro para clientes y administradores. Los clientes pueden ver los servicios, seleccionar un horario disponible en un calendario dinámico y confirmar su cita. El panel de administración permite gestionar todos los turnos, servicios y horarios. El frontend es totalmente responsivo, asegurando una experiencia de usuario óptima.",
            "tech" => "PHP, MySQL, JavaScript, SASS, Composer, NPM",
            "img" => "../assets/img/fondo.jpeg",
            "link_github" => "https://github.com/FacuLedesmaBertalot/DirectorioAppSalon",
            "link_live" => "#"
        ],
        [
            "title" => "Regal Realty - Plataforma Inmobiliaria",
            "desc" => "Aplicación web estática para una inmobiliaria ficticia, enfocada en la presentación de propiedades, manipulación del DOM e interactividad del usuario.",
            "tech" => "HTML5, CSS3, JavaScript (Vanilla)",
            "img" => "../assets/img/RegalRealty.png",
            "link_github" => "https://github.com/FacuLedesmaBertalot/directorioPaginaProgramacionEstatica",
            "link_live" => "https://regalrealty.devledesmabertalot.com/"
        ]
    ];
}
