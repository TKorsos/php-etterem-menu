<?php

echo '
    <article class="col-5">
        <h2>'.$this->adatok()[3].'. hét akciói</h2>
        <div>
            <ul class="list-group rounded-0">';
                for($menu = 0; $menu < count($this->menu()[1]); ++$menu) {
                echo '<li class="list-group-item">
                        <h5>'.$this->menu()[4][$menu].'</h5>
                        <div class="pt-3 pb-2">'.$this->menu()[1][$menu].'</div>
                        <div>'.$this->menu()[2][$menu].'</div>
                    </li>';
                }
        echo '</ul>
        </div>
    </article>
';