<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
<h1>Hello register</h1>

<form method="POST">

    <label>
        email:
        <input name="email" />
    </label>
    <?php if (isset($errors["email"])) { ?>
        <p><?= $errors["email"] ?></p>
    <?php } ?>
    <label>
        password <span class="explanation">(Parolē jābūt 8 rakstzīmēm,1 lielam, 1 mazam un 1 īpašam simbolam un 1 burtam )</span>:
        <input name="password" />
    </label>
    <?php if (isset($errors["password"])) { ?>
        <p><?= $errors["password"] ?></p>
    <?php } ?>
    <button>Register</button>
</form>
<?php require "views/components/footer.php" ?>