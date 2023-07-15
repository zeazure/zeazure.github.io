window.addEventListener("scroll", function () {
    var element = document.getElementById("scrollDiv");
    var elementPosition = element.getBoundingClientRect().top;

    if (elementPosition < window.innerHeight) {
        element.classList.add("scrolled");
    } else {
        element.classList.remove("scrolled");
    }

    if (window.scrollY === 0) {
        element.classList.remove('scrolled');
    }
});


var indexValue = 0;
//memberikan fungsi dan nilai pada variabel x
//serta mengatur kotak slide
function layar() {
    var x;
    const gambar = document.getElementsByClassName("item");

    for (x = 0; x < gambar.length; x++) {
        gambar[x].style.display = "none";
    }

    indexValue++;
    if (indexValue > gambar.length) { indexValue = 1 }
    gambar[indexValue - 1].style.display = "block";
}
layar();

var nilaislide = 1;
tampilan(nilaislide);
function nextslide(n) {
    tampilan(nilaislide += n);
}

function dotslide(n) {
    tampilan(nilaislide = n);
}

function tampilan(n) {
    //menambah memberi fungsi pada variabel 'y'
    //memberikan fungsi pada tombol
    var y; //Variabel dapat teman-teman ubah sesuai kebutuhan, namun perlu diingat teman-teman harus mengubah semua command yang terkait varibel tersebut
    var isi = document.getElementsByClassName("item");
    var garis = document.getElementsByClassName("line");

    if (n > isi.length) {
        nilaislide = 1;
    }

    if (n < 1) {
        nilaislide = isi.length;
    }

    for (y = 0; y < isi.length; y++) {
        isi[y].style.display = "none";
    }

    for (y = 0; y < isi.length; y++) {
        garis[y].className = garis[y].className.replace(" active", "")
    }

    isi[nilaislide - 1].style.display = "block";
    garis[nilaislide - 1].className += " active";
}

const menu = document.getElementById('tema');
const conts = document.getElementById('pc');



menu.addEventListener('click', function () {
    conts.classList.toggle('color');
    console.log('OK');
})




//Mobile Setting


var indexValues = 0;
//memberikan fungsi dan nilai pada variabel x
//serta mengatur kotak slide
function screen() {
    var a;
    const gambars = document.getElementsByClassName("items");

    for (a = 0; a < gambars.length; a++) {
        gambars[a].style.display = "none";
    }

    indexValues++;
    if (indexValues > gambars.length) { indexValues = 1 }
    gambars[indexValues - 1].style.display = "block";
}
screen();

var slidevalues = 1;
tampilans(slidevalues);
function nextslides(n) {
    tampilans(slidevalues += n);
}

function dotslides(n) {
    tampilans(slidevalues = n);
}

function tampilans(n) {
    //menambah memberi fungsi pada variabel 'y'
    //memberikan fungsi pada tombol
    var b; //Variabel dapat teman-teman ubah sesuai kebutuhan, namun perlu diingat teman-teman harus mengubah semua command yang terkait varibel tersebut
    var isiin = document.getElementsByClassName("items");
    var garisin = document.getElementsByClassName("lines");

    if (n > isiin.length) {
        slidevalues = 1;
    }

    if (n < 1) {
        slidevalues = isiin.length;
    }

    for (b = 0; b < isiin.length; b++) {
        isiin[b].style.display = "none";
    }

    for (b = 0; b < isiin.length; b++) {
        garisin[b].className = garisin[b].className.replace(" active", "")
    }

    isiin[slidevalues - 1].style.display = "block";
    garisin[slidevalues - 1].className += " active";
}


const semua = document.getElementById('semua');
const about = document.getElementById('about');
const home = document.getElementById('home');
const cont = document.getElementsByClassName('container')[1];

semua.addEventListener('click', function () {
    cont.classList.add('semua');
    cont.classList.remove('tentang');
    cont.classList.remove('rumah');
    console.log('OK');
})

home.addEventListener('click', function () {
    cont.classList.add('rumah')
    cont.classList.remove('semua');
    cont.classList.remove('tentang');
    console.log('OK');
})

about.addEventListener('click', function () {
    cont.classList.add('tentang');
    cont.classList.remove('semua');
    cont.classList.remove('rumah');
    console.log('OK');
})

window.addEventListener("scroll", function () {
    var element = document.getElementById("scrollDivs");
    var elementPosition = element.getBoundingClientRect().top;

    if (elementPosition < window.innerHeight) {
        element.classList.add("scrolled");
    } else {
        element.classList.remove("scrolled");
    }

    if (window.scrollY === 0) {
        element.classList.remove('scrolled');
    }
});


