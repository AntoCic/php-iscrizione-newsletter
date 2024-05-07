<?php
$email = $_POST['email'] ?? null;

function isCorrectEmail($email)
{
    if (preg_match("/@\w+\./", $email)) {
        return true;
    }
    return false;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Newsletter</title>
</head>

<body>
    <h1>Newsletter</h1>
    <form action="" method="post">
        <div class="input-group my-1">
            <span class="input-group-text">EMAIL</span>
            <input type="text" name="email" class="form-control" placeholder="email@email.com">
        </div>

        <button type="submit" class="btn btn-success">INVIA</button>
    </form>
    <?php
    if ($email) {
        if (isCorrectEmail($email)) {
    ?>
            <div class="alert alert-success" role="alert">
                Email corretta
            </div>
        <?php
        } else {
        ?>
            <div class="alert alert-danger" role="alert">
                Email errata
            </div>
    <?php
        }
    }

    ?>

</body>

</html>