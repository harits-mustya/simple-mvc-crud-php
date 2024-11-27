<!DOCTYPE html>
<html>
<head>
    <title>Pokemon</title>
</head>
<body>
    <h1>Edit Pokemon</h1>
    <a href="index.php">Show Pokemon</a>
    <form action="index.php?action=update" method="post">
        <input type="hidden" id="p_id" name="id" value="<?=$pokemon['id']?>">

        <label for="p_name">Name : </label>
        <input type="text" id="p_name" name="name" value="<?=$pokemon['name']?>" required><br>

        <label for="p_type">Type : </label>
        <input type="text" id="p_type" name="type" value="<?=$pokemon['type']?>" required><br>

        <input type="submit" value="Update" name="Update">
    </form>
</body>
</html>