<?php
include BASE_PATH . '/Views/partials/header.php';
include BASE_PATH . '/Views/partials/navbar.php';
?>

<div class="row align-items-md-stretch">
    <div class="col-md-7">
        <div class="h-100 p-5 text-bg-dark rounded-3">
            <h2>Drink Machine VDAB</h2>
            <p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look. Then, mix and match with additional component themes and more.</p>
        </div>
    </div>
    <div class="col-md-5">
        <div class="h-100 pt-4 px-4 pb-3 bg-body-tertiary border rounded-3">
            <h2>Display Money</h2>
            <h1><?= $_SESSION['coins'] ?? 0 ?>&euro;</h1>
            <form method="post" action="/drink_machine_app/getCoins">
                <div class="d-flex flex-wrap gap-2">
                    <button type="submit" name="coin" value="0.10" class="btn btn-primary">0.10&euro;</button>
                    <button type="submit" name="coin" value="0.20" class="btn btn-primary">0.20&euro;</button>
                    <button type="submit" name="coin" value="0.50" class="btn btn-primary">0.50&euro;</button>
                    <button type="submit" name="coin" value="1.00" class="btn btn-primary">1.00&euro;</button>
                    <button type="submit" name="coin" value="2.00" class="btn btn-primary">2.00&euro;</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="p-5 mt-4 bg-body-tertiary rounded-3">

    <form action="/drink_machine_app/selectDrink" method="POST">
        <div class="d-flex flex-wrap gap-3" role="group" aria-label="Basic radio toggle button group">
            <?php foreach ($drinks as $key => $drink) : ?>
                <div>
                    <input type="radio" class="btn-check" name="btnradio" value="<?= $drink['id'] ?>" id="btnradio<?= $key ?>" checked>
                    <label class="btn btn-outline-primary" for="btnradio<?= $key ?>">
                        <div>
                            <img src="https://fakeimg.pl/100/" alt="">
                        </div>
                        <h6 class="mt-2"><?= $drink['name'] ?></h6>
                        <span>Size: <?= $drink['size'] ?>ml</span>
                        <br>
                        <span>Price: <?= $drink['price'] ?>&euro;</span>
                    </label>
                </div>
            <?php endforeach ?>
        </div>
        <div class="d-flex justify-content-end mt-4">
            <button type="submit" class="btn btn-success btn-lg">Select</button>
        </div>
    </form>
</div>
<?php
include BASE_PATH . '/Views/partials/footer.php';
?>