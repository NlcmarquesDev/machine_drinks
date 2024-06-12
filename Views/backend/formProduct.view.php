<?php
include BASE_PATH . '/Views/partials/header.php';
include BASE_PATH . '/Views/partials/navbar.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
            <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="/drink_machine_vdab/app/Controllers/backend/authentication.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                    <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5" />
                                </svg>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2" href="/drink_machine_vdab/app/Controllers/backend/authentication.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark" viewBox="0 0 16 16">
                                    <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z" />
                                </svg>
                                Orders
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                                </svg>
                                Products
                            </a>
                        </li>
                    </ul>
                    <hr class="my-3">
                    <ul class="nav flex-column mb-auto">
                        <a class="nav-link d-flex align-items-center gap-2" href="/drink_machine_vdab/Controllers/backend/logout.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z" />
                                <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
                            </svg>
                            Sign out
                        </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group me-2">
                        <a href="/drink_machine_app/products" class="btn btn-sm btn-outline-secondary">All Products</a>
                    </div>
                </div>
            </div>
            <h2><?= $isEditing ? 'Edit Drink' : 'Add New Drink' ?></h2>

            <div class="table-responsive small">
                <form action="/drink_machine_vdab/app/Controllers/backend/createProduct.php" method="POST">
                    <input type="hidden" name="id" value="<?= $product['id'] ?>">
                    <div class="mb-3">
                        <label class="form-label">Name </label>
                        <input type="text" class="form-control" name="name" value="<?= $product['name'] ?>" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Size </label>
                        <input type="number" class="form-control" name="size" value="<?= $product['size'] ?>" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Price </label>
                        <input type="float" class="form-control" name="price" value="<?= $product['price'] ?>" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Stock </label>
                        <input type="number" class="form-control" name="stock" value="<?= $product['stock'] ?>" aria-describedby="emailHelp">
                    </div>
                    <?php if (isset($_SESSION['errors'])) : ?>
                        <div class="alert alert-danger mb-3">
                            <?= $_SESSION['errors'] ?>
                        </div>
                    <?php endif ?>
                    <button type="submit" class="btn btn-primary"><?= $isEditing ? 'Update' : 'Add New' ?></button>

                </form>
            </div>
        </main>
    </div>
</div>

<?php
unset($_SESSION['errors']);
include BASE_PATH . '/Views/partials/footer.php';
?>