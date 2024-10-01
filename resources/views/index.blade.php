<!DOCTYPE html>
<html lang="en" class="w-full h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="preload" href="/bakugan.json" />

        <title>Guardian Bakugan</title>

        @vite('resources/css/app.css')
    </head>
    <body class="bg-cyan-800 w-full h-full flex flex-col gap-8 justify-center items-center">
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

            <button
                class="duration-500 mt-2 text-xl text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-2xl px-5 py-2.5 text-center mb-2"
                type="submit"
            >
                Learn who your Guardian Bakugan is
            </button>
        </form>

        <div id="resultBox" class="hidden bg-white rounded-3xl p-8 flex-col gap-8 justify-center items-center">
            <p class="font-bold text-xl">
                Your Guardian Bakugan is...
            </p>

            <p id="guardian-bakugan" class="text-4xl font-bold text-emerald-600"></p>

            <p>
                Check it out on Google Image: <a id="guardian-bakugan-url" class="text-cyan-700 underline" href="#" target="_blank"></a>
            </p>
        </div>


        @vite('resources/js/app.ts')
    </body>
</html>
