const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    darkMode: false, // or 'media' or 'class'

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                poppin: ['Poppins', ...defaultTheme.fontFamily.sans],
            },
            
        },

        screens: {
            'sm': '640px',
            // => @media (min-width: 640px) { ... }
      
            'md': '768px',
            // => @media (min-width: 768px) { ... }
      
            'lg': '1032px',
            // => @media (min-width: 1024px) { ... }
      
            'xl': '1280px',
            // => @media (min-width: 1280px) { ... }
      
            '2xl': '1536px',
            // => @media (min-width: 1536px) { ... }
        },

        width:{
            '5.5/12':'43%',

            '6.5/12':'57%',
        },

        
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [
        require('@tailwindcss/forms')
    ],
    
    theme: {
        extend: {
        backgroundImage: theme => ({
            'footer-top': "url('/Image/footer/topfooterbg.svg')",
            'footer-bottom': "url('/Image/footer/bottomfooterbg.svg')",
        })
        }
    }
};
