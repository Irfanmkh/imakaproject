@php
    $jumbotron = get_section_data('1');
@endphp


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syahrandy Waskito</title>
    <link rel="shortcut icon" href="/assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="/assets/dist/output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body>

    <!-- * Header Section -->
    <header
        class="sticky bg-[rgba(255,255,255,0.5)] backdrop-blur absolute  top-0 left-0 w-full flex items-center z-10">
        <div class="container">
            <div class="flex items-center justify-between relative">

                <div class="px-4">
                    <a href="#home"
                        class="font-bold text-xl lg:text-2xl text-primary block py-6 font-monobuntu tracking-wider">IMAKA</a>
                </div>

                <div class="flex items-center px-4">
                    <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                        <span class="hamburger-line origin-top-left transition duration-150 ease-in-out"></span>
                        <span class="hamburger-line transition duration-150 ease-in-out"></span>
                        <span class="hamburger-line origin-bottom-left transition duration-150 ease-in-out"></span>
                    </button>

                    <nav id="nav-menu"
                        class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none font-monobuntu">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="#home"
                                    class="text-base text-dark py-2 mx-6 flex group-hover:underline group-hover:text-primary lg:text-lg tracking-wider">Home
                                    Page</a>
                            </li>
                            <li class="group">
                                <a href="#about"
                                    class="text-base text-dark py-2 mx-6 flex group-hover:text-primary group-hover:underline lg:text-lg tracking-wider">Note</a>
                            </li>
                            <li class="group">
                                <a href="#portfolio"
                                    class="text-base text-dark py-2 mx-6 flex group-hover:text-primary group-hover:underline lg:text-lg tracking-wider">Portfolio</a>
                            </li>
                            <li class="group">
                                <a href="#blog"
                                    class="text-base text-dark py-2 mx-6 flex group-hover:text-primary group-hover:underline lg:text-lg tracking-wider">Blog</a>
                            </li>
                            <li class="group">
                                <a href="#skills"
                                    class="text-base text-dark py-2 mx-6 flex group-hover:text-primary group-hover:underline lg:text-lg tracking-wider">Skills</a>
                            </li>
                            <li class="group">
                                <a href="#contact"
                                    class="text-base text-dark py-2 mx-6 flex group-hover:text-primary group-hover:underline lg:text-lg tracking-wider">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </header>
    <!-- * -->

    <!-- * Hero Section -->
    <section id="home" class="pt-36 pb-32 ">
        <div class="container">
            <div class="flex flex-wrap ">

                <div class="w-full self-end px-4 lg:w-1/2">
                    <div class="mt-10 relative lg:mt-9 lg:right-0 ">
                        <img src="{{ Storage::url($jumbotron->thumbnail) }}" alt="Wasabi Hamada"
                            class="max-w-full mx-auto rounded-full ">
                        <span class="absolute -bottom-0 -z-10 left-1/2 -translate-x-1/2 md:scale-110">
                            <svg viewBox="0 0 200 200" width="400" height="400" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#6D28D9"
                                    d="M42.5,-59.1C54.2,-50,62.2,-36.4,69.5,-20.9C76.9,-5.4,83.7,12,79.4,26C75.1,40,59.8,50.6,44.7,60.8C29.6,70.9,14.8,80.7,-1.6,82.9C-18,85.1,-36,79.7,-51.4,69.6C-66.7,59.5,-79.5,44.7,-84.5,27.8C-89.5,10.9,-86.9,-8.2,-79.9,-24.8C-72.9,-41.3,-61.6,-55.2,-47.5,-63.6C-33.5,-71.9,-16.7,-74.7,-0.7,-73.8C15.4,-72.9,30.8,-68.2,42.5,-59.1Z"
                                    transform="translate(100 100)" />
                            </svg>
                        </span>
                    </div>
                </div>

                <div class="w-full self-center px-4 lg:w-1/2">
                    <h1 class="text-base font-semibold text-primary md:text-xl">
                        <span class="font-monobuntu tracking-wider">Hello I'm</span> <span
                            class="block font-raleway text-dark text-4xl mt-1 lg:text-5xl">{{ $jumbotron->judul }}</span>
                        <span class="font-monobuntu tracking-wider"></span>
                    </h1>

                    <br>

                    <p class="flex block font-monobuntu pt-2 text-2xl">Let's connect
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="34" height="34"
                            class="ml-2">
                            <g data-name="Double Arrow">
                                <path
                                    d="M12 17a1 1 0 0 1-.707-1.707L14.586 12l-3.293-3.293a1 1 0 1 1 1.414-1.414l4 4a1 1 0 0 1 0 1.414l-4 4A1 1 0 0 1 12 17z"
                                    style="fill:#1c1b1e" />
                                <path
                                    d="M8 17a1 1 0 0 1-.707-1.707L10.586 12 7.293 8.707a1 1 0 1 1 1.414-1.414l4 4a1 1 0 0 1 0 1.414l-4 4A1 1 0 0 1 8 17z"
                                    style="fill:#1c1b1e" />
                            </g>
                        </svg>
                        {{-- <a href="#contact" class="relative inline-block text-lg group">
                            <span
                                class="relative z-10 block px-5 py-3 overflow-hidden font-medium leading-tight text-primary transition-colors duration-300 ease-out border-2 border-primary rounded-lg group-hover:text-white">
                                <span class="absolute inset-0 w-full h-full px-5 py-3 rounded-lg bg-gray-50"></span>
                                <span
                                    class="absolute left-0 w-48 h-48 -ml-2 transition-all duration-300 origin-top-right -rotate-90 -translate-x-full translate-y-12 bg-primary group-hover:-rotate-180 ease"></span>
                                <span class="relative font-monobuntu tracking-wider"><svg role="img"
                                        viewBox="0 0 24 24" width="20" class="fill-current"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <title>Instagram</title>
                                        <path
                                            d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                                    </svg></span>
                            </span>
                            <span
                                class="absolute bottom-0 right-0 w-full h-12 -mb-1 -mr-1 transition-all duration-200 ease-linear bg-primary rounded-lg group-hover:mb-0 group-hover:mr-0"
                                data-rounded="rounded-lg"></span>

                        </a> --}}
                        <button
                            class="cursor-pointer px-3 py-2 text-white tracking-wider animate-bounce hover:animate-none">
                            <svg width="40px" height="40px" viewBox="-2.4 -2.4 28.80 28.80"
                                xmlns="http://www.w3.org/2000/svg" fill="#000000" stroke="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0">
                                    <path transform="translate(-2.4, -2.4), scale(0.8999999999999999)"
                                        d="M16,26.0024646053973C19.299231426898892,25.889022835668275,23.06390288813914,29.550589665962004,25.511911705030528,27.335854946909052C27.98614841623459,25.097391625352255,24.622887731092117,20.90806975810049,25.252668871849167,17.631495165668362C25.902264189449657,14.251832969918798,30.502040813407913,11.572660590926603,29.15001259167579,8.407836690349018C27.832032711729898,5.322713053514487,23.190168542121587,6.001598800382187,19.935936602780334,5.1861030594561C17.142824732383453,4.486161913066933,14.419574195781244,3.26951176170057,11.639562905579767,4.019797544128085C8.679489915795852,4.81867943608674,6.101229205644356,6.746213026910587,4.490052864793551,9.354728923130185C2.8411169284908064,12.024378105926715,2.5622230449606556,15.198449008261333,2.8025308024544007,18.32706989659618C3.070294006488269,21.813139435111296,2.9005436637554993,26.251659334157843,5.92290923370064,28.009409123635194C8.975658836700886,29.784829683398304,12.470599055527835,26.123820593328272,16,26.0024646053973"
                                        fill="#7ed0ec" strokewidth="0"></path>
                                </g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"
                                    stroke="#CCCCCC" stroke-width="0.144"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M21.035 5.257c.91 1.092 1.364 2.366 1.364 3.822 0 5.277-3.002 6.824-5.823 7.279.364.637.455 1.365.455 2.093v3.73c0 .455-.273.728-.637.728a.718.718 0 0 1-.728-.728v-3.73a2.497 2.497 0 0 0-.728-2.093l.455-1.183c2.821-.364 5.733-1.274 5.733-6.187 0-1.183-.455-2.275-1.274-3.185l-.182-.727a4.04 4.04 0 0 0 .09-2.73c-.454.09-1.364.273-2.91 1.365l-.547.09a13.307 13.307 0 0 0-6.55 0l-.547-.09C7.57 2.71 6.66 2.437 6.204 2.437c-.273.91-.273 1.91.09 2.73l-.181.727c-.91.91-1.365 2.093-1.365 3.185 0 4.822 2.73 5.823 5.732 6.187l.364 1.183c-.546.546-.819 1.274-.728 2.002v3.821a.718.718 0 0 1-.728.728.718.718 0 0 1-.728-.728V20.18c-3.002.637-4.185-.91-5.095-2.092-.455-.546-.819-1.001-1.274-1.092-.09-.091-.364-.455-.273-.819.091-.364.455-.637.82-.455.91.182 1.455.91 2 1.547.82 1.092 1.639 2.092 4.095 1.547v-.364c-.09-.728.091-1.456.455-2.093-2.73-.546-5.914-2.093-5.914-7.279 0-1.456.455-2.73 1.365-3.822-.273-1.273-.182-2.638.273-3.73l.455-.364C5.749 1.073 7.023.8 9.66 2.437a13.673 13.673 0 0 1 6.642 0C18.851.708 20.216.98 20.398 1.072l.455.364c.455 1.274.546 2.548.182 3.821z">
                                    </path>
                                </g>
                            </svg>
                        </button>
                        <button
                            class="cursor-pointer px-3 py-2 text-white tracking-wider animate-bounce hover:animate-none">
                            <svg width="40px" height="40px" viewBox="-2 -2 24.00 24.00" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0">
                                    <path transform="translate(-2, -2), scale(0.75)"
                                        d="M16,29.493612140024965C18.071888126903392,29.950098846200756,19.94663468018921,28.009486683997263,21.615638936891596,26.69970604800214C23.114015432505695,25.523828568059,24.083361005711353,23.893765601467802,25.148100823090815,22.31447807484924C26.202710496489722,20.750216200291586,27.06265123109841,19.150356430746044,27.858517635999092,17.439884729439164C28.935996986845723,15.124172033166147,31.26468732005522,12.919485719432862,30.67589841392579,10.434165887459553C30.106929787800226,8.032508866480248,27.049579023454406,7.239609556127677,25.087333768893465,5.742520612581748C23.257383810999762,4.34636595615579,21.75878228274093,2.197950885357667,19.47767539250654,1.890516293321845C17.203887652377453,1.5840681346426992,15.287632965631188,3.525048269178413,13.072643829709328,4.123249145863918C10.915143650579207,4.70592401215288,8.15045070109328,3.7777457191193617,6.58483702740253,5.372477937237475C4.995495942566278,6.99137886800937,6.007448249723387,9.791338608882322,5.37041505895596,11.968730172534404C4.79267129279194,13.943469355091981,3.2513980443983246,15.532945295961419,3.0142672292133152,17.57675342662321C2.7486837338686856,19.86579252401525,2.1451234193913153,22.87732613277609,3.9365852596622126,24.3267739784201C5.938604026343127,25.946580620723868,9.181232334555672,23.467762417798443,11.54847695846786,24.481668523487137C13.63275708463946,25.37437911391126,13.785695564733619,29.00574770130359,16,29.493612140024965"
                                        fill="#7ed0ec" strokewidth="0"></path>
                                </g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <title>instagram [#167]</title>
                                    <desc>Created with Sketch.</desc>
                                    <defs> </defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                        fill-rule="evenodd">
                                        <g id="Dribbble-Light-Preview"
                                            transform="translate(-340.000000, -7439.000000)" fill="#000000">
                                            <g id="icons" transform="translate(56.000000, 160.000000)">
                                                <path
                                                    d="M289.869652,7279.12273 C288.241769,7279.19618 286.830805,7279.5942 285.691486,7280.72871 C284.548187,7281.86918 284.155147,7283.28558 284.081514,7284.89653 C284.035742,7285.90201 283.768077,7293.49818 284.544207,7295.49028 C285.067597,7296.83422 286.098457,7297.86749 287.454694,7298.39256 C288.087538,7298.63872 288.809936,7298.80547 289.869652,7298.85411 C298.730467,7299.25511 302.015089,7299.03674 303.400182,7295.49028 C303.645956,7294.859 303.815113,7294.1374 303.86188,7293.08031 C304.26686,7284.19677 303.796207,7282.27117 302.251908,7280.72871 C301.027016,7279.50685 299.5862,7278.67508 289.869652,7279.12273 M289.951245,7297.06748 C288.981083,7297.0238 288.454707,7296.86201 288.103459,7296.72603 C287.219865,7296.3826 286.556174,7295.72155 286.214876,7294.84312 C285.623823,7293.32944 285.819846,7286.14023 285.872583,7284.97693 C285.924325,7283.83745 286.155174,7282.79624 286.959165,7281.99226 C287.954203,7280.99968 289.239792,7280.51332 297.993144,7280.90837 C299.135448,7280.95998 300.179243,7281.19026 300.985224,7281.99226 C301.980262,7282.98483 302.473801,7284.28014 302.071806,7292.99991 C302.028024,7293.96767 301.865833,7294.49274 301.729513,7294.84312 C300.829003,7297.15085 298.757333,7297.47145 289.951245,7297.06748 M298.089663,7283.68956 C298.089663,7284.34665 298.623998,7284.88065 299.283709,7284.88065 C299.943419,7284.88065 300.47875,7284.34665 300.47875,7283.68956 C300.47875,7283.03248 299.943419,7282.49847 299.283709,7282.49847 C298.623998,7282.49847 298.089663,7283.03248 298.089663,7283.68956 M288.862673,7288.98792 C288.862673,7291.80286 291.150266,7294.08479 293.972194,7294.08479 C296.794123,7294.08479 299.081716,7291.80286 299.081716,7288.98792 C299.081716,7286.17298 296.794123,7283.89205 293.972194,7283.89205 C291.150266,7283.89205 288.862673,7286.17298 288.862673,7288.98792 M290.655732,7288.98792 C290.655732,7287.16159 292.140329,7285.67967 293.972194,7285.67967 C295.80406,7285.67967 297.288657,7287.16159 297.288657,7288.98792 C297.288657,7290.81525 295.80406,7292.29716 293.972194,7292.29716 C292.140329,7292.29716 290.655732,7290.81525 290.655732,7288.98792"
                                                    id="instagram-[#167]"> </path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </button>
                        <button
                            class="cursor-pointer px-3 py-2 text-white tracking-wider animate-bounce hover:animate-none">
                            <svg width="40px" height="40px" fill="#000000" viewBox="-3.2 -3.2 38.40 38.40"
                                version="1.1" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0">
                                    <path transform="translate(-3.2, -3.2), scale(1.2)"
                                        d="M16,30.382902815006673C19.068080001889534,30.95046302510586,22.54721072480922,30.29122149677742,24.867994921988615,28.205747881455306C27.122190816434074,26.180111000892712,26.871894027959033,22.718527554632285,27.75528034086711,19.819522117487196C28.61656127147285,16.993059827715186,30.430049360058387,14.379519579318575,29.970556606094902,11.460690991343021C29.47114213262518,8.288268292968924,28.079015294954555,4.737370840650125,25.16760518642706,3.381873967384033C22.286209014007408,2.0403510088300703,19.162539341751458,4.639292756431825,16,4.956266986671835C13.305810498489008,5.226299562105097,10.51979961529278,3.926939456360227,8.076932939018022,5.094833742583724C5.399761775315151,6.37474514163677,3.0637117369116362,8.678589772124443,2.2469628206560515,11.531367337407694C1.4408282163817208,14.347070753600104,2.4976883320809566,17.344535522556352,3.8219318004592804,19.956894220098384C4.998289364870407,22.27751575850179,7.256952626555057,23.62147055484847,9.233337115571224,25.313512456051086C11.427943647137019,27.192380777827257,13.159177481144686,29.857382677114884,16,30.382902815006673"
                                        fill="#7ed0ec" strokewidth="0"></path>
                                </g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <title>linkedin</title>
                                    <path
                                        d="M28.778 1.004h-25.56c-0.008-0-0.017-0-0.027-0-1.199 0-2.172 0.964-2.186 2.159v25.672c0.014 1.196 0.987 2.161 2.186 2.161 0.010 0 0.019-0 0.029-0h25.555c0.008 0 0.018 0 0.028 0 1.2 0 2.175-0.963 2.194-2.159l0-0.002v-25.67c-0.019-1.197-0.994-2.161-2.195-2.161-0.010 0-0.019 0-0.029 0h0.001zM9.9 26.562h-4.454v-14.311h4.454zM7.674 10.293c-1.425 0-2.579-1.155-2.579-2.579s1.155-2.579 2.579-2.579c1.424 0 2.579 1.154 2.579 2.578v0c0 0.001 0 0.002 0 0.004 0 1.423-1.154 2.577-2.577 2.577-0.001 0-0.002 0-0.003 0h0zM26.556 26.562h-4.441v-6.959c0-1.66-0.034-3.795-2.314-3.795-2.316 0-2.669 1.806-2.669 3.673v7.082h-4.441v-14.311h4.266v1.951h0.058c0.828-1.395 2.326-2.315 4.039-2.315 0.061 0 0.121 0.001 0.181 0.003l-0.009-0c4.5 0 5.332 2.962 5.332 6.817v7.855z">
                                    </path>
                                </g>
                            </svg>
                        </button>




                    </p>



                </div>



            </div>
        </div>
    </section>
    <!-- * -->

    <!-- * About section -->
    <section id="about" class="pt-36 pb-32 w-full">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="max-w-full mx-auto">
                    <h4 class="font-bold uppercase text-primary mb-3 font-raleway tracking-widest text-5xl">WHO AM I ?
                    </h4>
                    <h2 class="font-bold text-dark text-3xl mb-3 max-w-full lg:text-2xl">I'm Irfan, a Backend
                        Developer, Graphic Designer, & E-Commerce Specialist.</h2>
                    <p class="font-medium text-base text-secondary max-w-full lg:text-lg">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro ullam recusandae neque quasi
                        deserunt voluptas ab rem nisi libero odio, tempora tempore modi qui hic est deleniti similique
                        ipsam molestias.
                    </p>
                    {{-- <p class="font-medium text-base text-secondary max-w-full lg:text-lg">
                        <span class="italic text-primary font-semibold">Run, Die, Resurrect, Repeat</span> adalah
                        sebuah
                        mekanis dalam game berganre roguelite / roguelike yang mengajarkan kita bahwa <span
                            class="underline">kegagalan (Die)</span> bukanlah akhir, karena kita bisa memulai lagi
                        dengan <span class="underline">pengalaman baru (Resurrect)</span> untuk membuat kita terus
                        <span class="underline">maju dan berlari (Run)</span>. Itu semua dilakukan secara <span
                            class="underline">berulang (Repeat)</span> , demi menggapai <span
                            class="font-semibold text-primary">Endgame</span> yang semua orang inginkan.
                    </p> --}}
                </div>

            </div>
        </div>
    </section>
    <!-- * -->

    <!-- * Portfolio section -->
    <section id="portfolio" class="pt-36 pb-16 bg-slate-100">
        <div class="container">
            <div class="w-full px-4">

                <div class="max-w-full mx-auto text-center mb-16">
                    <h4 class="font-semibold text-5xl text-primary mb-2 font-raleway tracking-widest uppercase">
                        Here's what I'm good at</h4>
                    <h2 class="font-monobuntu text-dark text-3xl pt-5 mb-9">These are the services I offer</h2>
                </div>

                <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
                    <div class="mb-10 p-4 md:w-1/2">
                        <div
                            class="service-card w-[450px] shadow-xl cursor-pointer snap-start shrink-0 py-8 px-6 bg-white flex flex-col items-center gap-3 transition-all duration-300 group hover:bg-primary  ">
                            <svg fill="#4179d7 " version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                class="group-hover:fill-white" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 491.52 491.52" xml:space="preserve" width="120px" height="120px">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <g>
                                        <g>
                                            <rect x="71.68" y="102.4" width="92.16" height="20.48"></rect>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <rect x="184.32" y="102.4" width="51.2" height="20.48"></rect>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <rect x="71.68" y="256" width="92.16" height="20.48"></rect>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <rect x="184.32" y="256" width="51.2" height="20.48"></rect>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <rect x="71.68" y="204.8" width="61.44" height="20.48"></rect>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <rect x="296.96" y="204.8" width="30.72" height="20.48"></rect>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <rect x="153.6" y="204.8" width="122.88" height="20.48"></rect>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <rect x="204.8" y="153.6" width="40.96" height="20.48"></rect>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <rect x="71.68" y="153.6" width="112.64" height="20.48"></rect>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <rect x="266.24" y="153.6" width="153.6" height="20.48"></rect>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <rect x="71.68" y="307.2" width="153.6" height="20.48"></rect>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <polygon
                                                points="391.24,243.64 376.76,258.12 405.36,286.72 376.76,315.32 391.24,329.8 434.32,286.72">
                                            </polygon>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <polygon
                                                points="309.32,258.12 294.84,243.64 251.76,286.72 294.84,329.8 309.32,315.32 280.72,286.72">
                                            </polygon>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <rect x="287.878" y="276.562"
                                                transform="matrix(0.3711 -0.9286 0.9286 0.3711 -50.5861 498.917)"
                                                width="110.284" height="20.48"></rect>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path
                                                d="M471.04,358.4V51.2H20.48v307.2H0v44.06l25.24,37.86h441.04l25.24-37.86V358.4H471.04z M40.96,71.68h409.6V358.4H40.96 V71.68z M471.04,396.26l-15.72,23.58H36.2l-15.72-23.58v-17.38h450.56V396.26z">
                                            </path>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <rect x="276.48" y="389.12" width="20.48" height="20.48"></rect>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <rect x="235.52" y="389.12" width="20.48" height="20.48"></rect>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <rect x="194.56" y="389.12" width="20.48" height="20.48"></rect>
                                        </g>
                                    </g>
                                </g>
                            </svg>


                            <p class="font-bold text-2xl group-hover:text-white text-primary">
                                WEB DEVELOPMENT
                            </p>
                            <p class="text-gray-400 text-sm group-hover:text-white">
                                Website ravida surna eveti semen the conse tusio anivite dianne one nivam
                                acestion vue artin dictum.
                            </p>
                        </div>



                    </div>
                    <div class="mb-10 p-4 md:w-1/2">
                        <div
                            class="service-card w-[450px] shadow-xl cursor-pointer snap-start shrink-0 py-8 px-6 bg-white flex flex-col items-center gap-3 transition-all duration-300 group hover:bg-primary  ">
                            <svg fill="#4179d7" width="120px" height="120px" viewBox="0 0 512 512" version="1.1"
                                class="group-hover:fill-white" xml:space="preserve"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <g id="_x32_3_x2C__art_x2C__graphic_x2C__pc_x2C__ui_ux_x2C__visual">
                                        <g id="XMLID_858_">
                                            <g id="XMLID_871_">
                                                <g id="XMLID_22_">
                                                    <path
                                                        d="M456.333,425.571H55.667C36.551,425.571,21,410.02,21,390.904v-30.333c0-2.762,2.239-5,5-5h460 c2.762,0,5,2.238,5,5v30.333C491,410.02,475.448,425.571,456.333,425.571z M31,365.571v25.333 c0,13.602,11.065,24.667,24.667,24.667h400.667c13.602,0,24.667-11.065,24.667-24.667v-25.333H31z"
                                                        id="XMLID_368_"></path>
                                                </g>
                                                <g id="XMLID_21_">
                                                    <path
                                                        d="M486,365.571H26c-2.761,0-5-2.238-5-5v-223.5c0-22.883,18.617-41.5,41.5-41.5h174.002 c2.761,0,5,2.239,5,5s-2.239,5-5,5H62.5c-17.369,0-31.5,14.131-31.5,31.5v218.5h450v-218.5c0-17.369-14.131-31.5-31.5-31.5 H335.497c-2.762,0-5-2.239-5-5s2.238-5,5-5H449.5c22.883,0,41.5,18.617,41.5,41.5v223.5 C491,363.333,488.762,365.571,486,365.571z"
                                                        id="XMLID_367_"></path>
                                                </g>
                                                <g id="XMLID_20_">
                                                    <path
                                                        d="M177.508,214.063c-1.307,0-2.584-0.513-3.536-1.464c-1.301-1.301-1.782-3.21-1.253-4.972l21.213-70.71 c0.238-0.793,0.668-1.514,1.253-2.099L311.858,18.145c7.555-7.555,17.6-11.716,28.283-11.716 c10.685,0,20.729,4.161,28.284,11.716c7.556,7.555,11.717,17.6,11.717,28.284c0,10.685-4.161,20.729-11.717,28.285 L251.754,191.386c-0.585,0.585-1.306,1.016-2.099,1.253l-70.71,21.213C178.472,213.995,177.988,214.063,177.508,214.063z M203.147,140.997l-18.182,60.609l60.609-18.183L361.355,67.642c5.666-5.667,8.787-13.2,8.787-21.213 c0-8.013-3.121-15.547-8.787-21.213c-5.666-5.667-13.2-8.787-21.214-8.787c-8.013,0-15.547,3.121-21.213,8.787L203.147,140.997z "
                                                        id="XMLID_364_"></path>
                                                </g>
                                                <g id="XMLID_19_">
                                                    <path
                                                        d="M216.398,167.913c-5.762,0-11.523-2.193-15.91-6.579c-8.772-8.773-8.772-23.047,0-31.82 c1.952-1.952,5.118-1.952,7.071,0c1.953,1.953,1.953,5.118,0,7.071c-4.874,4.874-4.874,12.804,0,17.678s12.804,4.874,17.678,0 c1.954-1.952,5.119-1.951,7.071,0c1.953,1.953,1.953,5.119,0,7.071C227.922,165.72,222.16,167.913,216.398,167.913z"
                                                        id="XMLID_363_"></path>
                                                </g>
                                                <g id="XMLID_18_">
                                                    <path
                                                        d="M241.147,192.673c-6.01,0-11.66-2.341-15.91-6.59s-6.59-9.9-6.59-15.91c0-6.01,2.341-11.661,6.59-15.91 l62.228-62.227c1.951-1.952,5.119-1.952,7.07,0c1.953,1.953,1.953,5.119,0,7.071l-62.227,62.227 c-2.361,2.361-3.662,5.5-3.662,8.839c0,3.338,1.3,6.478,3.662,8.838c2.361,2.361,5.5,3.662,8.838,3.662 c3.339,0,6.478-1.3,8.839-3.662c1.952-1.952,5.119-1.952,7.071,0c1.953,1.953,1.953,5.118,0.001,7.071 C252.808,190.332,247.157,192.673,241.147,192.673z"
                                                        id="XMLID_362_"></path>
                                                </g>
                                                <g id="XMLID_17_">
                                                    <path
                                                        d="M350.749,90.32c-1.279,0-2.56-0.488-3.535-1.464l-49.498-49.498c-1.953-1.953-1.953-5.119,0-7.071 c1.951-1.952,5.119-1.952,7.07,0l49.498,49.498c1.953,1.953,1.953,5.119,0,7.071C353.309,89.832,352.028,90.32,350.749,90.32z"
                                                        id="XMLID_361_"></path>
                                                </g>
                                                <g id="XMLID_16_">
                                                    <path
                                                        d="M366,315.571h-80c-16.542,0-30-13.458-30-30s13.458-30,30-30h110c11.028,0,20-8.972,20-20v-1.508 c0-11.028-8.972-20-20-20H177.508c-2.761,0-5-2.239-5-5s2.239-5,5-5H396c16.542,0,30,13.458,30,30v1.508 c0,16.542-13.458,30-30,30H286c-11.028,0-20,8.972-20,20s8.972,20,20,20h80c2.762,0,5,2.238,5,5S368.762,315.571,366,315.571z"
                                                        id="XMLID_360_"></path>
                                                </g>
                                                <g id="XMLID_15_">
                                                    <path
                                                        d="M176,320.571H26c-2.761,0-5-2.238-5-5s2.239-5,5-5h150c2.761,0,5,2.238,5,5 S178.761,320.571,176,320.571z"
                                                        id="XMLID_359_"></path>
                                                </g>
                                                <g id="XMLID_14_">
                                                    <path
                                                        d="M176,290.571H26c-2.761,0-5-2.238-5-5s2.239-5,5-5h150c2.761,0,5,2.238,5,5 S178.761,290.571,176,290.571z"
                                                        id="XMLID_358_"></path>
                                                </g>
                                                <g id="XMLID_13_">
                                                    <path
                                                        d="M176,260.571H26c-2.761,0-5-2.238-5-5c0-2.761,2.239-5,5-5h150c2.761,0,5,2.239,5,5 C181,258.333,178.761,260.571,176,260.571z"
                                                        id="XMLID_357_"></path>
                                                </g>
                                            </g>
                                            <g id="XMLID_12_">
                                                <path
                                                    d="M311,485.571H201c-2.761,0-5-2.238-5-5v-60c0-2.762,2.239-5,5-5h110c2.762,0,5,2.238,5,5v60 C316,483.333,313.762,485.571,311,485.571z M206,475.571h100v-50H206V475.571z"
                                                    id="XMLID_315_"></path>
                                            </g>
                                            <g id="XMLID_11_">
                                                <path
                                                    d="M286,485.571h-60c-2.761,0-5-2.238-5-5v-60c0-2.762,2.239-5,5-5h60c2.762,0,5,2.238,5,5v60 C291,483.333,288.762,485.571,286,485.571z M231,475.571h50v-50h-50V475.571z"
                                                    id="XMLID_312_"></path>
                                            </g>
                                            <g id="XMLID_10_">
                                                <path
                                                    d="M326,505.571H186c-8.271,0-15-6.729-15-15s6.729-15,15-15h140c8.271,0,15,6.729,15,15 S334.271,505.571,326,505.571z M186,485.571c-2.757,0-5,2.243-5,5s2.243,5,5,5h140c2.757,0,5-2.243,5-5s-2.243-5-5-5H186z"
                                                    id="XMLID_309_"></path>
                                            </g>
                                        </g>
                                    </g>
                                    <g id="Layer_1"></g>
                                </g>
                            </svg>


                            <p class="font-bold text-2xl group-hover:text-white text-primary">
                                GRAPHIC DESIGN
                            </p>
                            <p class="text-gray-400 text-sm group-hover:text-white">
                                Website ravida surna eveti semen the conse tusio anivite dianne one nivam
                                acestion vue artin dictum.
                            </p>
                        </div>



                    </div>
                    <div class="mb-10 p-4 md:w-1/2">
                        <div
                            class="service-card w-[450px] shadow-xl cursor-pointer snap-start shrink-0 py-8 px-6 bg-white flex flex-col items-center gap-3 transition-all duration-300 group hover:bg-primary  ">
                            <svg fill="#4179d7" height="120px" width="120px" version="1.1" id="Layer_1" class="group-hover:fill-white"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 512 512" xml:space="preserve">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <g>
                                        <g>
                                            <path
                                                d="M340.961,172.713c-3.172-3.656-7.772-5.757-12.613-5.757H205.682l-5.603-30.812c-1.444-7.938-8.357-13.709-16.426-13.709 h-33.391c-9.22,0-16.696,7.475-16.696,16.696s7.475,16.696,16.696,16.696h19.457l5.553,30.54c0.032,0.196,0.068,0.391,0.106,0.583 l14.11,77.602c1.444,7.938,8.357,13.709,16.426,13.709h111.304c8.309,0,15.353-6.109,16.529-14.335l11.13-77.913 C345.56,181.222,344.132,176.37,340.961,172.713z M302.737,244.87h-82.891l-8.094-44.522h97.346L302.737,244.87z">
                                            </path>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <circle cx="217.043" cy="306.087" r="16.696"></circle>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <circle cx="306.087" cy="306.087" r="16.696"></circle>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path
                                                d="M495.304,356.174h-16.696V72.348c0-9.22-7.475-16.696-16.696-16.696H50.087c-9.22,0-16.696,7.475-16.696,16.696v283.826 H16.696C7.475,356.174,0,363.649,0,372.87v33.391c0,27.618,22.469,50.087,50.087,50.087h411.826 c27.618,0,50.087-22.469,50.087-50.087V372.87C512,363.649,504.525,356.174,495.304,356.174z M66.783,89.043h378.435v267.13 H66.783V89.043z M478.609,406.261c0,9.206-7.49,16.696-16.696,16.696H50.087c-9.206,0-16.696-7.49-16.696-16.696v-16.696h16.696 h411.826h16.696V406.261z">
                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </svg>


                            <p class="font-bold text-2xl group-hover:text-white text-primary">
                                E-COMMERCE MANAGEMENT
                            </p>
                            <p class="text-gray-400 text-sm group-hover:text-white">
                                Website ravida surna eveti semen the conse tusio anivite dianne one nivam
                                acestion vue artin dictum.
                            </p>
                        </div>



                    </div>



                </div>
            </div>
        </div>
    </section>
    <!-- * -->

    <!-- * Blog section -->
    <section id="blog" class="pt-36 pb-16 bg-violet-950">
        <div class="container">
            <div class="w-full px-4 lg:w-3/4 lg:mx-auto">
                <div class="mx-auto text-center mb-8">
                    <h4 class="font-semibold text-lg text-violet-400 mb-2 font-monobuntu tracking-widest uppercase">
                        Blog</h4>
                    <h2 class="font-bold text-white text-3xl mb-4 lg:text-4xl">Game Showcase</h2>
                    <p class="font-medium text-base text-slate-400 md:text-lg">
                        Mungkin ini akan menjadi showcase untuk game saya kedepannya atau hal lain yang berhubungan
                        dengan game 👍.
                    </p>
                </div>

                <div class="mx-auto text-center mb-8 w-fit bg-primary py-2 px-3.5 rounded-lg">
                    <h3 class="text-xl leading-relaxed font-monobuntu text-white">Coming Soon</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- * -->

    <!-- * Skill Section -->
    <section id="skills" class="pt-36 pb-32 bg-slate-100">
        <div class="container">
            <div class="w-full px-4 lg:w-3/4 lg:mx-auto">

                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2 font-monobuntu tracking-widest uppercase">Skills
                    </h4>
                    <h2 class="font-bold text-dark text-3xl mb-4">Current Skills</h2>
                    <p class="font-medium text-base text-secondary">Skill yang saya kuasai sejauh ini.</p>
                </div>

                <div class="mx-auto p-4 mt-16">

                    <div class="mb-7">
                        <div class="flex justify-between py-1">
                            <span class="text-base text-gray-lite font-semibold">PHP</span>
                            <span class="text-base font-semibold text-gray-lite pr-5">70%</span>
                        </div>
                        <svg class="rc-progress-line" viewBox="0 0 100 1" preserveAspectRatio="none">
                            <path class="rc-progress-line-trail" d="M 0.5,0.5
                L 99.5,0.5" stroke-linecap="round" stroke="#D9D9D9" stroke-width="1" fill-opacity="0"></path>
                            <path class="rc-progress-line-path" d="M 0.5,0.5
                L 99.5,0.5" stroke-linecap="round" stroke="#6d28d9" stroke-width="1" fill-opacity="0"
                                style="stroke-dasharray: 69.34px, 100px; stroke-dashoffset: 0px; transition: stroke-dashoffset 0.3s ease 0s, stroke-dasharray 0.3s ease 0s, stroke 0.3s linear 0s, 0.06s;">
                            </path>
                        </svg>
                    </div>

                    <div class="mb-7">
                        <div class="flex justify-between py-1">
                            <span class="text-base text-gray-lite font-semibold">C++</span>
                            <span class="text-base font-semibold text-gray-lite pr-5">35%</span>
                        </div>
                        <svg class="rc-progress-line" viewBox="0 0 100 1" preserveAspectRatio="none">
                            <path class="rc-progress-line-trail" d="M 0.5,0.5
                L 99.5,0.5" stroke-linecap="round" stroke="#D9D9D9" stroke-width="1" fill-opacity="0"></path>
                            <path class="rc-progress-line-path" d="M 0.5,0.5
                L 99.5,0.5" stroke-linecap="round" stroke="#6d28d9" stroke-width="1" fill-opacity="0"
                                style="stroke-dasharray: 34.35px, 100px; stroke-dashoffset: 0px; transition: stroke-dashoffset 0.3s ease 0s, stroke-dasharray 0.3s ease 0s, stroke 0.3s linear 0s, 0.06s;">
                            </path>
                        </svg>
                    </div>


                    <div class="mb-7">
                        <div class="flex justify-between py-1">
                            <span class="text-base text-gray-lite font-semibold">JavaScript</span>
                            <span class="text-base font-semibold text-gray-lite pr-5">15%</span>
                        </div>
                        <svg class="rc-progress-line" viewBox="0 0 100 1" preserveAspectRatio="none">
                            <path class="rc-progress-line-trail" d="M 0.5,0.5
                L 99.5,0.5" stroke-linecap="round" stroke="#D9D9D9" stroke-width="1" fill-opacity="0"></path>
                            <path class="rc-progress-line-path" d="M 0.5,0.5
                L 99.5,0.5" stroke-linecap="round" stroke="#6d28d9" stroke-width="1" fill-opacity="0"
                                style="stroke-dasharray: 14.34px, 100px; stroke-dashoffset: 0px; transition: stroke-dashoffset 0.3s ease 0s, stroke-dasharray 0.3s ease 0s, stroke 0.3s linear 0s, 0.06s;">
                            </path>
                        </svg>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- * -->

    <!-- * Contact Section -->
    <section id="contact" class="pt-36 pb-32">
        <div class="container">

            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2 font-monobuntu tracking-widest uppercase">
                        Contact</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4">Contact Me</h2>
                    <p class="font-medium text-base text-secondary">Tulis pesan untuk saya di form berikut ini</p>
                </div>
            </div>

            <form action="">
                <div class="w-full lg:w-2/3 lg:mx-auto">
                    <div class="w-full px-4 mb-8 space-y-1">
                        <label for="name" class="text-base font-bold text-primary">
                            Name
                        </label>
                        <input type="text" id="name"
                            class="w-full px-3 py-2.5 bg-slate-200 text-dark focus:outline-none rounded-lg focus:ring-primary focus:ring-1 focus:border-primary"
                            disabled placeholder="belum dapat digunakan">
                    </div>

                    <div class="w-full px-4 mb-8 space-y-1">
                        <label for="email" class="text-base font-bold text-primary">
                            Email
                        </label>
                        <input type="email" id="email"
                            class="w-full px-3 py-2.5 bg-slate-200 text-dark focus:outline-none rounded-lg focus:ring-primary focus:ring-1 focus:border-primary"
                            disabled placeholder="belum dapat digunakan">
                    </div>

                    <div class="w-full px-4 mb-8 space-y-1">
                        <label for="message" class="text-base font-bold text-primary">
                            Pesan
                        </label>
                        <textarea name="message" id="message"
                            class="w-full px-3 py-2.5 bg-slate-200 text-dark focus:outline-none rounded-lg focus:ring-primary focus:ring-1 focus:border-primary h-32"
                            disabled placeholder="belum dapat digunakan"></textarea>
                    </div>

                    <div class="w-full px-4 text-center lg:text-start">
                        <button type="submit" class="relative inline-block text-lg group">
                            <span
                                class="relative z-10 block px-5 py-3 overflow-hidden font-medium leading-tight text-primary transition-colors duration-300 ease-out border-2 border-primary rounded-lg group-hover:text-white">
                                <span class="absolute inset-0 w-full h-full px-5 py-3 rounded-lg bg-gray-50"></span>
                                <span
                                    class="absolute left-0 w-48 h-48 -ml-2 transition-all duration-300 origin-top-right -rotate-90 -translate-x-full translate-y-12 bg-primary group-hover:-rotate-180 ease"></span>
                                <span class="relative font-monobuntu tracking-wider">Contact Me</span>
                            </span>

                            <span
                                class="absolute bottom-0 right-0 w-full h-12 -mb-1 -mr-1 transition-all duration-200 ease-linear bg-primary rounded-lg group-hover:mb-0 group-hover:mr-0"
                                data-rounded="rounded-lg"></span>
                        </button>
                        {{-- <div class="card">
                            <div
                                class="relative bg-black w-[300px] sm:w-[350px] group transition-all duration-700 aspect-video flex items-center justify-center">
                                <div
                                    class="transition-all flex flex-col items-center py-5 justify-start duration-300 group-hover:duration-1000 bg-white w-full h-full absolute group-hover:-translate-y-16">
                                    <p class="text-xl sm:text-2xl font-semibold text-gray-500 font-serif">
                                        Thank You
                                    </p>
                                    <p class="px-10 text-[10px] sm:text-[12px] text-gray-700">
                                        It’s so nice that you had the time to view this idea
                                    </p>
                                    <p class="font-serif text-[10px] sm:text-[12px text-gray-700">
                                        Wishing you a fantastic day ahead!
                                    </p>
                                    <p class="font-sans text-[10px] text-gray-700 pt-5">SMOOKYDEV</p>
                                </div>
                                <button
                                    class="seal bg-rose-500 text-red-800 w-10 aspect-square rounded-full z-40 text-[10px] flex items-center justify-center font-semibold [clip-path:polygon(50%_0%,_80%_10%,_100%_35%,_100%_70%,_80%_90%,_50%_100%,_20%_90%,_0%_70%,_0%_35%,_20%_10%)] group-hover:opacity-0 transition-all duration-1000 group-hover:scale-0 group-hover:rotate-180 border-4 border-rose-900">
                                    IMAKA
                                </button>
                                <div
                                    class="tp transition-all duration-1000 group-hover:duration-100 bg-neutral-800 absolute group-hover:[clip-path:polygon(50%_0%,_100%_0,_0_0)] w-full h-full [clip-path:polygon(50%_50%,_100%_0,_0_0)]">
                                </div>
                                <div
                                    class="lft transition-all duration-700 absolute w-full h-full bg-neutral-900 [clip-path:polygon(50%_50%,_0_0,_0_100%)]">
                                </div>
                                <div
                                    class="rgt transition-all duration-700 absolute w-full h-full bg-neutral-800 [clip-path:polygon(50%_50%,_100%_0,_100%_100%)]">
                                </div>
                                <div
                                    class="btm transition-all duration-700 absolute w-full h-full bg-neutral-900 [clip-path:polygon(50%_50%,_100%_100%,_0_100%)]">
                                </div>
                            </div>
                        </div> --}}

                    </div>
                </div>
            </form>

        </div>
    </section>
    <!-- * -->

    <!-- * Footer Section -->
    <footer class="bg-dark pt-24 pb-12">
        <div class="container">

            <div class="flex flex-wrap">

                <div class="w-full px-4 mb-12 text-slate-300 font-medium md:w-1/3">
                    <h2 class="font-bold text-4xl text-white mb-5">Syahrandy Waskito</h2>
                    <h3 class="font-bold text-2xl mb-2">Hubungi Saya</h3>
                    <p>syahrandywaskito666@gmail.com</p>
                    <p>Malang, Jawa Timur</p>
                </div>

                <div class="w-full px-4 mb-12 md:w-1/3">
                    <h3 class="font-semibold text-xl text-white mb-5">Project</h3>
                    <ul class="text-slate-300">
                        <li>
                            <a href="https://github.com/syahrandywaskito/syahrandywaskito.github.io"
                                class="inline-block text-base hover:text-primary mb-3">First Portfolio</a>
                        </li>
                        <li>
                            <a href="https://github.com/syahrandywaskito/web_project_1"
                                class="inline-block text-base hover:text-primary mb-3">Examp Project</a>
                        </li>
                        <li>
                            <a href="" class="inline-block text-base hover:text-primary mb-3"
                                aria-disabled="true">Display FIDS</a>
                        </li>
                        <li>
                            <a href="#" class="inline-block text-base hover:text-primary mb-3"
                                aria-disabled="true">Library Management</a>
                        </li>
                    </ul>
                </div>

                <div class="w-full px-4 mb-12 md:w-1/3">
                    <h3 class="font-semibold text-xl text-white mb-5">Links</h3>
                    <ul class="text-slate-300">
                        <li>
                            <a href="#home" class="inline-block text-base hover:text-primary mb-3">Home Page</a>
                        </li>
                        <li>
                            <a href="#about" class="inline-block text-base hover:text-primary mb-3">Note</a>
                        </li>
                        <li>
                            <a href="#portfolio" class="inline-block text-base hover:text-primary mb-3">Portfolio</a>
                        </li>
                        <li>
                            <a href="#blog" class="inline-block text-base hover:text-primary mb-3">Blog</a>
                        </li>
                        <li>
                            <a href="#skills" class="inline-block text-base hover:text-primary mb-3">Skills</a>
                        </li>
                        <li>
                            <a href="#contact" class="inline-block text-base hover:text-primary mb-3">Contact</a>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="w-full pt-10 border-t border-slate-700">

                <div class="flex items-center justify-center mb-5">
                    <!-- * Github -->
                    <a href="https://github.com/syahrandywaskito" target="_blank"
                        class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-white hover:border-primary hover:bg-primary hover:text-white transition duration-200">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>GitHub</title>
                            <path
                                d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                        </svg>
                    </a>
                    <!-- * -->

                    <!-- * Instagram -->
                    <a href="https://www.instagram.com/syhrndywskt/" target="_blank"
                        class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-white hover:border-primary hover:bg-primary hover:text-white transition duration-200">
                        <svg role="img" viewBox="0 0 24 24" width="20" class="fill-current"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>Instagram</title>
                            <path
                                d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                        </svg>
                    </a>
                    <!-- * -->

                    <!-- * X -->
                    <a href="https://twitter.com/SyahrandyW" target="_blank"
                        class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-white hover:border-primary hover:bg-primary hover:text-white transition duration-200">
                        <svg role="img" viewBox="0 0 24 24" width="20" class="fill-current"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>X</title>
                            <path
                                d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z" />
                        </svg>
                    </a>
                    <!-- * -->

                </div>

                <p class="font-medium text-xs text-slate-500 text-center">
                    Created by <a href="https://github.com/syahrandywaskito" target="_blank"
                        class="font-bold text-primary"> {{ $jumbotron->judul }} </a>, using <a
                        href="https://tailwindcss.com/" target="_blank" class="font-bold text-sky-500">Laravel,
                        Filament, & Tailwind CSS</a>.
                </p>

            </div>
        </div>
    </footer>
    <!-- * -->

    <script src="/assets/dist/js/script.js"></script>

</body>

</html>
