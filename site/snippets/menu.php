
      <nav role="navigation">

        <ul class="menu cf">
        <?php foreach($pages->visible() as $p): ?>
  <li><a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a></li>
        <?php endforeach ?>
</ul>

      </nav>
    