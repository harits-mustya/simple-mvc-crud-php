<!DOCTYPE html>
<html>
<head>
    <title>Pokemon</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Pokemon</h1>
    <a href="index.php?action=add">Add Pokemon</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pokemons as $pokemon): ?>
                <tr>
                    <td><?= $pokemon['id'] ?></td>
                    <td><?= $pokemon['name'] ?></td>
                    <td><?= $pokemon['type'] ?></td>
                    <td>
                        <a href="index.php?action=update&id=<?= $pokemon['id'] ?>">Edit</a>
                        <a href="index.php?action=delete&id=<?= $pokemon['id'] ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
