<nav role="navigation">
<ul class="menu cf">
<?php foreach($pages->listed() as $p): ?>
<li><a <?php e($p->isOpen(), 'class="active" ') ?>href="<?= $p->url() ?>/"><?= html($p->title()) ?></a></li>
<?php endforeach ?>
<li class="home-link" aria-hidden="true"><a href="/"><img src="/assets/images/dec/circle-menu.svg" height="12" width="12" alt="" /></a></li>
</ul>
</nav>
