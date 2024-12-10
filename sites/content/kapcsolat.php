<?php if(file_exists('./logicals/'.$keres['fajl'].'.php')) { include("./logicals/{$keres['fajl']}.php"); } ?>
<section class="container px-4">
    <div class="row gx-4 justify-content-center">
        <div class="col-lg-8">
    <div class="container mt-6">
        <h2>Kapcsolatfelvételi űrlap</h2>
        <div id="validation-alert" class="alert alert-danger d-none" role="alert"></div>

        <form action="?oldal=kuldes" method="POST" onsubmit="return ellenoriz();">
            <div class="form-group mb-3">
                <label for="name" class="fw-bold mb-2">Név:</label>
                <input type="text" class="form-control is-invalid" id="name" name="name">
            </div>

            <div class="form-group mb-3">
                <label for="email" class="fw-bold mb-2">E-mail cím:</label>
                <input type="email" class="form-control is-invalid" id="email" name="email">
            </div>

            <div class="form-group mb-3">
                <label for="subject" class="fw-bold mb-2">Tárgy:</label>
                <input type="text" class="form-control is-invalid" id="subject" name="subject">
            </div>

            <div class="form-group mb-3">
                <label for="message" class="fw-bold mb-2">Üzenet:</label>
                <textarea id="message" name="message" class="form-control is-invalid" rows="5"></textarea>
            </div>

            <button onclick="ellenoriz()" type="button" class="btn btn-success mt-3">Ellenőriz</button>
            <button type="submit" id="kuld" class="btn btn-primary mt-3">Küldés</button>
        </form>
    </div>
    </div>
    </div>
</section>