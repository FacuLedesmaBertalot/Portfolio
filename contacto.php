<?php
require_once __DIR__ . '/vendor/autoload.php';

// Cargar variables de entorno
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

require_once __DIR__ . '/Clases/Email.php';
use Clases\Email;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    if (!empty($_POST['telefono_falso'])) {
        header("Location: Views/index.php?status=success#contact");
        exit;
    }

    $nombre = htmlspecialchars($_POST['nombre']);
    $email_reclutador = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    if (preg_match('/https?:\/\//i', $mensaje) || preg_match('/www\./i', $mensaje)) {
        header("Location: Views/index.php?status=success#contact");
        exit;
    }

    $palabras_prohibidas = ['promo code', 'crypto', 'bitcoin', 'investment', 'casino', 'SEO'];
    foreach ($palabras_prohibidas as $palabra) {
        if (stripos($mensaje, $palabra) !== false) {
            header("Location: Views/index.php?status=success#contact");
            exit;
        }
    }

    // Preparamos y enviamos el correo
    $email = new Email($email_reclutador, $nombre, $mensaje);
    
    $resultado = $email->enviarMensaje();

    if ($resultado) {
        header("Location: Views/index.php?status=success#contact");
    } else {
        header("Location: Views/index.php?status=error#contact");
    }
    exit;
} else {
    header("Location: Views/index.php");
    exit;
}