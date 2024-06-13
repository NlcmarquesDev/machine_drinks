<?php
include BASE_PATH . '/Views/partials/header.php';
include BASE_PATH . '/Views/partials/navbar.php';
?>
<div class="row align-items-md-stretch">
    <div class="col-md-7">
        <div class="h-100 ">
            <div class="text-bg-dark p-5   rounded-3">
                <h2>Drink Machine VDAB</h2>
                <p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look. Then, mix and match with additional component themes and more.</p>
            </div>
            <div class="p-5 mt-4 bg-body-tertiary rounded-3">
                <form action="/drink_machine_app/" method="POST">
                    <div class=" d-flex justify-content-between gap-5">
                        <div class="d-flex ">
                            <img src="https://fakeimg.pl/100/" alt="">
                            <div class="ms-4 my-auto">
                                <h2><?= $_SESSION['order']['name'] ?></h2>
                                <h5>Price: <?= $_SESSION['order']['price'] ?>&euro;</h5>
                            </div>
                        </div>
                        <div class="col-md-3 my-auto">
                            <input type="hidden" name="return" value=true>
                            <a href="/drink_machine_app/" class="btn btn-lg btn-warning">Return </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="h-100 p-5 bg-body-tertiary border rounded-3 d-flex flex-column justify-content-around">
            <h2>Display Money</h2>
            <h1><?= $_SESSION['coins'] ?>&euro;</h1>
            <form method="post" action="/drink_machine_app/getCoins">
                <div class="d-flex flex-wrap gap-2">
                    <button type="submit" name="coin" value="0.10" class="btn btn-primary">0.10&euro;</button>
                    <button type="submit" name="coin" value="0.20" class="btn btn-primary">0.20&euro;</button>
                    <button type="submit" name="coin" value="0.50" class="btn btn-primary">0.50&euro;</button>
                    <button type="submit" name="coin" value="1.00" class="btn btn-primary">1.00&euro;</button>
                    <button type="submit" name="coin" value="2.00" class="btn btn-primary">2.00&euro;</button>
                </div>
            </form>
            <?php if ($_SESSION['coins'] < $_SESSION['order']['price']) : ?>
                <div class="alert alert-danger mt-3 mb-0 p">
                    <h6>Please insert Coins.</h6>
                </div>
            <?php else : ?>
                <div class="alert alert-success mt-3 mb-0 p">
                    <h6>Please push the button to take out your drink.</h6>
                    <form action="/drink_machine_app/getDrink" method="POST">

                        <button type="submit" class="btn btn-success w-100">Take Out</button>
                    </form>
                </div>
            <?php endif ?>
        </div>
    </div>
</div>

<?php
include BASE_PATH . '/Views/partials/footer.php';
?>