$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        margin:15,
        autoplay:true,
        loop:true,
        autoplayTimeout:1000,
        autoplayHoverPause:true,
        nav:true,
        animateOut:"jello",
        animateIn:"jello",
        // items:5
        responsive:{
            0:{
                items:1
            },
            468:{
                items:2
            },
            768:{
                items:3
            },
            992:{
                items:4
            }

        }
    });
    $("#gallery").lightGallery({
        download:false,
        share:false
    });




    $.fn.datepicker.language["eng"] = {
        days: ["Dushanba","Seshanba","Chorshanba", "Payshanba","Juma","Shanba","Yakshanba"],
        daysShort:["Du","Se","Cho","Pa","Ju","Sha","Ya"],
        daysMin:["Ya","Du","Se","Cho","Pa","Ju","Sha"]
    }

    $("#picker").datepicker({
        language: "eng",
        multipleDates: false,
        multipleDatesSeparator: " ; ",
        autoClose: true,
        // timepicker: true,
        // startDate: 9,
        // minHours: 9,
        // maxHours: 18,
        clearButton: true
    })
})


