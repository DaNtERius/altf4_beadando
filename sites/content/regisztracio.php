<section class="bg-light">
    <div class="container my-5 bg-light">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4">Regisztráció</h3
                        <form action="?oldal=regisztral" method="post">
                        <div class="mb-3">
                            <label for="csaladi_nev" class="form-label">Vezetéknév:</label>
                            <input placeholder="vezetéknév" type="text" class="form-control" id="csaladi_nev" name="csaladi_nev" required>
                        </div>
                            <div class="mb-3">
                                <label for="uto_nev" class="form-label">Keresztnév:</label>
                                <input placeholder="keresztnév" type="text" class="form-control" id="uto_nev" name="uto_nev" required>
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Felhasználónév:</label>
                                <input placeholder="felhasználónév" type="text" class="form-control" id="felhasznalo" name="felhasznalo"  required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Jelszó:</label>
                                <input placeholder="jelszó" type="password" class="form-control" id="jelszo" name="jelszo" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail</label>
                                <input placeholder="e-mail cím" type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Regisztráció</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>