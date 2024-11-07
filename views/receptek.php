<!doctype html>
<html lang="hu">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $this->receptek()[1][$_GET["id"]] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <?php include("nav.php") ?>
    
    <main class="container-lg">
      <section class="row">
        <article class="col">
          <h1><?php echo $this->receptek()[1][$_GET["id"]] ?></h1>
          <div>
            <?php

            echo '<div>
                    <img src="./assets/imgs/receptek/'.$_GET["id"][0].'/' . $_GET["id"] . '.png" alt="' . $this->receptek()[1][$_GET["id"]] . '" width="100%">
                  </div>';
            
            ?>
          </div>
        </article>
      </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>