<?= $this->extend("layouts/default.php") ?>
<?= $this->section("title") ?>
Home
<?= $this->endSection() ?>
<?= $this->section("content") ?>

<!-- back button -->
<a href="<?= site_url()?>">
    <h6>Back</h6>
</a>

<!-- Add new National Park -->
<h1>Add New National Park!</h1>
<?php
helper("form");
echo form_open('park/add');
?>
<?= form_label("National Park:", 'item') ?>
<?= form_input('item', '', ['placeholder'=>'Park Name...'], 'text') ?>
<?= form_label("Description:", 'description') ?>
<?= form_textarea('description', '', ['placeholder'=>'More about this National Park...'], 'text') ?>
<?= form_label("Image:", 'image') ?>
<?= form_upload('image', '', ['placeholder'=>'Image URL...'], 'text') ?>
<?= form_submit('addPark', "Save") ?>
<?= form_close() ?>





<?= $this->endSection() ?>