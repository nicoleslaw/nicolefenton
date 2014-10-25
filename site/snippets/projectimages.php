<div class="post-media default-bg">
				<div class="stacked">
					<ul class="media-gallery">
						<?php

							function showProjectImages( $image ) {

								$projectHtml = '';

								if( is_numeric( substr( $image->name(), 0, 1 ) ) ) { // only show visible images

									$projectHtml = '
										<li>
											<div>' .
												( $image->caption() ? '<div class="slide-caption">'. kirbytext( $image->caption() ) .'</div>' : '' ) .
												'<img src="' . $image->url() . '" width="' . $image->width() . ' height="' . $image->height() . '" alt="' . $image->name() . '" />
											</div>
										</li>';

								}

								return $projectHtml;

							}

							foreach($page->images() as $image) {
								echo showProjectImages( $image );
							}

						?>

						</ul>
					</div>
				</div>