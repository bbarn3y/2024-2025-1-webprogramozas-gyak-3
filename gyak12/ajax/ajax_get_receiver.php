<table>
    <thead>
        <tr>
            <td>Key</td>
            <td>Value</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($_GET as $key => $value): ?>
        <tr>
            <td><?= $key ?></td>
            <td><?= $value ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
