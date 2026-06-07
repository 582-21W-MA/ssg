<?php
$items = [
    'Home' => '/',
    'About' => '/about/',
];
?>
<nav class="site-nav">
    <?php foreach ($items as $label => $path): ?>
        <a
            href="<?= $path ?>"
            class="<?= page_url() === $path ? 'current' : '' ?>"
        >
            <?= $label ?>
        </a>
    <?php endforeach ?>
</nav>
