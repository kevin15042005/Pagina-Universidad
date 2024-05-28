<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estiloCRUD.css">
    <title>CRUD Noticias</title>
</head>
<body>
    <nav>
        <a href="Index.html">Inicio</a>
        <div class="title">Panel de Administración de Noticias</div>
        <a href="Sesion.html">Login</a>
    </nav>
    
    <h1>Administrar Noticias</h1>
    
    <h2>Crear/Actualizar Noticia</h2>
    <form method="POST" action="crud.php">
        <input type="hidden" name="id" id="news_id">
        <label for="title">Título:</label>
        <input type="text" name="title" id="title" required>
        <label for="content">Contenido:</label>
        <textarea name="content" id="content" required></textarea>
        <label for="image_url">URL de la Imagen:</label>
        <input type="text" name="image_url" id="image_url" required>
        <button type="submit" name="save">Guardar</button>
    </form>

    <h2>Buscar Noticia</h2>
    <form method="GET" action="crud.php">
        <label for="search">Buscar por Título:</label>
        <input type="text" name="search" id="search">
        <button type="submit">Buscar</button>
    </form>

    <h2>Lista de Noticias</h2>
    <div class="news-container">
        <?php
        if (isset($_GET['search'])) {
            $search = $_GET['search'];
            $sql = "SELECT * FROM news WHERE title LIKE '%$search%'";
        } else {
            $sql = "SELECT * FROM news";
        }
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='news-item'>";
                echo "<h2>" . $row["title"] . "</h2>";
                echo "<p>" . $row["content"] . "</p>";
                echo "<img src='" . $row["image_url"] . "' alt='News Image'>";
                echo "<form method='POST' action='crud.php'>";
                echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
                echo "<button type='submit' name='edit'>Editar</button>";
                echo "<button type='submit' name='delete'>Eliminar</button>";
                echo "</form>";
                echo "</div>";
            }
        } else {
            echo "No hay noticias disponibles.";
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['save'])) {
                $id = $_POST['id'];
                $title = $_POST['title'];
                $content = $_POST['content'];
                $image_url = $_POST['image_url'];

                if (empty($id)) {
                    $sql = "INSERT INTO news (title, content, image_url) VALUES ('$title', '$content', '$image_url')";
                } else {
                    $sql = "UPDATE news SET title='$title', content='$content', image_url='$image_url' WHERE id=$id";
                }

                if ($conn->query($sql) === TRUE) {
                    header("Location: crud.php");
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }

            if (isset($_POST['delete'])) {
                $id = $_POST['id'];
                $sql = "DELETE FROM news WHERE id=$id";

                if ($conn->query($sql) === TRUE) {
                    header("Location: crud.php");
                } else {
                    echo "Error deleting record: " . $conn->error;
                }
            }

            if (isset($_POST['edit'])) {
                $id = $_POST['id'];
                $sql = "SELECT * FROM news WHERE id=$id";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo "<script>
                        document.getElementById('news_id').value = '".$row['id']."';
                        document.getElementById('title').value = '".$row['title']."';
                        document.getElementById('content').value = '".$row['content']."';
                        document.getElementById('image_url').value = '".$row['image_url']."';
                    </script>";
                }
            }
        }

        $conn->close();
        ?>
    </div>
</body>
</html>
