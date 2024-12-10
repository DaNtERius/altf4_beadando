<div class="container mt-5">
    <?php if (isset($uzenet)) { ?>
        <div class="alert alert-info" role="alert">
            <h1><?= htmlspecialchars($uzenet, ENT_QUOTES, 'UTF-8') ?></h1>
            <?php if ($ujra) { ?>
                <p><a href="?oldal=login" class="btn btn-primary">Próbálja újra!</a></p>
            <?php } ?>
        </div>
    <?php } ?>
</div>
