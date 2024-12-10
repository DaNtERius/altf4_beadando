//Carousel indikátor színcsere
document.addEventListener("DOMContentLoaded", function () {
    // Összes carousel megszámolása
    const indicators = document.querySelectorAll(".carousel-indicators button");

    indicators.forEach(indicator => {
        // Szám kinyerése a data-bs-slide-toból
        const slideNumber = parseInt(indicator.getAttribute("data-bs-slide-to"), 11);

        // Maradék alapú színválasztás
        if (slideNumber % 2 === 0) {
            indicator.style.backgroundColor = "white";
            indicator.style.borderColor = "black"
            indicator.style.borderWidth = "1px";
        } else {
            indicator.style.backgroundColor = "black";
            indicator.style.borderColor = "white";
            indicator.style.borderWidth = "1px";
        }
    });
});
//Login, regisztráció, elfelejtett jelszó validáció
window.onload = function () {
    var kuld = document.getElementById("kuld");
    if(kuld){
        kuld.disabled = true;
    }
};
function ellenoriz() {

    var rendben = true;
    var fokusz = null;

    // Mezők és minták egy tömbben a dinamikus kezeléshez
    const fields = [
        { id: "name", pattern: /^[A-ZÁÉÍÓÖŐÚÜŰ][a-záéíóöőúüűàâäãåçèéêëìíîïðòóôõöøùúûüÿñšž]+(?: [A-ZÁÉÍÓÖŐÚÜŰ][a-záéíóöőúüűàâäãåçèéêëìíîïðòóôõöøùúûüÿñšž]+)+$/, minLength: 1, errorMsg: "Érvényes nevet kell beírni." },
        { id: "email", pattern: /^[a-z0-9]+@[a-z0-9]+\.[a-z]{2,4}$/, minLength: 1, errorMsg: "Írj be egy helyes e-mail címet." },
        { id: "subject", pattern: /^.{3,100}$/, minLength: 3, errorMsg: "A tárgynak 3 és 100 karakter között kell lennie." },
        { id: "message", pattern: /^.{10,1000}$/, minLength: 10, errorMsg: "Az üzenetnek 3 és 100 karakter között kell lennie." }
    ];

    // Mezők dinamikus ellenőrzése
    fields.forEach(fieldConfig => {
        const field = document.getElementById(fieldConfig.id);
        if (field) {
            const isValid = validateField(field, fieldConfig.pattern, fieldConfig.minLength, fieldConfig.errorMsg);
            rendben = rendben && isValid; // Eredmény szummája
            if (!isValid && !fokusz) fokusz = field; // Fókuszáljon az első érvénytelen mezőre
        }
    });

    // Fókuszáljon az első érvénytelen mezőre, ha van ilyen
    if (fokusz) {
        fokusz.focus();
    }

    // A beküldés gomb engedélyezése vagy letiltása az általános érvényesség alapján
    const kuld = document.getElementById("kuld");
    if (kuld) {
        kuld.disabled = !rendben;
    }

    return rendben;
}

// Mező ellenőrzése minta és hossz alapján
function validateField(field, pattern, minLength, errorMsg) {
    const value = field.value.trim();
    if (value.length < minLength || !pattern.test(value)) {
        field.style.background = "#f99"; // Érvénytelen mező megjelölése
        field.classList.remove("is-valid");
        field.classList.add("is-invalid");
        // Tetszőlegesen megjeleníti a hibaüzenetet valahol a felhasználói felületen (pl. figyelmeztetés vagy soron belüli üzenet).
        console.error(errorMsg);
        return false;
    } else {
        field.style.background = "#9f9"; // Érvénytelen mező megjelölése
        field.classList.remove("is-invalid");
        field.classList.add("is-valid");
        return true;
    }
}
