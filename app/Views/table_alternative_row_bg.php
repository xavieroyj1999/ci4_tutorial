<!DOCTYPE html>
<html>
    <head>
        <title>Table alternative row color</title>

        <style>
            li:nth-child(3n+1) {
                background-color: red;
            }

            li:nth-child(3n+2) {
                background-color: yellow;
            }

            li:nth-child(3n) {
                background-color: green;
            }
        </style>
    </head>

    <body>
        <ul>
            <?php foreach ($values as $value): ?>
                <li><?php echo $value ?></li>
            <?php endforeach ?>
        </ul>
    </body>
</html>