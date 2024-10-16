<!DOCTYPE html>
<html lang="en" class="w-full h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=0.86, maximum-scale=5.0, minimum-scale=0.86, interactive-widget=resizes-content">

        <link rel="preload" href="{{ url('/bakugan.json') }}" type="application/json" />

        <link rel="icon" href="{{ url('/favicon.ico') }}" />

        <title>Bakugan Partner | VoltraBakuganFr</title>

        <meta property="og:title" content="Who is your Bakugan Partner?" />
        <meta property="og:description" content="Learn who your Bakugan Partner is!" />
        <meta property="og:image" content="{{ url('/opengraph.jpg') }}" />
        <meta property="og:image:type" content="image/jpeg" />
        <meta property="og:image:width" content="1920" />
        <meta property="og:image:height" content="1080" />
        <meta property="og:image:alt" content="Your Bakugan Partner" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:site_name" content="VoltraBakuganFr" />
        <meta property="og:url" content="{{ url('/') }}" />
        <meta name="twitter:card" content="summary_large_image" />

        @vite('resources/css/app.css')
    </head>
    <body id="honeycomb" class="bg-gray-900 w-full min-h-full p-4 overflow-y-auto flex flex-col gap-8 justify-center items-center">
        @svg('bakugan-logo', 'max-w-80 min-w-20')

        <form id="form" class="flex flex-col gap-4 justify-center items-center" action="/">
            <label
                for="date"
                class="block mb-1 text-xl font-bold text-white"
            >
                When's your birthday?
            </label>

            <input
                class="bg-gray-50 border border-gray-300 text-gray-900 text-4xl rounded-xl focus:ring-blue-500 focus:border-blue-500 block p-3"
                type="date"
                name="birthday"
                autocomplete="birthday"
                placeholder="YYYY-MM-DD"
                required
                autofocus
            />

            <section id="options-section" class="bg-white border border-gray-300 rounded-lg w-full max-w-80 flex flex-col">
                <h3 class="block text-center text-md font-medium">
                    <button class="group w-full p-4 flex justify-between items-center align-middle" type="button" aria-expanded="false" aria-controls="options" id="options-label">
                        <span>
                            Advanced options
                        </span>
                        <span class="group-aria-expanded:hidden block" aria-label="Show more">
                            +
                        </span>
                        <span class="group-aria-expanded:block hidden" aria-label="Show less">
                            -
                        </span>
                    </button>
                </h3>
                <div class="flex hidden flex-col px-4 pb-6" id="options" role="region" aria-labelledby="options-label">
                    <fieldset class="flex flex-wrap gap-6">
                        <label for="no-bb">
                            <input type="checkbox" id="no-bb" />
                            <span>
                                No &laquo;Battle Brawlers&raquo; Bakugan
                            </span>
                        </label>

                        <label for="no-nv">
                            <input type="checkbox" id="no-nv" />
                            <span>
                                No &laquo;New Vestroia&raquo; Bakugan
                            </span>
                        </label>

                        <label for="no-gi">
                            <input type="checkbox" id="no-gi" />
                            <span>
                                No &laquo;Gundalian Invaders&raquo; Bakugan
                            </span>
                        </label>

                        <label for="no-ms">
                            <input type="checkbox" id="no-ms" />
                            <span>
                                No &laquo;Mechtanium Surge&raquo; Bakugan
                            </span>
                        </label>

                        <label for="no-bt">
                            <input type="checkbox" id="no-bt" />
                            <span>
                                No &laquo;BakuTech&raquo; Bakugan
                            </span>
                        </label>
                    </fieldset>
                </div>
            </section>

            <button
                class="duration-500 mt-2 text-xl text-white bg-gradient-to-r from-[#800000] via-[#D71920] to-[#D71F25] hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-2xl px-5 py-2.5 text-center mb-2"
                type="submit"
            >
                Learn who your Bakugan Partner is
            </button>
        </form>

        <div id="resultBox" class="hidden bg-white rounded-3xl p-8 flex-col gap-8 justify-center items-center">
            <p id="filters-display" class="-mb-6 text-center text-gray-800 hidden opacity-30"></p>

            <p class="font-bold text-xl">
                Your Bakugan Partner is...
            </p>

            <p id="guardian-bakugan" class="text-4xl font-bold text-emerald-600"></p>

            <p>
                Check it out on Google Image: <a id="guardian-bakugan-url" class="text-[#D71920] underline" href="#" target="_blank"></a>
            </p>

            <label for="redo-no-marvel" class="hidden">
                <input id="redo-no-marvel" type="checkbox"/>
                <span>
                    Re-do without Marvel Bakugan
                </span>
            </label>
        </div>


        @vite('resources/js/app.ts')
    </body>
</html>
