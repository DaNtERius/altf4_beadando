<?php
include('includes/config.gal.php');
?>
<section>
<div class="container px-1">
    <div class="row gx-4 justify-content-center">
        <div class="my-4 text-center">
            <a href="#" class="video-container" title="YouTube Video" id="video-link" data-video-id="kfchvCyHmsc">
                <video autoplay loop muted>
                    <source src="media/videos/5_Second_Video__Watch_the_Milky_Way_Rise.webm" type="video/webm">
                </video>
            </a>

            <!-- Link to custom.js at the bottom of the HTML -->
            <script src="media/videos/vid.js"></script>
        </div>
</div>
</section>
<!-- Gallery -->
<section>
    <div class="container my-1">
        <h1 class="text-center mb-4">Galléria</h1>
        <div class="row g-4">
            <?php
            arsort($kepek);
            $imageIndex = 0; // Track image index for the carousel
            foreach ($kepek as $fajl => $datum) {
                ?>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="card shadow-sm h-100">
                        <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-index="<?php echo $imageIndex; ?>">
                            <img src="<?php echo $MAPPA . $fajl; ?>" class="card-img-top img-fluid" alt="<?php echo $fajl; ?>">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-truncate">Név: <?php echo $fajl; ?></h5>
                            <p class="card-text"><small class="text-muted">Dátum: <?php echo date($DATUMFORMA, $datum); ?></small></p>
                        </div>
                    </div>
                </div>
                <?php
                $imageIndex++;
            }
            ?>

            <?php if (isset($_SESSION['login'])) { ?>
                <div class="d-flex justify-content-center mb-4">
                    <button type="button" class="btn btn-primary btn-lg px-4 py-2" data-bs-toggle="modal" data-bs-target="#uploadModal">
                        Képek feltöltése
                    </button>
                </div>
            <?php } else { ?>
                <div class="container my-5">
                    <div class="text-center mb-4">
                        <div class="alert alert-info" role="alert">
                            <span>Képeket csak <b>regisztrált</b> felhasználók tölthetnek fel! <a href="?oldal=login">Bejelentkezés</a></span>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <!-- Modal for Image Carousel -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Kép Megtekintése</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <?php
                            $firstImage = true;
                            foreach ($kepek as $fajl => $datum) {
                                ?>
                                <div class="carousel-item <?php echo $firstImage ? 'active' : ''; ?>">
                                    <img src="<?php echo $MAPPA . $fajl; ?>" class="d-block w-100" alt="<?php echo $fajl; ?>">
                                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 fw-bold ">
                                        <h5><?php echo $fajl; ?></h5>
                                        <p>Dátum: <?php echo date($DATUMFORMA, $datum); ?></p>
                                    </div>
                                </div>
                                <?php
                                $firstImage = false;
                            }
                            ?>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Set the carousel to the clicked image when the modal opens
    const modal = document.getElementById('imageModal');
    modal.addEventListener('show.bs.modal', function (event) {
        const triggerElement = event.relatedTarget; // The element that triggered the modal
        const index = triggerElement.getAttribute('data-bs-index');
        const carousel = document.getElementById('carouselExample');
        const carouselInstance = bootstrap.Carousel.getOrCreateInstance(carousel);
        carouselInstance.to(index);
    });
</script>

<!-- Feltöltés -->
<section>
    <div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="uploadModalLabel">Képek feltöltése</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Bezárás"></button>
                </div>
                <div class="modal-body">
                    <?php if (!empty($uzenet)): ?>
                        <div class="alert alert-info">
                            <ul class="mb-0">
                                <?php foreach ($uzenet as $u): ?>
                                    <li><?php echo htmlspecialchars($u); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    <form action="index.php?oldal=galleria" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                        <div class="mb-3">
                            <label for="elso" class="form-label">Első:</label>
                            <input type="file" name="elso" id="elso" class="form-control" accept="image/jpeg, image/png" required>
                        </div>
                        <div class="mb-3">
                            <label for="masodik" class="form-label">Második:</label>
                            <input type="file" name="masodik" id="masodik" class="form-control" accept="image/jpeg, image/png">
                        </div>
                        <div class="mb-3">
                            <label for="harmadik" class="form-label">Harmadik:</label>
                            <input type="file" name="harmadik" id="harmadik" class="form-control" accept="image/jpeg, image/png">
                        </div>
                        <button type="submit" name="kuld" class="btn btn-primary w-100">Feltöltés</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>