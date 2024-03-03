<?php use \App\Http\Controllers\CallendarController?>
<x-layout.main>
    {{--
    TO-DO
    - research if it's easy to put images into forms and then databases
    - if not - save images in public/images and use proper naming conventions
    - design the GPS, drivers and the teams table
    - make 3 migrations - add an FK
    - make seeders with some information
    - loop through the database tables and vizualize them on the welcome page - simple cards
    - play around with UI and semantic tags (sections) to position them properly
    - develop routes for GPS, drivers and teams
    - think about implementing CRUD - maybe for the GPS (or for all 3)
    - play around with vizuals
    - update Wiki with new learnt info and the README.md
    - figure out a good ERD creator
    --}}

    <section class="bg-black h-50hv rounded-lg p-5">
        <section class="bg-white flex justify-center items-center w-full h-full p-4 my-0 max-w-md rounded-lg shadow-xl">
            <?php echo (new CallendarController)->calendar() ?>
        </section>
    </section>

    <main class="pt-10">
        <section class="flex flex-wrap pr-5 pb-5">
            @foreach($teams as $team)
                <div class="text-text-color relative overflow-hidden bg-white w-96 h-45 p-5 rounded-lg shadow-lg">
                    <h1 class="text-xl font-bold text-gray-900">{{$team->name}}</h1>
                    <p style="color:#{{$team->color_hex}}">{{$team->origin}}</p>
                    <p class="mb-4 mr-5">{{$team->history}}</p>
                    <div style="background-color:#{{$team->color_hex}}" class="absolute -top-0 -right-0 w-6 h-full scale-y-150 transform origin-bottom-right transition-all duration-300 ease-out hover:scale-125"></div>
                </div>
            @endforeach
        </section>

        <section>
            @foreach($drivers as $driver)
                <div class="text-text-color shadow-lg rounded-lg overflow-hidden my-5">
                    <h1 class="text-xl font-bold p-5">{{$driver->name}}</h1>
                    <p class="text-base px-5">{{$driver->born}}</p>
                    <p class="text-base px-5 pb-5">{{$driver->history}}</p>
                </div>
            @endforeach
        </section>
    </main>
</x-layout.main>
