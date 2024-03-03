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


    <section class="flex justify-center items-center w-full p-4 mx-auto max-w-xs bg-nav-color rounded-lg shadow-xl">
        <?php echo (new CallendarController)->calendar() ?>
    </section>

    <section class="p-4">
        @foreach($teams as $team)
            <div class="text-text-color relative overflow-hidden bg-white w-96 h-45 p-5 rounded-lg shadow-lg transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                <div class="absolute -top-3.5 -right-3.5 bg-purple-700 w-6 h-56 rounded-full scale-100 transform origin-bottom-right transition-all duration-300 ease-out hover:scale-125"></div>
                <h1 class="text-xl font-bold text-gray-900">{{$team->name}}</h1>
                <p>{{$team->origin}}</p>
                <p class="mb-4">{{$team->history}}</p>
            </div>
        @endforeach
    </section>

    <section class="p-4">
        @foreach($drivers as $driver)
            <div class="text-text-color shadow-lg rounded-lg overflow-hidden my-5">
                <h1 class="text-xl font-bold p-5">{{$driver->name}}</h1>
                <p class="text-base px-5">{{$driver->born}}</p>
                <p class="text-base px-5 pb-5">{{$driver->history}}</p>
            </div>
        @endforeach
    </section>
</x-layout.main>
