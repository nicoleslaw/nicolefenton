
				<?php

					function portfolioThumbnail( $project ) {

						$projectTitle = $project->title();
						$projectSubtitle = $project->subtitle();
						$projectSlug = $project->slug();
						$projectIcon = $project->files()->find( $projectSlug . '.png' );
						if ($projectIcon) { $projectIconUrl = $projectIcon->url(); }
						else { $projectIconUrl = '/_/images/portfolio.png'; }

						$projectListHtml  = '<div class="portfolio type-portfolio hentry">';
						if ($projectIconUrl) $projectListHtml .= '	<a href="/projects/' . $projectSlug . '/" rel="bookmark" title="Permanent Link to ' . $projectTitle . '" class="portfolio-img-permalink"><img width="130" height="200" src="' . $projectIconUrl . '" class="attachment-portfolio-2col wp-post-image" alt="'. $projectTitle . ' logo" /></a>';
						$projectListHtml .= '	<h2 class="entry-title"><a href="/projects/' . $projectSlug . '/" rel="bookmark" title="Permanent Link to ' . $projectTitle . '">' . $projectTitle . '</a></h2>';
						$projectListHtml .= '	<p class="portfolio-excerpt">' . $projectSubtitle . '</p>';
						$projectListHtml .= '	<div class="bbottom"></div>';
						$projectListHtml .= '</div>';

						return $projectListHtml;

					}


				?>
