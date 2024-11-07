<?php

echo '      
    <article class="col-sm-7 d-flex flex-column gap-3 order-0 order-sm-1">
        <h2>' . $this->adatok()[0] . 'i akcióink</h2>
        <div>
            <img src="./assets/imgs/akciok/' . $this->adatok()[1] . '.jpg" alt="' . $this->adatok()[2] . '" width="100%">
        </div>
        <h3>Reggeli</h3>
        <div>
            <ul class="list-group rounded-0">';
                echo '<li class="list-group-item">
                    <div>';
                    // echo $this->menu()[0][($this->adatok()[1] == 0 ? ($this->adatok()[1] + 6) : ($this->adatok()[1] - 1) )];
                    echo '</div>
                    <div>'.$this->menu()[0][0].'</div>
                </li>';
        echo '</ul>
        </div>
        <h3>Ebéd</h3>
        <div>
            <ul class="list-group rounded-0">';
                echo '<li class="list-group-item">
                    <div>'.$this->menu()[1][($this->adatok()[1] == 0 ? ($this->adatok()[1] + 6) : ($this->adatok()[1] - 1) )].'</div>
                    <div>'.$this->menu()[2][($this->adatok()[1] == 0 ? ($this->adatok()[1] + 6) : ($this->adatok()[1] - 1) )].'</div>
                </li>';
        echo '</ul>
        </div>
        <h3>Vacsora</h3>
        <div>
            <ul class="list-group rounded-0">';
                echo '<li class="list-group-item">
                    <div>';
                    // echo $this->menu()[3][($this->adatok()[1] == 0 ? ($this->adatok()[1] + 6) : ($this->adatok()[1] - 1) )];
                    echo '</div>
                    <div>'.$this->menu()[3][0].'</div>
                </li>';
        echo '</ul>
        </div>
    </article>
';
