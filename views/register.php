<h1>Create an account</h1>

<?php

use app\core\form\Form;

$form = Form::begin("", "post"); ?>
<div class="row">
    <div class="col">
        <?php echo $form->field($model, "firstname"); ?>
    </div>
    <div class="col">
        <?php echo $form->field($model, "lastname"); ?>
    </div>
</div>
<?php echo $form->field($model, "email"); ?>
<?php echo $form->field($model, "password")->passwordField(); ?>
<?php echo $form->field($model, "confirmPassword")->passwordField(); ?>

<button type="submit" class="btn btn-primary">Submit</button>

<?php Form::end(); ?>

<!-- <form action="" method="post">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Firstname</label>
                <input type="text" name="firstname" value="<?php echo $model->firstname; ?>" class="form-control <?php echo $model->hasError('firstname') ? 'is-invalid' : '' ?>">
                <div class="invalid-feedback">
                    <?php echo $model->getFirstError('firstname')  ?>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label>Lastname</label>
                <input type="text" name="lastname" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control">
    </div>
    <div class="form-group">
        <label>Confirm Password</label>
        <input type="password" name="confirmPassword" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form> -->