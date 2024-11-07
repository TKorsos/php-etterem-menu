<!doctype html>
<html lang="hu">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/main.css">
  </head>
  <body>
    <?php include("nav.php") ?>
    
    <main class="container-lg py-5">
      <section class="row justify-content-center">
        <article class="col-auto">
          <h1>Blog</h1>
          <div>
            <?php

            foreach($this->receptek()[0] as $beturend)  {
              echo '<div>'.ucfirst($beturend).'</div>';
              foreach($this->receptek()[1] as $key => $recept) {
                if(lcfirst($recept[0]) == $beturend) {
                  echo '<li><a href="?page=receptekView&id='.$key.'">'.$recept.'</a></li>';
                }
              }
            }
            
            ?>
          </div>
        </article>
      </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>