module.exports = {
    future  : {
        // removeDeprecatedGapUtilities: true,
        // purgeLayersByDefault: true,
    },
    purge : {
        content : [
            './*.php',
            '*.php',
            './blocks/*.php',
            'blocks/*.php',
        ],

        options: {
            safelist: ['grid-cols-*', 'grid-cols', 'grid-cols-5'],
        },
    },
    theme   : {
        fontWeight : {
            200 : 200,
            400 : 400,
            700 : 700,
            900 : 900
        },
        extend : {
            transitionProperty: {
                'width': 'width',
            },
            fontFamily: {
                WorkSans: ['Work Sans', 'sans-serif'],
                Mont: ['Montserrat', 'sans-serif'],
            }
        },
        screens: {
            'phone': {'min': '300px', 'max': '749px'},

            'big-phone': {'min': '360px', 'max': '749px'},
            // => @media (min-width: 400px) { ... }

            'tablet': {'min': '750px', 'max': '1200px'},

            //'big-tablet': {'min': '1000px', 'max': '1200px'},

            'computer': '1280px',

            'big-computer': '1400px',
        },
        colors: {
            mainbg : '#E5E5E5',
            grey : '#95A3B1',
            transparent : 'transparent',
            blue : '#2B8CFF',
            green : '#82EE17',
            black : '#000',
            white : '#fff'
        }
    },
    variants: {
        extend: {
            margin: ['group-hover','hover','group-focus'],
            width: ['group-hover','group-focus'],
            translate: ['group-hover','hover','group-focus'],
            scale: ['responsive', 'hover', 'focus','group-hover','group-focus'],
            inset: ['group-hover','group-focus'],
            opacity: ['group-hover','group-focus'],
            display: ['responsive','hover', 'focus','group-hover','group-focus'],
        }
    },
    plugins : [],
}