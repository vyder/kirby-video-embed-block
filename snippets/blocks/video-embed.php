<?php

/** @var \Kirby\Cms\Block $block */
$file    = $block->video()->toFile();
$alt     = $block->alt();
$caption = $block->caption();
$link    = $block->link();

$controls = $block->controls()->toBool() ? "controls" : "";
$autoplay = $block->autoplay()->toBool() ? "autoplay" : "";
$loop     = $block->loop()->toBool()     ? "loop" : "";
$muted    = $block->autoplay()->toBool() ? "muted" : "";

?>

<?php if($file): ?>
<div class="video-container">
    <figure>
        <video
            <?= "$controls" ?>
            <?= "$autoplay" ?>
            <?= "$loop" ?>
            <?= "$muted" ?>
            alt="<?= $alt->esc() ?>">
            <source src="<?= \Kirby\Toolkit\Str::esc($file->url()) ?>" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <?php if($caption): ?>
        <figcaption class="video-caption">
            <a class="video-caption-link" href="<?= $link ?>" alt="<?= $alt->esc() ?>">
                <?= $caption ?>
            </a>
        </figcaption>
        <?php endif ?>
    </figure>
</div>
<?php endif ?>

<style>
.video-container, .video-container > figure {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
</style>
