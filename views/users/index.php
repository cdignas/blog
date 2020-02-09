<table class="table">
    <thead class="thead">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Username</th>
        <th scope="col">Email</th>
        <th scope="col">Created At</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user) { ?>
    <tr>
        <th scope="row"><?= $user['id'] ?></th>
        <td><?= $user['username'] ?></td>
        <td><?= $user['email'] ?></td>
        <td><?= $user['created_at'] ?></td>
    </tr>
    <?php } ?>
    </tbody>
</table>