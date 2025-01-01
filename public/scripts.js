/*!
    * Start Bootstrap - SB Admin v7.0.7 (https://startbootstrap.com/template/sb-admin)
    * Copyright 2013-2023 Start Bootstrap
    * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
    */
    // 
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        // Uncomment Below to persist sidebar toggle between refreshes
        // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
        //     document.body.classList.toggle('sb-sidenav-toggled');
        // }
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

});

function success(page) {
    var part = "";
    if (page=="member") {
        part = "member";
        const fullName = document.getElementById("name").value;
        const idNumber = document.getElementById("idNumber").value;
        const position = document.getElementById("position").value;
        const major = document.getElementById("number").value;
        const photo = document.getElementById("photo").value;
        if (!fullName || !idNumber || position === "Choose Position" || !major || !photo) {
            alert("Data " + part + " masih belum lengkap!");
            return;
        }
    } else if (page=="act") {
        part = "activities";
        const title = document.getElementById("title").value;
        const photo = document.getElementById("photo").value;
        const Desc = document.getElementById("description").value;
        if(!title || !photo || !Desc){
            alert("Data " + part + " masih belum lengkap!");
            return;
        }
    } else {
        part = "publications"
        const title = document.getElementById("title").value;
        const author = document.getElementById("author").value;
        const year = document.getElementById("year").value;
        const publisher = document.getElementById("publisher").value;
        const source = document.getElementById("source").value;
        if(!title || !author || !year || !publisher || !source){
            alert("Data " + part + " masih belum lengkap!");
            return;
        }
    }
    alert('Data ' + part + ' berhasil ditambahkan!')
}

// Mengecek keberadaan elemen di dalam viewport
function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
    rect.top <= (window.innerHeight - 100) && 
    rect.bottom >= 0
    );
}    
// Menambahkan class 'fade-up' ketika elemen masuk viewport
function handleScroll() {
    const elements = document.querySelectorAll('.animate-on-scroll');
    elements.forEach(el => {
    if (isInViewport(el)) {
        el.classList.add('fade-up');
    }
    });
}
window.addEventListener('scroll', handleScroll);
window.addEventListener('load', handleScroll);

// Menambahkan efeh hover pada card
const cards = document.querySelectorAll('.card-animate');
cards.forEach(card => {
    card.addEventListener('mousemove', (e) => {
        const cardRect = card.getBoundingClientRect();
        const centerX = cardRect.left + cardRect.width / 2;
        const centerY = cardRect.top + cardRect.height / 2;

        const x = e.clientX - centerX;
        const y = e.clientY - centerY;

        const rotateX = (-y / cardRect.height) * 25;
        const rotateY = (x / cardRect.width) * 25;

        card.style.transform = `scale(1.05) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
    });

    card.addEventListener('mouseleave', () => {
        card.style.transform = 'scale(1)';
    });
});
