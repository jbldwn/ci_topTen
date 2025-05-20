<?= $this->extend("layouts/default.php") ?>
<?= $this->section("title") ?>
$title
<?= $this->endSection() ?>
<?= $this->section("content") ?>


<!-- Retrieve all parks in DB -->
<?php foreach ($parks as $park): ?>
<a href="<?= site_url('park/'. $park['id'])?>">
    <h2><?= $park['item'] ?></h2>
    <img width="20%" src="<?= base_url('images/' . $park['image']) ?>" />
    <!-- <p><?= $park['description'] ?></p> -->
</a>
<?php endforeach; ?>


<?= $this->endSection() ?>