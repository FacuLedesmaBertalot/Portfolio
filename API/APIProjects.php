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
            "title" => "Custom Backend Blog",
            "desc" => "A simple yet powerful blog system with post management and a lightweight SQLite database.",
            "long_desc" => "Development of a blog backend that allows creating, reading, updating, and deleting (CRUD) articles. Pure PHP was used for server logic and SQLite as the database for its simplicity and portability. The frontend is built with TailwindCSS for a fast and modern design.",
            "tech" => "PHP, SQLite, TailwindCSS",
            "img" => "../assets/img/fondo.jpeg",
            "link_github" => "https://github.com/FacuLedesmaBertalot/directorioPaginaProgramacionEstatica",
            "link_live" => "#"
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
            "title" => "Blog con Backend Propio",
            "desc" => "Un sistema de blog simple pero potente, con gestión de posts y una base de datos ligera SQLite.",
            "long_desc" => "Desarrollo de un backend para un blog que permite crear, leer, actualizar y eliminar (CRUD) artículos. Se utilizó PHP puro para la lógica del servidor y SQLite como base de datos por su simplicidad y portabilidad. El frontend está maquetado con TailwindCSS para un diseño rápido y moderno.",
            "tech" => "PHP, SQLite, TailwindCSS",
            "img" => "../assets/img/fondo.jpeg",
            "link_github" => "https://github.com/FacuLedesmaBertalot/directorioPaginaProgramacionEstatica",
            "link_live" => "#"
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
