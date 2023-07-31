<!DOCTYPE html>
<html>
    <head>
        <title>Update an email</title>
    </head>

    <body>
        <form action="<?php echo base_url("/email/{$email['email_id']}"); ?>" method="POST">
            <label for="to">To: </label>
            <input type="input" name="to" value="<?= $email['to'] ?>">
            <br>

            <label for="from">From: </label>
            <input type="input" name="from" value="<?= $email['from'] ?>">
            <br>

            <label for="title">Title: </label>
            <input type="input" name="title" value="<?= $email['title'] ?>">
            <br>

            <label for="body">Body: </label>
            <textarea name="body" cols="45" rows="4"><?= $email['body'] ?></textarea>
            <br>

            <input type="submit" name="submit" value="Update">
        </form>
    </body>
</html>