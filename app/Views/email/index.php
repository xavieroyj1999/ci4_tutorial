
<div class="container py-5">
    <a href="<?php echo base_url('/email/create') ?>"><button class="btn btn-primary" type="button">Create a new email</button></a>
    
    <?php if (! empty($emails) && is_array($emails)): ?>
    <table class="table caption-top">
        <caption>List of emails</caption>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">To</th>
                <th scope="col">From</th>
                <th scope="col">Title</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($emails as $email_item): ?>
                <tr>
                    <th scope="row"><?= $email_item['email_id'] ?></th>
                    <td><?= $email_item['to'] ?></td>
                    <td><?= $email_item['from'] ?></td>
                    <td><?= $email_item['title'] ?></td>
                    <td><a href="<?= base_url("/email/{$email_item['email_id']}/edit"); ?>"><button class="btn btn-outline-secondary">Edit</button></a></td>
                    <td><button class="btn btn-danger" onclick="deleteEmail(<?= $email_item['email_id'] ?>)">Delete</button></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <?php else: ?>
        <h3 class="pt-2">No Emails</h3>
        <p>Luckily, there are no emails!</p>
    <?php endif ?>
</div>

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