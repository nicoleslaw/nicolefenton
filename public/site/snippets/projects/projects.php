<section class="list-section list-section--featured">
<h2 class="list-section-title">Featured Projects</h2>
    <?php foreach(page('projects')->children()->listed()->limit(9) as $project): ?>
        <h3><a href="<?= $project->url() ?>"><?= $project->title() ?></a></h3>
        <?= $project->project_lede()->kirbytext() ?>
    <?php endforeach ?>
</section>
