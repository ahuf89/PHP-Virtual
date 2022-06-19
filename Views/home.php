<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $data['page_tag']; ?>
    </title>
</head>
<body>
    <?php
        print_r("<pre>");
        print_r($data); 
        print_r("</pre>")
    ?>
    <section id="<?php echo $data['page_id'];?> ">
        <h1>
            <?php echo $data['page_title'];?> 
        </h1>
        
        <p>
            <?php echo $data['page_content']; ?>
        </p>

    </section>
    <?php echo base_url(); ?>
    <br>
    <?php echo passGenerator(); ?>
    <br>
    <?php echo token(); ?>
    <br>
    <?php echo SMONEY.formatMoney(5200); ?>

</body>
</html>