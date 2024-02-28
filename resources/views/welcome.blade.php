<?php use \App\Http\Controllers\CallendarController?>

<x-layout.main>
    <section id="calendar">
       <?php echo (new CallendarController)->calendar() ?>
    </section>

</x-layout.main>
