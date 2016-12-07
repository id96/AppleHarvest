/*
* INFO/CS 1300
* Fall 2016
* Jialu Bao
*/
//just try with the images we have right now and two images I found on flickr,
//would replace and resize the images later
var pix = ["IV-AppleFest001(PhotobyHannahMacLean)",
"IV-AppleFest003 (Photo by Alisha Tamarchenko)", "IV-AppleFest004（Photo by Alisha Tamarchenko",
"IV-AppleFest026 (Photo by Alisha Tamarchenko)", "IV-AppleFest017 (Photo by Alex Anderson)",
"IV-AppleFest009 (Photo by Alisha Tamarchenko)", "IV-AppleFest010 (Photo by Alisha Tamarchenko)"
];
var index = 0;
var main_image = document.getElementById("slide_display");
var imagename;
var roll;
//following codes adapted from http://addtocalendar.com/#tab_widget_style-->

// functions
function movePrevious() {
    if (index <= 0) {
        index = pix.length-1;
    } else {
        index -= 1;
    }
    var imagename = 'images/' + pix[index] + '.jpg'
    document.getElementById('slide_display').src=imagename;
}

function moveNext() {
    if (index < pix.length-1) {
        index += 1;
    } else {
        index = 0;
    }
    var imagename = 'images/' + pix[index] + '.jpg'
    document.getElementById('slide_display').src=imagename;
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
