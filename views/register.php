<h1>Register</h1>
<?php $form = \app\core\form\Form::begin('', "post")?>
    <?php echo $form->field($model, 'firstname') ?>
<?php echo \app\core\form\Form::end()?>
<form action="" method="post">
    <input type="text" name="firstname">
    <input type="text" name="lastname">
    <input type="text" name="email">
    <input type="text" name="password">
    <input type="text" name="confirmPassword">
    <button type="submit">Submit</button>
</form>