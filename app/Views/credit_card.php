<form action="<?php echo base_url('/credit-card/store') ?>"  method="post">
    <label for="credit-card">Credit Card Number: </label>
    <input type="number" name="credit-card">

    <label for="months">Select credit card expiry: </label>
        <select name="months">
        <?php foreach ($monthArray as $months): ?>
            <option value="<?php echo $months ?>"><?php echo $months ?></option>
        <?php endforeach ?>
    </select> 

    <label for="years">Years </label>
    <select name="years">
        <?php foreach ($yearArray as $year): ?>
            <option value="<?php echo $year ?>"><?php echo $year ?></option>
        <?php endforeach ?>
    </select>
    <input type="submit" value="Save"/>
</form>