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