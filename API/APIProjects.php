<?php

$idioma_actual = $_SESSION['lang'] ?? 'es';

if ($idioma_actual === 'en') {
    // ==========================================
    // ARRAY DE PROYECTOS EN INGLÉS
    // ==========================================
    $projects = [
[
            "title" => "Veterinary Patient Manager",
            "desc" => "Web application focused on efficiently managing the registration and tracking of veterinary patients and their owners.",
            "long_desc" => "<strong>APV (Veterinary Patient Manager)</strong> is a platform designed to streamline daily administration in veterinary clinics. It features an authentication-protected dashboard, allowing administrators to register, edit, and delete detailed information about pets, symptoms, and owners. The interface stands out for being clean, fast, and fully responsive, ensuring optimal usability across all devices.",
            "tech" => "Node.js, Express, React, Vite, Tailwind CSS",
            "img" => "../assets/img/pacientesVeterinaria.png", 
            "link_github" => "https://github.com/FacuLedesmaBertalot/PacientesVeterinaria",
            "link_live" => "https://pacientesveterinaria.devledesmabertalot.com/"
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
            "title" => "Loan Calculator",
            "desc" => "A modern and functional web application built with React and Vite, designed to calculate loan installments in real-time with an intuitive interface.",
            "long_desc" => "Loan Calculator is an interactive tool designed to provide a seamless and dynamic loan calculation experience. The application allows users to select loan amounts and terms through intuitive controls, displaying payment breakdowns and total costs instantly. It features a fully responsive designbuilt with Tailwind CSS, ensuring an optimal user experience across all devices. The project highlights efficient state management and React effects to deliver precise, real-time calculations.",
            "tech" => "React, Vite, Tailwind CSS, JavaScript, Node.js, NPM",
            "img" => "../assets/img/cotizadorPrestamos.png",
            "link_github" => "https://github.com/FacuLedesmaBertalot/CotizadorPrestamos",
            "link_live" => "https://fnlbcotizadorprestamos.netlify.app/"
        ],
        [
            "title" => "Regal Realty - Real Estate Platform",
            "desc" => "Static web application for a real estate agency, focused on property presentation, DOM manipulation, and user interactivity.",
            "tech" => "HTML5, CSS3, JavaScript (Vanilla)",
            "img" => "../assets/img/RegalRealty.png",
            "link_github" => "https://github.com/FacuLedesmaBertalot/directorioPaginaProgramacionEstatica",
            "link_live" => "https://fnlbcotizadorprestamos.netlify.app/"
        ]
    ];
} else {
    // ==========================================
    // ARRAY DE PROYECTOS EN ESPAÑOL
    // ==========================================
    $projects = [
[
            "title" => "Administrador de Pacientes de Veterinaria",
            "desc" => "Aplicación web enfocada en gestionar el registro y seguimiento de pacientes veterinarios y sus dueños de forma ágil.",
            "long_desc" => "<strong>APV (Administrador de Pacientes de Veterinaria)</strong> es una plataforma diseñada para facilitar la administración diaria en clínicas veterinarias. Cuenta con un panel protegido por autenticación, permitiendo a los administradores registrar, editar y eliminar datos detallados de mascotas, síntomas y propietarios. La interfaz destaca por ser limpia, rápida y completamente responsiva, asegurando un uso óptimo desde cualquier dispositivo.",
            "tech" => "Node.js, Express, React, Vite, Tailwind CSS",
            "img" => "../assets/img/pacientesVeterinaria.png", 
            "link_github" => "https://github.com/FacuLedesmaBertalot/PacientesVeterinaria",
            "link_live" => "https://pacientesveterinaria.devledesmabertalot.com/"
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
            "title" => "Cotizador de Préstamos",
            "desc" => "Una aplicación web moderna y funcional desarrollada con React y Vite, diseñada para calcular cuotas de préstamos en tiempo real con una interfaz intuitiva.",
            "long_desc" => "Cotizador de Préstamoses una herramienta interactiva diseñada para facilitar el cálculo de préstamos de forma dinámica. La aplicación permite a los usuarios seleccionar el monto y el plazo mediante controles intuitivos, visualizando el desglose de pagos y el total a pagar de manera instantánea. Implementa un diseño totalmente responsivocon Tailwind CSS, garantizando una experiencia fluida en cualquier dispositivo. Se destaca por el manejo eficiente del estado y efectos en React para ofrecer cálculos precisos en tiempo real.",
            "tech" => "React, Vite, Tailwind CSS, JavaScript, Node.js, NPM",
            "img" => "../assets/img/cotizadorPrestamos.png",
            "link_github" => "https://github.com/FacuLedesmaBertalot/CotizadorPrestamos",
            "link_live" => "https://fnlbcotizadorprestamos.netlify.app/"
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
