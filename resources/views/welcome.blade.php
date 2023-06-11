<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Make Ship....ship | freely | globally</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                    <svg viewBox="0 180 500 120" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
                        <g data-paper-data="{&quot;description&quot;:&quot;Logo for MakeShip\n=================\n\nThis logo was generated by MarkMaker at http://emblemmatic.org/markmaker/ and may be composed of elements designed by others.\n\nThe font is Catamaran Black designed by Pria Ravichandran and released under the OFL license via Google Fonts: https://www.google.com/fonts/specimen/Catamaran. The font includes this copyright statement: Copyright 2014 Pria Ravichandran (pria.ravichandran@gmail.com)\n\nMarkMaker uses semantic data from the Princeton University WordNet database http://wordnet.princeton.edu and font descriptions from Google Fonts https://www.google.com/fonts.&quot;}" fill="none" fill-rule="nonzero" stroke="none" stroke-width="none" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                            <path d="M375.62541,289.15462v-78.30925h74.37459v78.30925z" fill="none" stroke="#125e5e" stroke-width="3.5"/>
                            <g data-paper-data="{&quot;elementType&quot;:&quot;logo&quot;}" fill="#125e5e" stroke="none" stroke-width="1">
                                <g data-paper-data="{&quot;elementType&quot;:&quot;text&quot;}">
                                    <g data-paper-data="{&quot;baseline&quot;:74.9,&quot;elementType&quot;:&quot;row&quot;}">
                                        <g data-paper-data="{&quot;baselineProportion&quot;:0.7737603305785123,&quot;fontSize&quot;:100,&quot;baseline&quot;:74.9,&quot;elementType&quot;:&quot;word&quot;}">
                                            <path d="M80.80865,245.68544l-6.20218,8.35946l-4.92129,0.67415l-7.41565,-9.03361v22.17953h-12.26953v-45.84219h8.42687l13.82007,17.46048l12.67402,-17.46048h8.15721v45.84219h-12.26953z" data-paper-data="{&quot;elementType&quot;:&quot;letter&quot;,&quot;baseline&quot;:68,&quot;baselineProportion&quot;:1,&quot;fontSize&quot;:100}"/>
                                            <path d="M104.94321,245.9551l-3.23592,-8.83136c1.88762,-0.85392 4.13479,-1.58425 6.7415,-2.19099c2.60671,-0.60673 5.16848,-0.9101 7.68531,-0.9101c4.3595,0 7.70778,1.21347 10.04483,3.64041c2.33705,2.42694 3.50558,5.75275 3.50558,9.97742v20.2245h-5.93252l-3.50558,-3.37075c-2.15728,2.74154 -4.60669,4.11231 -7.34823,4.11231c-4.0449,0 -7.10105,-1.01122 -9.16844,-3.03367c-2.06739,-2.02245 -3.10109,-4.76399 -3.10109,-8.22463c0,-6.38195 4.26962,-9.57293 12.80885,-9.57293h3.91007c-0.17977,-1.25841 -0.64044,-2.20222 -1.38201,-2.83143c-0.74156,-0.62921 -1.69661,-0.94381 -2.86514,-0.94381c-1.07864,0 -2.39323,0.19101 -3.94378,0.57303c-1.55054,0.38202 -2.95502,0.84269 -4.21344,1.38201M111.51617,258.79766c0.42696,0.42696 0.95505,0.64044 1.58425,0.64044c1.39324,0 2.83143,-0.60673 4.31456,-1.8202v-3.10109h-3.77524c-0.80898,0 -1.47189,0.24719 -1.98874,0.74156c-0.51685,0.49438 -0.77527,1.12358 -0.77527,1.88762c0,0.67415 0.21348,1.22471 0.64044,1.65167z" data-paper-data="{&quot;elementType&quot;:&quot;letter&quot;,&quot;baseline&quot;:50.2,&quot;baselineProportion&quot;:0.9785575048732944,&quot;fontSize&quot;:100}"/>
                                            <path d="M149.10003,257.34823v10.51674h-12.26953v-46.85342l12.26953,-0.74156v24.2694l12.20211,-10.31449l7.34823,8.42687l-8.69653,6.53925l11.05606,18.67395h-13.21334l-6.47184,-12.20211z" data-paper-data="{&quot;elementType&quot;:&quot;letter&quot;,&quot;baseline&quot;:70.60000000000001,&quot;baselineProportion&quot;:1,&quot;fontSize&quot;:100}"/>
                                            <path d="M205.59379,251.01122v3.57299h-19.88742c0.44943,1.39324 1.29212,2.48312 2.52806,3.26963c1.23594,0.78651 2.86514,1.17976 4.88759,1.17976c3.10109,0 6.08982,-0.74156 8.96619,-2.22469l3.43816,8.29204c-1.3483,0.98875 -3.2921,1.8202 -5.8314,2.49435c-2.5393,0.67415 -5.13477,1.01122 -7.78643,1.01122c-3.82018,0 -7.20217,-0.65168 -10.14596,-1.95503c-2.94379,-1.30336 -5.24713,-3.24716 -6.91004,-5.8314c-1.6629,-2.58424 -2.49435,-5.67409 -2.49435,-9.26956c0,-3.55052 0.76404,-6.65161 2.29211,-9.30327c1.52807,-2.65166 3.62917,-4.68534 6.3033,-6.10106c2.67413,-1.41571 5.67409,-2.12357 8.9999,-2.12357c3.37075,0 6.22465,0.76404 8.5617,2.29211c2.33705,1.52807 4.10108,3.57299 5.29208,6.13476c1.191,2.56177 1.7865,5.41567 1.7865,8.5617M193.86358,248.51687c0,-1.12358 -0.35955,-2.17975 -1.07864,-3.1685c-0.71909,-0.98875 -1.77526,-1.48313 -3.1685,-1.48313c-1.12358,0 -2.12357,0.4719 -2.99997,1.41571c-0.87639,0.94381 -1.29212,2.02245 -1.24718,3.23592z" data-paper-data="{&quot;elementType&quot;:&quot;letter&quot;,&quot;baseline&quot;:50.2,&quot;baselineProportion&quot;:0.9785575048732944,&quot;fontSize&quot;:100}"/>
                                            <path d="M213.21168,255.79769c1.21347,0.71909 2.88761,1.38201 5.02242,1.98874c2.13481,0.60673 4.01119,0.9101 5.62915,0.9101c1.79773,0 3.23592,-0.37078 4.31456,-1.11235c1.07864,-0.74156 1.61796,-1.56178 1.61796,-2.46065c0,-0.58426 -0.39325,-1.15729 -1.17976,-1.71908c-0.78651,-0.56179 -2.05616,-1.35954 -3.80895,-2.39323l-2.08986,-1.21347c-3.05615,-1.79773 -5.43814,-3.2921 -7.14599,-4.4831c-1.70785,-1.191 -3.23592,-2.73031 -4.58422,-4.61793c-1.3483,-1.88762 -2.02245,-4.02243 -2.02245,-6.40442c0,-2.51683 0.70786,-4.77523 2.12357,-6.77521c1.41571,-1.99998 3.40446,-3.56176 5.96623,-4.68534c2.56177,-1.12358 5.5505,-1.68537 8.96619,-1.68537c2.33705,0 4.73028,0.33707 7.1797,1.01122c2.44941,0.67415 4.55051,1.59549 6.3033,2.76401l-3.64041,8.29204c-2.382,-0.80898 -4.21344,-1.3483 -5.49432,-1.61796c-1.28088,-0.26966 -2.68536,-0.40449 -4.21344,-0.40449c-1.3483,0 -2.43818,0.3146 -3.26963,0.94381c-0.83145,0.62921 -1.24718,1.39324 -1.24718,2.29211c0,0.67415 0.34831,1.26965 1.04493,1.7865c0.69662,0.51685 1.85391,1.20223 3.47187,2.05616l2.42694,1.3483c2.83143,1.61796 5.19095,3.11233 7.07857,4.4831c1.88762,1.37077 3.49434,2.98873 4.82017,4.85388c1.32583,1.86515 1.98874,3.96625 1.98874,6.3033c0,2.60671 -0.74156,4.92129 -2.22469,6.94374c-1.48313,2.02245 -3.6067,3.61794 -6.37072,4.78646c-2.76401,1.16853 -5.9887,1.75279 -9.67405,1.75279c-2.382,0 -5.04489,-0.35955 -7.98868,-1.07864c-2.94379,-0.71909 -5.29208,-1.59549 -7.04487,-2.62918z" data-paper-data="{&quot;elementType&quot;:&quot;letter&quot;,&quot;baseline&quot;:69.3,&quot;baselineProportion&quot;:0.981586402266289,&quot;fontSize&quot;:100}"/>
                                            <path d="M270.64925,234.09006c3.95501,0 6.92127,1.15729 8.89878,3.47187c1.97751,2.31458 2.96626,5.38196 2.96626,9.20215v21.10089h-12.26953v-19.95484c0,-2.60671 -1.16853,-3.91007 -3.50558,-3.91007c-0.71909,0 -1.73032,0.19101 -3.03367,0.57303c-1.30336,0.38202 -2.49435,0.82022 -3.57299,1.31459v21.97729h-12.26953v-46.85342l12.26953,-0.74156v16.6515c3.77524,-1.88762 7.28082,-2.83143 10.51674,-2.83143z" data-paper-data="{&quot;elementType&quot;:&quot;letter&quot;,&quot;baseline&quot;:70.60000000000001,&quot;baselineProportion&quot;:1,&quot;fontSize&quot;:100}"/>
                                            <path d="M301.25565,235.1687v32.69627h-12.26953v-32.69627zM295.05347,230.71931c-1.79773,0 -3.34828,-0.65168 -4.65163,-1.95503c-1.30336,-1.30336 -1.95503,-2.8539 -1.95503,-4.65163c0,-1.84268 0.65168,-3.42693 1.95503,-4.75276c1.30336,-1.32583 2.8539,-1.98874 4.65163,-1.98874c1.84268,0 3.42693,0.66291 4.75276,1.98874c1.32583,1.32583 1.98874,2.91008 1.98874,4.75276c0,1.79773 -0.66291,3.34828 -1.98874,4.65163c-1.32583,1.30336 -2.91008,1.95503 -4.75276,1.95503" data-paper-data="{&quot;elementType&quot;:&quot;letter&quot;,&quot;baseline&quot;:74.9,&quot;baselineProportion&quot;:1,&quot;fontSize&quot;:100}"/>
                                            <path d="M325.52505,234.02265c5.03365,0 9.08979,1.43819 12.16841,4.31456c3.07862,2.87637 4.61793,7.12352 4.61793,12.74143c0,5.7078 -1.56178,10.05607 -4.68534,13.0448c-3.12356,2.98873 -7.337,4.4831 -12.64031,4.4831c-1.52807,0 -2.96626,-0.22472 -4.31456,-0.67415v14.02232l-12.26953,0.67415v-47.39274h6.13476l1.88762,1.88762c1.3483,-0.94381 2.79772,-1.69661 4.34827,-2.2584c1.55054,-0.56179 3.1348,-0.84269 4.75276,-0.84269M324.17675,259.16844c1.57302,0 2.87637,-0.71909 3.91007,-2.15728c1.0337,-1.43819 1.55054,-3.39322 1.55054,-5.8651c0,-2.47188 -0.51685,-4.37074 -1.55054,-5.69657c-1.0337,-1.32583 -2.51683,-1.98874 -4.44939,-1.98874c-0.94381,0 -1.93256,0.33707 -2.96626,1.01122v13.82007c1.30336,0.58426 2.47188,0.87639 3.50558,0.87639z" data-paper-data="{&quot;elementType&quot;:&quot;letter&quot;,&quot;baseline&quot;:50.2,&quot;baselineProportion&quot;:0.69625520110957,&quot;fontSize&quot;:100}"/>
                                        </g>
                                    </g>
                                </g>
                            </g>
                            <g data-paper-data="{&quot;elementType&quot;:&quot;emblem&quot;}" fill="#125e5e" stroke="none" stroke-width="1">
                                <g data-paper-data="{&quot;baselineProportion&quot;:1,&quot;fontSize&quot;:100,&quot;baseline&quot;:68,&quot;elementType&quot;:&quot;word&quot;}">
                                    <path d="M422.31346,250.76006l-6.35687,8.56795l-5.04404,0.69096l-7.6006,-9.25892v22.73271h-12.57554v-46.98555h8.63705l14.16476,17.89597l12.99012,-17.89597h8.36066v46.98555h-12.57554z" data-paper-data="{&quot;elementType&quot;:&quot;letter&quot;,&quot;baseline&quot;:68,&quot;baselineProportion&quot;:1,&quot;fontSize&quot;:100}"/>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>

                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-1 gap-6 lg:gap-8">
                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Ship | Freely | Around the globe</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Forge</a>, <a href="https://vapor.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Vapor</a>, <a href="https://nova.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Nova</a>, and <a href="https://envoyer.io" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Telescope</a>, and more.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                        <div class="flex items-center gap-4">
                            <a href="https://github.com/sponsors/taylorotwell" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="-mt-px mr-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>