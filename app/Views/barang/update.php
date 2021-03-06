<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<?php

$nama = [
    'name' => 'nama',
    'id' => 'nama',
    'value' => $barang->nama,
    'class' => 'form-control',
];

$email = [
    'name' => 'email',
    'id' => 'email',
    'value' => $barang->email,
    'class' => 'form-control',

];

$gambar = [
    'name' => 'gambar',
    'id' => 'gambar',
    'value' => null,
    'class' => 'form-control',
];

$submit = [
    'name' => 'submit',
    'id' => 'submit',
    'value' => 'Submit',
    'class' => 'btn btn-success',
    'type' => 'submit',
];

?>
<h1>Edit User</h1>

<?= form_open_multipart('Barang/update/' . $barang->id) ?>
<div class="form-group">
    <?= form_label("Nama", "nama") ?>
    <?= form_input($nama) ?>
</div>

<div class="form-group">
    <?= form_label("Email", "email") ?>
    <?= form_input($email) ?>
</div>

<img class="img-fluid" alt="image" src="<?= base_url('uploads/' . $barang->gambar) ?>" />

<div class="form-group">
    <?= form_label("Gambar", "gambar") ?>
    <?= form_upload($gambar) ?>
</div>

<div class="text-right">
    <a class="btn btn-warning" href="<?= site_url('barang/index') ?>">Kembali</a>
    <?= form_submit($submit) ?>
</div>

<?= form_close() ?>
<?= $this->endSection() ?>