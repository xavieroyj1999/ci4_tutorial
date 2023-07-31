<?php foreach ($credit_info as $credit): ?>
    <?php
        $unserializedData = unserialize($credit['credit-info']);
        $creditCard = $unserializedData['credit-card'];
        $months = $unserializedData['months'];
        $years = $unserializedData['years'];
    ?>

    <div>
        <h3>Credit Card: <?php echo $creditCard; ?></h3>
        <p>Months: <?php echo $months; ?></p>
        <p>Years: <?php echo $years; ?></p>
    </div>
<?php endforeach; ?>