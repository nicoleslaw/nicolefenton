
      <nav role="navigation">
        <ul class="menu cf">
        <?php foreach($pages->visible() as $p): ?>
  <li><a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>/"><?php echo html($p->title()) ?></a></li>
        <?php endforeach ?>
        
          <li class="home-link" aria-hidden="true"><a href="/"><img src="/_/images/dec/circle-menu.svg" height="12" width="12" alt="" /></a></li>
        </ul>
      </nav>
