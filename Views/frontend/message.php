<?php
include BASE_PATH . '/Views/frontend/partials/header.php';
include BASE_PATH . '/Views/frontend/partials/navbar.php';
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
                            <h1>Your Drink is comming out!</h1>
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
            <h1>Thank you!</h1>

            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                <path d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05" />
            </svg>
        </div>
    </div>
</div>

<?php
include BASE_PATH . '/Views/frontend/partials/footer.php';
?>