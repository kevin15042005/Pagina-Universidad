<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NOTICIAS</title>
    <script
      src="https://kit.fontawesome.com/b263090ecf.js"
      crossorigin="anonymous"
    ></script>
    <a
      href="https://wa.me/573202837622?text=Me%20gustaría%20saber%20el%20precio%20del%20coche"
      class="whatsapp"
    ></a>
    <link rel="stylesheet" href="./Pagina.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
  </head>

  <body>
    <header>
      <h1>I.E.D.R EL ALTICO</h1>
    </header>

    <nav>
      <a href="Index.html">Inicio</a>
      <a href="Nosotros.html">Nosotros</a>
      <a href="Noticias.html">Noticias</a>
      <a href="Proyecto.html">Proyectos</a>
      <a href="Admisiones.html">Adminisiones</a>
      <a href="Sesion.html">Login</a>
    </nav>
    <!-- <div>
      <button onclick="getNews()">Noticias</button>
    </div> -->

    <div>
      <div class="noticias-padre">
        <div class="noticias">
          <div class="noticias-texto">
            <h3>NOTICIAS</h3>
          </div>
        </div>
      </div>
    </div>

    <hr />

    <div class="InformacionNoticias">
      <p>
        <b>Estaremos informados de todo lo relacionado con la institución </b>
      </p>
    </div>

    <!-- <div class="ColumnaNoticias">
      <article class="Padre-noticias">
        <div class="id1">
          <div><img src="EscudoC.jpg" alt="Escudo" /></div>
          <div>
            <h3>Nombre de la noticia</h3>
          </div>
          <div>
            <p>
              Se informará cómo qué trata la noticia y lo relevante de esta.
            </p>
          </div>
        </div>
      </article> -->
      <div class="ColumnaNoticias">
        <?php
        // // Conexión a la base de datos
        // $servername = "localhost";
        // $username = "root";
        // $password = "";
        // $dbname = "news_db";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        $sql = "SELECT title, content, image_url FROM news";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<article class="Padre-noticias">';
                echo '<div>';
                echo '<div><img src="' . $row["image_url"] . '" alt="Imagen de la noticia" /></div>';
                echo '<div><h3>' . $row["title"] . '</h3></div>';
                echo '<div><p>' . $row["content"] . '</p></div>';
                echo '</div>';
                echo '</article>';
            }
        } else {
            echo "0 resultados";
        }

        $conn->close();
        ?>
    </div>
    <a
      href="https://wa.me/573202837622?text=Me%20gustaría%20saber%20como me puedo incribir%20"
      class="whatsapp"
      target="_blank"
    >
      <i class="fa fa-whatsapp whatsapp-icon"></i
    ></a>
    <footer class="Footer">
      <div class="Horarios">
        <h3>Horarios</h3>
        <p>Prescolar: Lunes a Viernes 7 a.m a 12 p.m</p>
        <p>Primaria: Lunes a Viernes 7 a.m a 1 p.m</p>
        <p>Bachillerato 6°-9°: Lunes a Viernes 7 a.m a 1:30 p.m</p>
        <p>Bachillerato 10°-11°: Lunes a Viernes 7 a.m a 4 p.m</p>
      </div>

      <div class="Direccion">
        <h3>Direccion</h3>
        <p>
          <a
            class="linkFooter"
            href="Derecho%20de%20autor%202024%20Colegio%20El%20Altico%20Bogotá"
            >Vereda El Altico</a
          >
        </p>
        <p>Cogua Cundinamarca</p>
      </div>

      <div class="Email">
        <h3>Email</h3>
        <a class="linkFooter" href="mailto:kevin2013118@gmail.com"
          >kevin2013118@gmail.com</a
        >
      </div>

      <div class="Telefono">
        <h3>Telefono</h3>
        <p>3028025931</p>
      </div>
    </footer>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
      crossorigin="anonymous"
    ></script>
    <script src="/public/FRONT/script.js"></script>
  </body>
</html>
