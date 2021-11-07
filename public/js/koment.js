function showComment(cislo) {
    el = document.getElementById("koment_answer"+cislo)
    el.style.display = "none";
    el = document.getElementById("koment_input"+cislo)
    el.style.display = "block";
    el = document.getElementById("koment_send"+cislo)
    el.style.display = "block";
    el.style.maxWidth = "100px"
    el.style.marginLeft = "20px"
    el = document.getElementById("koment_hide"+cislo)
    el.style.display = "block";
    el.style.maxWidth = "100px"
    el.style.marginLeft = "20px"
}

function hideComment(cislo) {
    el = document.getElementById("koment_answer"+cislo)
    el.style.display = "block";
    el.style.maxWidth = "100px"
    el.style.marginLeft = "20px"
    el = document.getElementById("koment_input"+cislo)
    el.style.display = "none";
    el = document.getElementById("koment_send"+cislo)
    el.style.display = "none";
    el = document.getElementById("koment_hide"+cislo)
    el.style.display = "none";
}
