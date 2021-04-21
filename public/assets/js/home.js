
var images = [
    "img/7.jpg",
    "img/13.jpg",
    "img/14.jpg",
    "img/21.jpg",
    "img/22.jpg",
    "img/28.jpg"
]; //0...6
var index = 0;
var setImage = setInterval(
    function () {
        var row = document.getElementById("images").innerHTML;

        if(images.length > index){
        document.getElementById("images").innerHTML =
            row +"<div class='col-md-2'>" + "<img src='"+ images[index] +"' class='img-fluid'></div> ";
        index++;
    }
    else{
        clearInterval(setImage);
        }
    }
    ,2000);





