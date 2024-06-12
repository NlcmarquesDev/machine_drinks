<?php
include("./Views/partials/header.php");
include("./Views/partials/navbar.php");
?>
<main class="form-signin w-50 m-auto">
    <form class="text-center" action="/drink_machine_app/dashboard" method="POST">

        <h1 class="h2 mb-3 fw-normal">Please log in</h1>

        <div class="form-floating mb-2">
            <input type="text" class="form-control" name="username" id="floatingInput" placeholder="username">
            <label for="floatingInput">username</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Sign in</button>
    </form>
    <?php if (isset($error)) : ?>
        <div class="alert alert-danger mt-5">
            <?= $error ?>
        </div>
    <?php endif ?>
</main>

<?php
include("./Views/partials/footer.php");
?>