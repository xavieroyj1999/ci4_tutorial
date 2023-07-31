<!DOCTYPE html>
<html>
    <head></head>

    <body>
        <h2><?= esc($email['to']) ?></h2>
        <p><?= esc($email['from']) ?></p>
        <p><?= esc($email['title']) ?></p>
        <p><?= esc($email['body']) ?></p>

        <a href="<?php echo base_url("/email/{$email['email_id']}/edit"); ?>"><button>Edit</button></a>
        <button onclick="deleteEmail(<?= esc($email['email_id'], 'url') ?>)">Delete email</button>

        <script>
            function deleteEmail(id) {
                fetch(<?php base_url('/email') ?> + id,  {
                    method: 'DELETE',
                    redirect: "follow",
                }).then(response => {
                    if (response.redirected) {
                        window.location.href = response.url;
                    }
                });
            }
        </script>
    </body>
</html>