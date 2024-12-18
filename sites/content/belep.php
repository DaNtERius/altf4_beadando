<?php if (isset($row)) : ?>
    <?php if ($row) : ?>
        <div class="container mt-5 py-4">
            <div class="alert alert-success" role="alert">
                <h1 class="display-4">Bejelentkezett:</h1>
                <p class="lead">Azonosító: <strong><?= htmlspecialchars($row['id'], ENT_QUOTES, 'UTF-8') ?></strong></p>
                <p class="lead">Név: <strong><?= htmlspecialchars($row['csaladi_nev'] . " " . $row['uto_nev'], ENT_QUOTES, 'UTF-8') ?></strong></p>
            </div>
        </div>
    <?php else : ?>
        <div class="container mt-5">
            <div class="alert alert-danger" role="alert">
                <h1 class="display-4">A bejelentkezés nem sikerült!</h1>
                <p><a href="?oldal=login" class="btn btn-primary">Próbálja újra!</a></p>
            </div>
        </div>
    <?php endif; ?>
<?php endif; ?>

<?php if (isset($errormessage)) : ?>
    <div class="container mt-4">
        <div class="alert alert-warning" role="alert">
            <h2><?= htmlspecialchars($errormessage, ENT_QUOTES, 'UTF-8') ?></h2>
        </div>
    </div>
<?php endif; ?>
