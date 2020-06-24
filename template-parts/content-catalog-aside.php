<?php

/**
 * The featured image aside content
 *
 * Used on content-catalog.php
 *
 * @package Comedy_Dynamics
 * @since Comedy_Dynamics 1.0.0
 */

?>
<style>
.link-icons-toggle .accordion-open {
    width: 50%;
    display: flex;
	padding: 10px;
}

.link-icons .accordion-item:last-of-type .accordion-open {
    position: absolute;
    width: 50%;
    right: 0;
    top: 18px;
}

.feat .artwork-container .link-icons {
    position: relative;
}
.link-icons ul {
    list-style: none;
    flex-flow: column;
    text-align: left;
    margin-left: 20px;
    padding: 20px 0;
}

.link-icons ul a {
    color: black;
    text-decoration: underline;
}
.link-icons-toggle button {
    cursor: pointer;
}
.link-icons-toggle:last-of-type .accordion-open .grid-x.align-middle {
    background: transparent;
}
.link-icons .accordion-title:focus, .link-icons .accordion-title:hover {
	background: transparent;
}
.link-icons .accordion-title .fas {
    padding-left: 15px;
}
.link-icons .accordion-item.is-active .accordion-title .fas {
    transform: scaleY(-1);
    transition: transform .4s linear;
}
</style>
<aside class="cell medium-5 feat medium-order-2">

	<div class="grid-x">

		<div class="cell medium-10 artwork-container">

			<?php if (has_post_thumbnail()) {
				the_post_thumbnail('large', $attr );
			} else {
			?>
				<img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/default-image.png" alt="<?php the_title(); ?>" />
			<?php
			} ?>

			<div class="grid-x link-icons-container text-center">

				<div class="cell medium-11 link-icons">

					<?php
					$imdb = get_field('imdb_video');
					$youTube = get_field('youtube_video');
					$itunesV = get_field('itunes_video');
					$googlePlayV = get_field('google_play_video');
					$amazonV = get_field('amazon_video');
					$steamV = get_field('steam_video');
					$microsoftV = get_field('microsoft_video');
					$vuduV = get_field('vudu_video');
					$vimeoV = get_field('vimeo_video');
					$netflixV = get_field('netflix_video');
					$animalNationV = get_field('animal_nation_video');
					$breakerV = get_field('breaker_video_link');
					$epixV = get_field('epix_video');
					$mtv2V = get_field('mtv2_video');
					$itunesA = get_field('itunes_audio');
					$googlePlayA = get_field('google_play_audio');
					$amazonA = get_field('amazon_audio');
					$spotifyA = get_field('spotify_audio');
					$pandoraA = get_field('pandora_audio');
					$walmartA = get_field('walmart_audio');
					$targetA = get_field('target_audio');
					$fandangoA = get_field('fandango_audio');
					$huluV = get_field('hulu_video');
					$comcast = get_field('comcast');
					$walmart = get_field('walmart');
					$target = get_field('target');
					$fandango = get_field('fandango');
					$redbox = get_field('redbox');
					$customA = get_field('custom_audio');
					$customAtitle = get_field('custom_audio_title');
					$customV = get_field('custom_video');
					$customVtitle = get_field('custom_video_title');
					?>

					<article class="accordion hover cell link-icons-toggle" data-accordion data-allow-all-closed="true">
					        <section class="accordion-item" data-accordion-item>
					            <a href="#" class="accordion-open">
									<div class="grid-x align-middle mx-0">
										<div class="cell medium-6">
											<button class="accordion-title clear success"><b>VIDEO</b><i class="fas fa-caret-down"></i></button>
										</div>
									</div>
								</a>
					
								<div class="accordion-content grid-container-full" data-tab-content >
				                    <ul class="grid-container grid-x pl-medium-0">
										<?php if ($imdb) : ?>
										<!-- imdb video -->
										<li><a href="<?php echo $imdb; ?>" target="_blank" rel="noreferrer">

											<!-- <img src="<?php //  bloginfo('template_directory'); ?>/dist/assets/images/imdb.svg" /> -->
											<strong><?php _e( "IMDB", 'Comedy_Dynamics' ); ?></strong>

										</a>

										<?php endif; ?>

										<?php if ($youTube) : ?>
											<!-- youtube video -->
											<li><a href="<?php echo $youTube; ?>" target="_blank">

												<!-- <img src="<?php //  bloginfo('template_directory'); ?>/dist/assets/images/youtube.svg" /> -->
												<strong><?php _e( "YouTube", 'Comedy_Dynamics' ); ?></strong>
											</a></li>

										<?php endif; ?>

										<?php if ($itunesV) : ?>
											<!-- itunes video -->

											<li><a href="<?php echo $itunesV; ?>" target="_blank">

												<!-- <img src="<?php //  bloginfo('template_directory'); ?>/dist/assets/images/itunes-video.svg" /> -->
												<strong><?php _e( "Apple TV", 'Comedy_Dynamics' ); ?></strong>
											</a></li>

										<?php endif; ?>

										<?php if ($googlePlayV) : ?>
											<!-- google play video -->
											<li><a href="<?php echo $googlePlayV; ?>" target="_blank">

												<!-- <img src="<?php //  bloginfo('template_directory'); ?>/dist/assets/images/google_play.svg" /> -->
												<strong><?php _e( "Google Play", 'Comedy_Dynamics' ); ?></strong>
											</a></li>

										<?php endif; ?>

										<?php if ($amazonV) : ?>
											<!-- amazon video -->
											<li><a href="<?php echo $amazonV; ?>" target="_blank">

												<!-- <img src="<?php //  bloginfo('template_directory'); ?>/dist/assets/images/amazon-video.svg" /> -->
												<strong><?php _e( "Amazon", 'Comedy_Dynamics' ); ?></strong>
											</a></li>

										<?php endif; ?>

										<?php if ($steamV) : ?>
											<!-- steam video -->
											<li><a href="<?php echo $steamV; ?>" target="_blank">

												<!-- <img src="<?php //  bloginfo('template_directory'); ?>/dist/assets/images/steam.svg" /> -->
												<strong><?php _e( "Steam", 'Comedy_Dynamics' ); ?></strong>
											</a></li>

										<?php endif; ?>

										<?php if ($microsoftV) : ?>
											<!-- microsoft video -->
											<li><a href="<?php echo $microsoftV; ?>" target="_blank">

												<!-- <img src="<?php //  bloginfo('template_directory'); ?>/dist/assets/images/microsoft.svg" /> -->
												<strong><?php _e( "Microsoft", 'Comedy_Dynamics' ); ?></strong>
											</a></li>
										<?php endif; ?>

										<?php if ($vuduV) : ?>
											<!-- vudu video -->
											<li><a href="<?php echo $vuduV; ?>" target="_blank">

												<!-- <img src="<?php //  bloginfo('template_directory'); ?>/dist/assets/images/vudu.svg" /> -->
												<strong><?php _e( "Vudu", 'Comedy_Dynamics' ); ?></strong>
											</a></li>
										<?php endif; ?>

										<?php if ($vimeoV) : ?>
											<!-- vimeo video -->
											<li><a href="<?php echo $vimeoV; ?>" target="_blank">

												<!-- <img src="<?php //  bloginfo('template_directory'); ?>/dist/assets/images/vimeo.svg" /> -->
												<strong><?php _e( "Vimeo", 'Comedy_Dynamics' ); ?></strong>
											</a></li>

										<?php endif; ?>

										<?php if ($netflixV) : ?>
											<!-- netflix video -->
											<li><a href="<?php echo $netflixV; ?>" target="_blank">

												<!-- <img src="<?php //  bloginfo('template_directory'); ?>/dist/assets/images/netflix.svg" /> -->
												<strong><?php _e( "Netflix", 'Comedy_Dynamics' ); ?></strong>
											</a></li>

										<?php endif; ?>

										<?php if ($animalNationV) : ?>
											<!-- animal nation video -->
											<li><a href="<?php echo $animalNationV; ?>" target="_blank">

												<!-- <img src="<?php //  bloginfo('template_directory'); ?>/dist/assets/images/animal-nation.svg" /> -->
												<strong><?php _e( "Animal Nation", 'Comedy_Dynamics' ); ?></strong>
											</a></li>

										<?php endif; ?>

										<?php if ($breakerV) : ?>
											<!-- animal nation video -->
											<li><a href="<?php echo $breakerV; ?>" target="_blank">

												<!-- <img src="<?php //  bloginfo('template_directory'); ?>/dist/assets/images/breaker-logo.svg" /> -->
												<strong><?php _e( "Breaker", 'Comedy_Dynamics' ); ?></strong>
											</a></li>

										<?php endif; ?>

										<?php if ($huluV) : ?>
											<!-- hulu video -->
											<li><a href="<?php echo $huluV; ?>" target="_blank">

												<!-- <img src="<?php //  bloginfo('template_directory'); ?>/dist/assets/images/hulu.svg" /> -->
												<strong><?php _e( "HULU", 'Comedy_Dynamics' ); ?></strong>
											</a></li>

										<?php endif; ?>

										<?php if ($epixV) : ?>
											<!-- epix video -->
											<li><a href="<?php echo $epixV; ?>" target="_blank">

												<!-- <img src="<?php //  bloginfo('template_directory'); ?>/dist/assets/images/epix.svg" /> -->
												<strong><?php _e( "EPIX", 'Comedy_Dynamics' ); ?></strong>
											</a></li>

										<?php endif; ?>

										<?php if ($mtv2V) : ?>
											<!-- mtv2 video -->
											<li><a href="<?php echo $mtv2V; ?>" target="_blank">

												<!-- <img src="<?php //  bloginfo('template_directory'); ?>/dist/assets/images/mtv2.svg" /> -->
												<strong><?php _e( "MTV2", 'Comedy_Dynamics' ); ?></strong>
											</a></li>

										<?php endif; ?>

										<?php if ($comcast) : ?>
											<!-- comcast video -->
											<li><a href="<?php echo $comcast; ?>" target="_blank">

												<!-- <img src="<?php //  bloginfo('template_directory'); ?>/dist/assets/images/comcast-infinity.svg" /> -->
												<strong><?php _e( "Comcast", 'Comedy_Dynamics' ); ?></strong>
											</a></li>

										<?php endif; ?>

										<?php if ($redbox) : ?>
											<!-- redbox video -->
											<li><a href="<?php echo $redbox; ?>" target="_blank">

												<!-- <img src="<?php //  bloginfo('template_directory'); ?>/dist/assets/images/redbox-icon.svg" /> -->
												<strong><?php _e( "Redbox", 'Comedy_Dynamics' ); ?></strong>
											</a></li>

										<?php endif; ?>

										<?php if ($customV) : ?>
											<!-- redbox video -->
											<li><a href="<?php echo $customV; ?>" target="_blank">
												<strong><?php echo $customVtitle; ?></strong>
											</a></li>

										<?php endif; ?>

										<!-- END Video Icons -->
										<!-- END Video Icons -->
										<!-- END Video Icons -->
		
								</ul>
							</div>
						</section>
					<!-- </article> -->

					<!-- audio dropdown -->
					<!-- audio dropdown -->
					<!-- audio dropdown -->

					<!-- <article class="accordion cell link-icons-toggle" data-accordion data-allow-all-closed="true"> -->
					        <section class="accordion-item" data-accordion-item>
	
								<a href="#" class="accordion-open">
									<div class="grid-x align-middle mx-0">
										<div class="cell medium-6">
											<button class="accordion-title clear success"><b>AUDIO</b><i class="fas fa-caret-down"></i></button>
										</div>
									</div>
					            </a>
					
								<div class="accordion-content grid-container-full" data-tab-content >
				                    <ul class="grid-container grid-x pl-medium-0">
										<?php if ($walmart) : ?>
											<!-- walmart audio -->
											<li><a href="<?php echo $walmart; ?>" target="_blank">

												<!-- <img src="<?php //  bloginfo('template_directory'); ?>/dist/assets/images/walmart.svg" /> -->
												<strong><?php _e( "Walmart", 'Comedy_Dynamics' ); ?></strong>
											</a></li>

										<?php endif; ?>

										<?php if ($target) : ?>
											<!-- target audio -->
											<li><a href="<?php echo $target; ?>" target="_blank">

												<!-- <img src="<?php //  bloginfo('template_directory'); ?>/dist/assets/images/target.svg" /> -->
											<strong><?php _e( "Target", 'Comedy_Dynamics' ); ?></strong>
											</a></li>

										<?php endif; ?>

										<?php if ($fandango) : ?>
											<!-- fandango audio -->
											<li><a href="<?php echo $fandango; ?>" target="_blank">

												<!-- <img src="<?php //  bloginfo('template_directory'); ?>/dist/assets/images/fandango-now.svg" /> -->
												<strong><?php _e( "Fandango", 'Comedy_Dynamics' ); ?></strong>
											</a></li>

										<?php endif; ?>

										<?php if ($itunesA) : ?>
											<!-- itunes audio -->
											<li><a href="<?php echo $itunesA; ?>" target="_blank">

												<!-- <img src="<?php //  bloginfo('template_directory'); ?>/dist/assets/images/itunes.svg" /> -->
												<strong>
													<?php _e( "iTunes", 'Comedy_Dynamics' ); ?>
												</strong>
											</a></li>

										<?php endif; ?>

										<?php if ($googlePlayA) : ?>
											<!-- google play audio -->
											<li><a href="<?php echo $googlePlayA; ?>" target="_blank">

												<!-- <img src="<?php //  bloginfo('template_directory'); ?>/dist/assets/images/google_play.svg" /> -->
												<strong><?php _e( "Google Play", 'Comedy_Dynamics' ); ?></strong>
											</a></li>

										<?php endif; ?>

										<?php if ($amazonA) : ?>
											<!-- amazon audio -->
											<li><a href="<?php echo $amazonA; ?>" target="_blank">

												<!-- <img src="<?php //  bloginfo('template_directory'); ?>/dist/assets/images/amazon-music.svg" /> -->
												<strong><?php _e( "Amazon", 'Comedy_Dynamics' ); ?></strong>
											</a></li>

										<?php endif; ?>

										<?php if ($spotifyA) : ?>
											<!-- spotify audio -->
											<li><a href="<?php echo $spotifyA; ?>" target="_blank">

												<!-- <img src="<?php //  bloginfo('template_directory'); ?>/dist/assets/images/spotify.svg" /> -->
												<strong><?php _e( "Spotify", 'Comedy_Dynamics' ); ?></strong>
											</a></li>

										<?php endif; ?>

										<?php if ($pandoraA) : ?>
											<!-- pandora audio -->
											<li><a href="<?php echo $pandoraA; ?>" target="_blank">

												<!-- <img src="<?php //  bloginfo('template_directory'); ?>/dist/assets/images/pandora.svg" /> -->
												<strong><?php _e( "Pandora", 'Comedy_Dynamics' ); ?></strong>
											</a></li>

										<?php endif; ?>

										<?php if ($walmartA) : ?>
											<!-- pandora audio -->
											<li><a href="<?php echo $walmartA; ?>" target="_blank">

												<!-- <img src="<?php //  bloginfo('template_directory'); ?>/dist/assets/images/walmart.svg" /> -->
												<strong><?php _e( "Walmart", 'Comedy_Dynamics' ); ?></strong>
											</a></li>

										<?php endif; ?>

										<?php if ($targetA) : ?>
											<!-- pandora audio -->
											<li><a href="<?php echo $targetA; ?>" target="_blank">

												<!-- <img src="<?php //  bloginfo('template_directory'); ?>/dist/assets/images/target.svg" /> -->
											<strong><?php _e( "Target", 'Comedy_Dynamics' ); ?></strong>
											</a></li>

										<?php endif; ?>

										<?php if ($fandangoA) : ?>
											<!-- pandora audio -->
											<li><a href="<?php echo $fandangoA; ?>" target="_blank">

												<!-- <img src="<?php //  bloginfo('template_directory'); ?>/dist/assets/images/fandango-now.svg" /> -->
												<strong><?php _e( "Fandango", 'Comedy_Dynamics' ); ?></strong>
											</a></li>

										<?php endif; ?>

										<?php if ($customA) : ?>
											<!-- redbox video -->
											<li><a href="<?php echo $customA; ?>" target="_blank">
												<strong><?php echo $customAtitle; ?></strong>
											</a></li>

										<?php endif; ?>
								</ul>
							</div>
						</section>
					</article>
					
					

					

				</div>

			</div>

		</div> <!-- END artwork-container -->

		<div class="cell medium-2 no-mobile">

			<div class="grid-x">

				<div class="cell pagination grid-padding-y">

					<?php get_template_part('template-parts/catalog-pagination'); ?>

				</div>

			</div>

		</div> <!-- END  no-mobile -->

	</div> <!-- END grid-x -->

</aside>