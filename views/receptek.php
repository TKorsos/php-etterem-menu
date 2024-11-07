<!doctype html>
<html lang="hu">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $this->receptek()[1][$_GET["id"]] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/main.css">
  </head>
  <body>
    <?php include("nav.php") ?>
    
    <main class="container-lg py-5">
      <section class="row">
        <article class="col d-flex flex-column gap-3">
          <div>
            <h1><?php echo $this->receptek()[1][$_GET["id"]] ?></h1>
            <?php

            echo '<div>
                    <img src="./assets/imgs/receptek/'.$_GET["id"][0].'/' . $_GET["id"] . '.png" alt="' . $this->receptek()[1][$_GET["id"]] . '" width="100%">
                  </div>';
            
            ?>
          </div>
          <div>
            <h3>Hozzávalók:</h3>
            <div>
              <ul class="list-group">
                <?php

                  foreach($this->receptSeged()[0] as $key => $hozzavalo) {
                    echo '<li class="list-group-item border-0">'.$hozzavalo.'</li>';
                  }
                
                ?>
              </ul>
            </div>
          </div>
          <div>
            <h3>Elkészítés:</h3>
            <div>
              <ol class="list-group list-group-numbered">
                <?php

                foreach($this->receptSeged()[1] as $key => $elkeszites) {
                  echo '<li class="list-group-item border-0">'.$elkeszites.'.</li>';
                }
                
                ?>
              </ol>
            </div>
          </div>
        </article>
      </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>