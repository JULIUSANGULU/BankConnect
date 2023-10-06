<?php if (count($errors_user) > 0) : ?>
    <div class="error ">
        <?php foreach ($errors_user as $error_user) : ?>



            <p><?php echo $error_user ?></p>



        <?php endforeach ?>
    </div>
<?php endif ?>