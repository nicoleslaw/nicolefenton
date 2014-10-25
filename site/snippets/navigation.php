
	<div id="header" class="block clearfix">

		<div id="logo">
			<a href="/">Nicole Fenton</a>
			<?php /* <!-- <p id="tagline"><?php echo $site->about() ?></p> --> */ ?>
		</div>

		<div id="primary-nav" class="primary-nav-container" role="navigation">
			<ul id="primary-menu" class="sf-menu primary-menu">
				<?php foreach($pages->visible() as $p): ?>
<li class="menu-item menu-item-type-post_type menu-item-object-page<?php echo( ( $p->title() == $page->title() ) ? ' current-menu-item page_item current_page_item active' : '' ); ?>"><a href="/<?php echo $p->uri() ?>/" class="nav"><?php echo html($p->title()) ?></a></li>
				<?php endforeach ?>

			</ul>
		</div>

	</div><!-- / #header -->
