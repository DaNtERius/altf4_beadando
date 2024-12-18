<?php
// Start the session only if it hasn't been started already
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<section class="bg-light">
    <div class="container my-5 bg-light">
        <?php if (isset($_SESSION['login'])) { ?>
            <!-- Display this section if the user is logged in -->
            <div class="row justify-content-center">
                <div class="col-12 col-md-6">
                    <div class="card shadow-lg">
                        <div class="card-body">
                            <h3 class="card-title text-center mb-4">Üdvözöljük, <?php echo htmlspecialchars($_SESSION['csn'] . " " . $_SESSION['un'] . " (" . $_SESSION['login'] . ")"); ?>!</h3>
                            <p class="text-center">Ön már be van jelentkezve.</p>
                            <div class="d-grid">
                                <a href="?oldal=logout" class="btn btn-danger">Kijelentkezés</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } else { ?>
            <!-- Display this section if the user is not logged in -->
            <div class="row justify-content-center">
                <div class="col-12 col-md-6">
                    <div class="card shadow-lg">
                        <div class="card-body">
                            <h3 class="card-title text-center mb-4">Bejelentkezés</h3>
                            <form action="?oldal=belep" method="post">
                                <div class="mb-3">
                                    <label for="felhasznalo" class="form-label">Felhasználónév:</label>
                                    <input id="felhasznalo" class="form-control" type="text" name="felhasznalo" placeholder="Felhasználó" required>
                                </div>
                                <div class="mb-3">
                                    <label for="jelszo" class="form-label">Jelszó:</label>
                                    <input id="jelszo" class="form-control" type="password" name="jelszo" placeholder="Jelszó" required>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" name="belepes" class="btn btn-primary">Belépés</button>
                                </div>
                            </form>
                            <div class="mt-3 text-center">
                                <p class="small">Amennyiben még nem felhasználó, <a href="#" class="link-primary" data-bs-toggle="modal" data-bs-target="#registerModal">regisztráljon</a>!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

    <!-- Registration Modal -->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerModalLabel">Regisztráció</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Bezárás"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="?oldal=regisztral">
                        <div class="mb-3">
                            <label for="csaladi_nev" class="form-label">Vezetéknév:</label>
                            <input placeholder="Vezetéknév" class="form-control" id="csaladi_nev" name="csaladi_nev" required>
                        </div>
                        <div class="mb-3">
                            <label for="uto_nev" class="form-label">Keresztnév:</label>
                            <input placeholder="Keresztnév" class="form-control" id="uto_nev" name="uto_nev" required>
                        </div>
                        <div class="mb-3">
                            <label for="felhasznalo_reg" class="form-label">Felhasználónév:</label>
                            <input placeholder="Felhasználói név" type="text" class="form-control" id="felhasznalo_reg" name="felhasznalo" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail cím:</label>
                            <input placeholder="E-mail cím" type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="jelszo_reg" class="form-label">Jelszó:</label>
                            <input placeholder="Jelszó" type="password" class="form-control" id="jelszo_reg" name="jelszo" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Regisztráció</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
