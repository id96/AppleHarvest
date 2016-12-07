/*
* INFO/CS 1300
* Fall 2016
* Jialu Bao
*/
//just try with the images we have right now and two images I found on flickr,
//would replace and resize the images later
var pix = ["apples-1285236_1920", "hannah_applefest"];
var index = 0;
var main_image = document.getElementById("enlarge");
//var change_name = "routemap";
var roll;

var slideIndex = 1;

function calendar() {
    if (window.addtocalendar)if(typeof window.addtocalendar.start == "function")return;
    if (window.ifaddtocalendar == undefined) { window.ifaddtocalendar = 1;
    var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
    s.type = 'text/javascript';s.charset = 'UTF-8';s.async = true;
    s.src = ('https:' == window.location.protocol ? 'https' : 'http')+'://addtocalendar.com/atc/1.5/atc.min.js';
    var h = d[g]('body')[0];h.appendChild(s); }}();

//following codes adapted from http://addtocalendar.com/#tab_widget_style-->


function plusDivs(n) {
    showDivs(slideIndex += n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    //var x = "apples-1285236_1920", "hannah_applefest"];
    if (n > x.length) {slideIndex = 1} 
    if (n < 1) {slideIndex = x.length} ;
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none"; 
    }
    x[slideIndex-1].style.display = "block"; 
}
//adapt the code from w3 school


function swapImg() {
    var imagename = 'images/routemap.jpg'
    document.getElementById('enlarge').src=imagename;
    //Media Credit : TCAT Website
}

function swapImg10() {
    var imagename = 'images/route10.jpg'
    document.getElementById('enlarge').src=imagename;
    //Media Credit : TCAT Website
}

function swapImg11() {
    var imagename = 'images/route11.jpg'
    document.getElementById('enlarge').src=imagename;
    //Media Credit : TCAT Website
}

function swapImg15() {
    var imagename = 'images/route15.jpg'
    document.getElementById('enlarge').src=imagename;
    //Media Credit : TCAT Website
}

function swapImg17() {
    var imagename = 'images/route17.jpg'
    document.getElementById('enlarge').src=imagename;
    //Media Credit : TCAT Website
}



