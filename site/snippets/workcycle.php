	<div class="page-intro block">
		<h2 class="page-title"><a href="/projects/">Projects</a></h2>
	</div>
	<div class="featured-portfolios default-bg">

		<ul class="media-gallery">

		<?php

			$projectListHtml = '';

			foreach ( @$pages->find('projects')->children()->visible()->flip()->limit(3) as $project ) {

				$projectTitle = $project->title();
				$projectSubtitle = $project->subtitle();
				$projectSlug = $project->slug();
				$projectIcon = $project->files()->find( $projectSlug . '.png' );
				if ($projectIcon) { $projectIconUrl = $projectIcon->url(); }
				else { $projectIconUrl = '/_/images/portfolio.png'; }

				$projectListHtml .= '
					<li>
						<div class="portfolio type-portfolio hentry">' .
							( $projectIconUrl ? '<a href="/projects/' . $projectSlug . '/" rel="bookmark" title="Permanent Link to ' . $projectTitle . '" class="portfolio-img-permalink"><img width="130" height="200" src="' . $projectIconUrl . '" class="attachment-portfolio-2col wp-post-image" alt="'. $projectTitle . ' logo" /></a>' : '' ) .
							'<h3 class="entry-title"><a href="/projects/' . $projectSlug . '/" rel="bookmark" title="Permanent Link to ' . $projectTitle . '">' . $projectTitle . '</a></h3>
							<p class="portfolio-excerpt">' . $projectSubtitle . '</p>
							<div class="bbottom"></div>
						</div>
					</li>';

			}

			echo $projectListHtml;

		?>

		</ul>

	</div>
