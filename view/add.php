<!DOCTYPE html>
<html>
<head>
    <title>Pokemon</title>
</head>
<body>
    <h1>Add Pokemon</h1>
    <a href="index.php">Show Pokemon</a>
    <form action="index.php?action=add" method="post">
        <label for="p_name">Name : </label>
        <input type="text" id="p_name" name="name" required><br>

        <label for="p_type">Type : </label>
        <input type="text" id="p_type" name="type" required><br>

        <input type="submit" value="Add">
    </form>
</body>
</html>