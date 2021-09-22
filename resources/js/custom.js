import Splide from '@splidejs/splide';


new Splide( '.splide' ,  {

    type   : 'loop',

    perPage: 3,
    breakpoints: {
        1200: {
            perPage: 1,
        },
        480: {
            perPage: 1,
        },
    },

}).mount();