<?= $this->extend("layouts/default.php") ?>
<?= $this->section("title") ?>
Home
<?= $this->endSection() ?>
<?= $this->section("content") ?>
<!-- back button -->
<a href="<?= site_url()?>">
    <h6>Back</h6>
</a>

<h1>Presenting: <?= $park['item'] ?></h1>

<!-- Display all singlular Park -->


<img width="45%" src="<?= base_url('images/' . $park['image']) ?>" />
<h4><?= $park['item'] ?></h4>
<p style="width:45%"><?= $park['description'] ?></p>


<?= $this->endSection() ?>