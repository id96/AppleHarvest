/*
* INFO/CS 1300
* Fall 2016
* Jialu Bao
*/
//just try with the images we have right now and two images I found on flickr,
//would replace and resize the images later
var pix = ["apples-1285236_1920", "banner", "eatlikenoone", "hannah_applefest"];
var index = 0;
var main_image = document.getElementById("enlarge");
//var change_name = "routemap";
var roll;

// functions
function movePrevious() {
    if (index <= 0) {
        index = pix.length-1;
    } else {
        index -= 1;
    }
    var imagename = 'images/' + pix[index] + '.jpg'
    document.getElementById('display').src=imagename;
    }

function moveNext() {
    if (index < pix.length-1) {
        index += 1;
    } else {
        index = 0;
    }
    var imagename = 'images/' + pix[index] + '.jpg'
    document.getElementById('display').src=imagename;
    }

function swapImg() {
    var imagename = 'images/routemap.jpg'
    document.getElementById('enlarge').src=imagename;
    }

function swapImg10() {
    var imagename = 'images/route10.jpg'
    document.getElementById('enlarge').src=imagename;
    }

function swapImg11() {
    var imagename = 'images/route11.jpg'
    document.getElementById('enlarge').src=imagename;
    }

function swapImg15() {
    var imagename = 'images/route15.jpg'
    document.getElementById('enlarge').src=imagename;
    }

function swapImg17() {
    var imagename = 'images/route17.jpg'
    document.getElementById('enlarge').src=imagename;
    }


//I want to make it slideshow but have not yet succeeded
window.onload = function myStartFunction() {
    roll = setTimeout(function(){moveNext();}, 1000);
}

