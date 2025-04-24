window.addEventListener("load", function () {
    new Glider(document.querySelector(".glider"), {
        slidesToShow: 1.5,
        slidesToScroll: 1,
        arrows: {
            prev: ".left_arr",
            next: ".right_arr",
        },
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2.5,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3.5,
                    slidesToScroll: 1,
                },
            },
        ],
    });
    new Glider(document.querySelector(".glider1"), {
        slidesToShow: 2,
        slidesToScroll: 1,

        arrows: {
            prev: ".left_arr1",
            next: ".right_arr1",
        },
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 6,
                    slidesToScroll: 1,
                },
            },
        ],
    });
    new Glider(document.querySelector(".glider2"), {
        slidesToShow: 1,
        slidesToScroll: 1,

        arrows: {
            prev: ".left_arr2",
            next: ".right_arr2",
        },
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                },
            },
        ],
    });
});



