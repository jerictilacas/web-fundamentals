//for Error purposes
"use strict";

var pageInner = document.getElementById("mainTime");

console.log("this is an element in type: ", pageInner.nodeType );
console.log("the Inner html is ", pageInner.innerHTML );
console.log("child node: ", pageInner.childNodes.length );


//hide the item
function hiddenFunction(){
    var d = document.getElementsByClassName("ul-main-menu");
    var childrens = d[0]['children'];
    for (var a = 0; a < childrens.length; a++){
        childrens[a]["hidden"] = true;
    }
    // or
    // d[0]["children"][2]["hidden"] = true;
    // or
    // var c = d[0].getElementsByTagName("li");
    // c[2]["hidden"] = true;
}


// just console
var mylinks = document.getElementsByTagName("a");
console.log("Links: ", mylinks.length);

var H2tag = document.getElementsByTagName("h2");
console.log("h2 tag: ", H2tag.length);


var myFirstList = document.getElementsByClassName("ul-inline");
var limitedlist = myFirstList[0].getElementsByTagName("li");
var inner = myFirstList[0].getElementsByTagName("a");
console.log("li tag ", limitedlist.length);
console.log(limitedlist[0].innerHTML);
console.log(inner[0].innerHTML);


// Float right
var textRight = document.getElementsByClassName("textRight");
textRight[0].setAttribute("align", "right");



// Change the word of the Text
function myFunction() {
    var x = document.getElementsByClassName("example");
    if (x[0].innerHTML == "mozilla.org"){
        x[0].innerHTML = "Hello World!";
    }else{
        x[0].innerHTML = "mozilla.org";
    }
}




//Creating new item at ul and li tag
function myfunction(){
    var myNewElement = document.createElement("li");
    var myNewEl = document.createElement("a");
    myFirstList[0].appendChild(myNewElement);
    myNewElement.appendChild(myNewEl);
    myNewEl.innerHTML = "item list";
}


// document.onclick = function() {
//     alert("You clicked somewhere in the document");
// };

// var logo = document.getElementsByClassName("logo");
// logo[0].onclick =function(){
//     alert("you clicked the logo");
// }


//Email Box
var emailField = document.getElementById("email");
emailField.onfocus = function (){
    if (this.value == "your mail"){
        this.value = "";
    }
};
emailField.onblur = function (){
    if (emailField.value == ""){
        emailField.value = "your mail";
    }
};

//Search Box
var search = document.getElementById("search");
search.onfocus = function (){
    if (this.value == "Search"){
        this.value = "";
    }
};
search.onblur = function (){
    if (search.value == ""){
        search.value = "Search";
    }
};

/*

function addClass(el, className) {
    el.className = el.className + ' ' + className;
}

function removeClass(el, className) {
    el.className = el.className.replace('/\s'+className+'$/', '');
}

function hasClass(el, className) {
    var r = el.className.search('\s'+className+'\s|\s'+className+'|^'+className+'\s|^'+className+'$');

    return r != -1;
}

var d = document.getElementsByClassName('li-dropdown');
d[0].onclick = function (e){
    if (hasClass(this, 'open')) {
        removeClass(this, 'open');
    } else {
        addClass(this, 'open');
    }
    e.preventDefault();
};
*/

// image changer
var myImage = document.getElementsByClassName("img-responsive");

var imageArray = ['clients/1.png', 'clients/2.png', 'clients/3.png', 'clients/4.png','clients/5.png','clients/6.png'];
var x = 0;
function changeImage(){
    myImage[0].setAttribute("src", imageArray[x]);
    x++;
    if (x >= imageArray.length){
        x = 0;
    }
}
var s = setInterval(changeImage, 3000);
myImage[0].onclick =function () {
    clearInterval(s);
};



// for sample paragraph
var el = document.getElementById("sample");

function paragraph(){
    el.onclick = function (){
        if (el.className == "example"){
            el.className = "";
        }else{
            el.className = "example";
        }
    }
}


//hidden checkBox
function checkBox(){
    var tour = document.getElementById("tour");
    var brochures = document.getElementById("brochures");

    brochures.onclick =function(){
        if (brochures.checked){
            tour.style.display = "block";
        }else {
            tour.style.display = "none";
        }
    };
    tour.style.display = "none";
}



//animation
var currentPos = 0;
var intervalHandle;
var animate = document.getElementById("animate");
function beginAnimate(){
    animate.style.position = "absolute";
    animate.style.top = "100px";

    intervalHandle = setInterval(animateBox,100);
}

function animateBox(){
    currentPos+=5;
    animate.style.left = currentPos + "px";
    if (currentPos > 900){
        clearInterval(intervalHandle);
        animate.style.position = "";
        animate.style.left = "";
        animate.style.top = "";
    }
}

window.onload = function(){
    setTimeout(beginAnimate,100);
    paragraph();
    checkBox();
};

//Using jQuery
// document.getElementById("header").className = "highlight";

// jQuery("#sample").addClass("highlight");
// jQuery(".row");
// jQuery("p");
// jQuery("a");
// jQuery("li");
// jQuery("ul");

//OR
//Hide p tag
// // $ = jQuery
// $("p").hide(10000);



//Samples
$("#firefox").click(function(){
    $("#firefox").text("You clicked me!");
});

$("h2").click(function(){
    $(this).text("You clicked me!");
});

$("h3").click(function(){
    $(this).fadeOut("1000");
});

$("document").ready(function(){
    $("h1").css("color","red");
});
