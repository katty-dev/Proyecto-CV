<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubicación y Contacto - Universidad Técnica de Ambato</title>
    <link rel="stylesheet" href="./css/contactanos.css">
</head>

<body>
    <div class="container">
        <h1>Ubicación y Contacto</h1>
        <div class="content">


            <!-- Formulario a la derecha -->
            <div class="form-container">
                <h2>Contáctanos</h2>
                <form action="https://formsubmit.co/edupunina12@gmail.com" method="POST">
                    <label for="nombre">Nombre completo:</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required>

                    <label for="email">Correo electrónico:</label>
                    <input type="email" id="email" name="email" placeholder="Tu correo electrónico" required>

                    <label for="telefono">Teléfono:</label>
                    <input type="tel" id="telefono" name="telefono" placeholder="Tu número de teléfono">

                    <label for="mensaje">Mensaje:</label>
                    <textarea id="mensaje" name="mensaje" placeholder="Escribe tu mensaje aquí..." rows="5"
                        required></textarea>
                    <button type="submit">Enviar mensaje</button>

                    <input type="hidden" name="_next" value=""><!--  Colocar en value a donde seu quiere redirigir -->
                    <input type="hidden" name="_captcha" value="false">
                </form>
            </div>
            <!-- Mapa a la izquierda -->
            <div class="map-container">
                <iframe
                    src="https://www.google.com.ec/maps/embed?pb=!1m18!1m12!1m3!1d1994.4515186098383!2d-78.6274315!3d-1.2695047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d38225e088295f%3A0xb16c26da66e6e4b3!2sUniversidad%20T%C3%A9cnica%20de%20Ambato!5e0!3m2!1ses-419!2sec!4v1697550281432!5m2!1ses-419!2sec"
                    loading="lazy" allowfullscreen="">
                </iframe>
            </div>
        </div>
    </div>
</body>

</html>