<?php use \App\Http\Controllers\CallendarController?>

<x-layout.main>
    <section id="calendar">
       <?php echo (new CallendarController)->calendar() ?>
    </section>

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
</x-layout.main>
