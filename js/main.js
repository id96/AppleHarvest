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



