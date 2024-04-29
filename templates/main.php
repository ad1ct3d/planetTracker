<main>
<!--     <pre style="font-size: 15px; overflow: scroll; height: 400px;">
        <##?php var_dump($data); ?>
    </pre> -->
    <section>
        <h1>Planetas activos: <?= count($data);?> </h1>

    </section>


    <section class = 'cards_container'>
        <p><?= $cards = card_generator($data); ?></p>
    </section>


    
</main>