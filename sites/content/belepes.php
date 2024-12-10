<section class="bg-light">
    <!-- Login Form -->
    <div class="container my-5 bg-light">
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
                            <input placeholder="vezetéknév" class="form-control" id="csaladi_nev" name="csaladi_nev" required>
                        </div>
                        <div class="mb-3">
                            <label for="uto_nev" class="form-label">Keresztnév:</label>
                            <input placeholder="keresztnév" class="form-control" id="uto_nev" name="uto_nev" required>
                        </div>
                        <div class="mb-3">
                            <label for="felhasznalo" class="form-label">Felhasználónév:</label>
                            <input placeholder="felhasználói név" type="text" class="form-control" id="felhasznalo" name="felhasznalo" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail cím:</label>
                            <input placeholder="e-mail cím" type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="jelszo" class="form-label">Jelszó:</label>
                            <input placeholder="jelszó" type="password" class="form-control" id="jelszo" name="jelszo" required>
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