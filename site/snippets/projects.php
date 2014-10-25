
        <section class="list-section list-section--featured">

          <h2 class="list-section-title">Featured Projects</h2>
<?php foreach(page('projects')->children()->visible()->limit(9) as $project): ?>

          <h3><a href="<?php echo $project->url() ?>"><?php echo @strip_p($project->title()->kirbytext()) ?></a></h3>
          <?php echo $project->project_lede()->kirbytext() ?>

 <?php endforeach ?>

        </section>
