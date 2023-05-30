<?php require 'header.php'; ?>

<?php

        $cities = get_cities();

        foreach ($cities as $city): ?>

        <img src="<?php echo $city["image"]?>" alt="">
        <?php endforeach; ?>
<?php require 'footer.php'; ?>