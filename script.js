const title = document.getElementById('title');
const judul = document.getElementById('judul');
const pengunjung = document.getElementById('visitor-count');
const sirkel = document.getElementsByClassName('kumpulan')[0];
const gambar1 = document.getElementById('gambar-1');
const gambar2 = document.getElementById('gambar-2');
const gambar3 = document.getElementById('gambar-3');
const gambar4 = document.getElementById('gambar-4');
const gambar5 = document.getElementById('gambar-5');

window.addEventListener('scroll', function () {
    let value = window.scrollY;

    title.style.top = value + 20 + 'px';
})

judul.addEventListener('click', function () {
    title.classList.toggle('mode');
    title.classList.remove('size');
    console.log('ok');
})

pengunjung.addEventListener('click', function () {
    title.classList.toggle('size');
    title.classList.remove('mode');
    console.log('ok');
})

gambar1.addEventListener('click', function () {
    sirkel.classList.add('mode1');
    sirkel.classList.remove('mode2');
    sirkel.classList.remove('mode3');
    sirkel.classList.remove('mode4');
    sirkel.classList.remove('mode5');
    console.log('ok');
})

gambar2.addEventListener('click', function () {
    sirkel.classList.remove('mode1');
    sirkel.classList.add('mode2');
    sirkel.classList.remove('mode3');
    sirkel.classList.remove('mode4');
    sirkel.classList.remove('mode5');
    console.log('ok');
})

gambar3.addEventListener('click', function () {
    sirkel.classList.remove('mode1');
    sirkel.classList.remove('mode2');
    sirkel.classList.add('mode3');
    sirkel.classList.remove('mode4');
    sirkel.classList.remove('mode5');
    console.log('ok');
})

gambar4.addEventListener('click', function () {
    sirkel.classList.remove('mode1');
    sirkel.classList.remove('mode2');
    sirkel.classList.remove('mode3');
    sirkel.classList.add('mode4');
    sirkel.classList.remove('mode5');
    console.log('ok');
})

gambar5.addEventListener('click', function () {
    sirkel.classList.remove('mode1');
    sirkel.classList.remove('mode2');
    sirkel.classList.remove('mode3');
    sirkel.classList.remove('mode4');
    sirkel.classList.add('mode5');
    console.log('ok');
})

var counter = 1;
setInterval(function () {
    document.getElementsByClassName('gambar' + counter).checked = true;
    counter++;
    if (counter > 4) {
        counter = 1;
    }
}, 5000);


var today = new Date();
const atas = document.getElementById('up');
const bar = document.getElementById('scrollDiv');
const pagi = document.getElementById('light');
const malam = document.getElementById('dark');
const intro = document.getElementById('color-perkenalan');
const dev = document.getElementById('color-development')
var currentHour = today.getHours();
if (currentHour >= 6 && currentHour < 18) { /* pagi hari */
    atas.style.backgroundImage = "url('/asset/wallmorning.jpg')";
    bar.style.backgroundImage = "url('/asset/theme.png')"
    pagi.style.display = "flex";
    malam.style.display = "none";
    intro.style.color = "#48C7E6";
    dev.style.color = "#48C7E6";
} else { /* malam hari */
    atas.style.backgroundImage = "url('/asset/wallpaper.jpg')";
    bar.style.backgroundImage = "url('/asset/theme_dark.png')"
    malam.style.display = "flex";
    pagi.style.display = "none";
    intro.style.color = "#000";
    dev.style.color = "#000";
}

// Mengambil nilai jumlah pengunjung dari cookie
let visitorCount = parseInt(getCookie('visitorCount'));

// Mengecek apakah cookie visitorCount sudah ada atau belum
if (isNaN(visitorCount)) {
    // Jika belum ada, maka set nilai visitorCount menjadi 1
    visitorCount = 1;
} else {
    // Jika sudah ada, maka tambahkan nilai visitorCount dengan 1
    visitorCount++;
}

// Menyimpan nilai visitorCount ke dalam cookie
setCookie('visitorCount', visitorCount, 365);

// Menampilkan jumlah pengunjung pada halaman website
document.getElementById('visitor-count').innerHTML = 'Anda Pengunjung ke: ' + visitorCount;

// Fungsi untuk mengambil nilai cookie
function getCookie(name) {
    let value = '; ' + document.cookie;
    let parts = value.split('; ' + name + '=');
    if (parts.length == 2) {
        return parts.pop().split(';').shift();
    }
}

// Fungsi untuk menyimpan nilai cookie
function setCookie(name, value, days) {
    let expires = new Date();
    expires.setTime(expires.getTime() + (days * 0 * 0 * 0 * 100));
    document.cookie = name + '=' + value + ';expires=' + expires.toUTCString();
}

window.addEventListener("scroll", function () {
    var element = document.getElementById("tab");
    var elementPosition = element.getBoundingClientRect().top;

    if (elementPosition < window.innerHeight) {
        element.classList.remove("animate__rubberBand");
    } else {
        element.classList.add("animate__rubberBand");
    }

    if (window.scrollY === 0) {
        element.classList.add('animate__rubberBand');
    }
});

const textElement = document.getElementById('judul');
const textelement = document.getElementsByClassName('judul');
const text = 'Welcome to Zeazure';
let index = 0;

function animateText() {
    if (index < text.length) {
        textElement.innerHTML += text.charAt(index);
        index++;
        setTimeout(animateText, 100);
    }
}

animateText();


//gambar

const parralax = document.getElementById('gambar-a');

if (window.scrollY > parralax.top) {
    //$('.gambar').addClass('muncul');
    console.log('ok');
}

window.addEventListener('scroll', function () {
    var hiddenSection = document.querySelector('.hidden-section');
    var windowHeight = window.innerHeight;
    var scrollY = window.pageYOffset;

    // Ketinggian saat halaman muncul (misalnya 300px)
    var revealHeight = 1350;

    if (scrollY > revealHeight && scrollY < windowHeight + revealHeight) {
        hiddenSection.classList.add('visible');
    }
});

window.addEventListener('scroll', function () {
    var hiddenSection = document.querySelector('#parralax-mode');
    var windowHeight = window.innerHeight;
    var scrollY = window.pageYOffset;

    // Ketinggian saat halaman muncul (misalnya 300px)
    var revealHeight = 1900;

    if (scrollY > revealHeight && scrollY < windowHeight + revealHeight) {
        hiddenSection.classList.add('visibles');
    }
});

window.addEventListener('scroll', function () {
    var hiddenSection = document.querySelector('#parralax-modes');
    var windowHeight = window.innerHeight;
    var scrollY = window.pageYOffset;

    // Ketinggian saat halaman muncul (misalnya 300px)
    var revealHeight = 1900;

    if (scrollY > revealHeight && scrollY < windowHeight + revealHeight) {
        hiddenSection.classList.add('visibless');
    }
});

