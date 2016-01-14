<nav class="secondary">
    <div class="width-container">
        <ul class="horizontal clear">
            <?php foreach ($menu['secondary']['left'] as $i => $value) {?>
                <li <?=isActive($i, true);?>>
                    <a href="/<?=$i;?>">
                        <?=$value;?>
                    </a>
                </li>
            <?php } ?>
            <?php foreach ($menu['secondary']['right'] as $i => $value) {?>
                <li class="right <?=isActive($i);?>">
                    <a href="/<?=$i;?>">
                        <?=$value;?>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>
</nav>