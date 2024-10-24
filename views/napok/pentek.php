<?php

echo '
        <header class="container-lg py-5">
            <section class="row">
                <article class="col-4">
                <h2>Heti újdonságok</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus nemo ipsam quisquam praesentium odio porro accusamus doloribus saepe tempora est, libero soluta vitae rem necessitatibus dolores nihil laudantium illum aspernatur.
                </p>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil laboriosam perspiciatis blanditiis doloremque eveniet aut tempore! Ad maiores maxime, voluptate quae soluta similique, excepturi nam eos sint eaque vitae! Perferendis modi atque dolores maxime in reprehenderit hic culpa facilis porro qui, aliquid et ducimus.
                </p>
                </article>
                <article class="col-8">
                <h2>'.$this->adatok()[0].'i akcióink</h2>
                <div>
                    <img src="./assets/imgs/'.$this->adatok()[1].'.jpg" alt="'.$this->adatok()[2].'" width="100%">
                </div>
                </article>
            </section>
        </header>
';