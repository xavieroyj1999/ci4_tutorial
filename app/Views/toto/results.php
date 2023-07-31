<div class="container">
    <div class="bg-secondary">Winning Numbers</div>
    <div class="row row-cols-6">
        <?php foreach ($winningNo as $individualWinningNo): ?>
            <div class="col"><?php echo $individualWinningNo ?></div>
        <?php endforeach ?>
    </div>
    <div class="bg-secondary">Additional Numbers</div>
    <?= $additionalNo ?>
</div>