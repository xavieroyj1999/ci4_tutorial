<!DOCTYPE html>
<html>
    <head>
        <title>Create an email</title>
    </head>

    <body>
        <?= session()->getFlashdata('error') ?>
        <?= validation_list_errors() ?>
        
        <form action="<?php echo base_url('/email/store') ?>" method="POST">
            <?= csrf_field() ?>

            <label for="to">To: </label>
            <input type="input" name="to" value="<?= set_value('to') ?>">
            <br>

            <label for="from">From: </label>
            <input type="input" name="from" value="<?= set_value('from') ?>">
            <br>

            <label for="title">Title: </label>
            <input type="input" name="title" value="<?= set_value('title') ?>">
            <br>

            <label for="body">Body: </label>
            <textarea name="body" cols="45" rows="4"><?= set_value('body') ?></textarea>
            <br>

            <input type="submit" name="submit" value="Send an email">
        </form>
    </body>
</html>