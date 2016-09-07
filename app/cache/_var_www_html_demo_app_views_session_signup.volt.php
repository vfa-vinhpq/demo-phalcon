<?= $this->getContent() ?>

<div class="page-header">
  <h2>Register form</h2>
</div>
<!-- 'onbeforesubmit': 'return false' -->
<?= $this->tag->form(['session/signup', 'id' => 'registerForm']) ?>
  
  <fieldset>
    <?= $form->render('csrf', ['value' => $this->security->getToken()]) ?>
    <?= $form->messages('csrf') ?>

    <div class="control-group">
      <?= $form->label('name', ['class' => 'control-label']) ?>
      <div class="controls">
        <?= $form->render('name', ['class' => 'form-control']) ?>
        <p class="help-block">(required)</p>
        <?= $form->messages('name') ?>
        <!--
        <div class="alert alert-warning" id="name_alert">
          <strong>Warning!</strong> Please enter your full name
        </div>
        -->
      </div>
    </div>

    <div class="control-group">
      <?= $form->label('username', ['class' => 'control-label']) ?>
      <div class="controls">
        <?= $form->render('username', ['class' => 'form-control']) ?>
        <p class="help-block">(required)</p>
        <?= $form->messages('username') ?>
        <!--
        <div class="alert alert-warning" id="username_alert">
          <strong>Warning!</strong> Please enter your username
        </div>
        -->
      </div>
    </div>

    <div class="control-group">
        <?= $form->label('email', ['class' => 'control-label']) ?>
        <div class="controls">
            <?= $form->render('email', ['class' => 'form-control']) ?>
            <p class="help-block">(required)</p>
            <?= $form->messages('email') ?>
            <!--
            <div class="alert alert-warning" id="email_alert">
                <strong>Warning!</strong> Please enter your email
            </div>
            -->
        </div>
    </div>

    <div class="control-group">
      <?= $form->label('password', ['class' => 'control-label']) ?>
      <div class="controls">
        <?= $form->render('password', ['class' => 'form-control']) ?>
        <p class="help-block">(minimum 8 characters)</p>
        <?= $form->messages('password') ?>
        <!--
        <div class="alert alert-warning" id="password_alert">
          <strong>Warning!</strong> Please provide a valid password
        </div>
        -->
      </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="repeatPassword">Repeat Password</label>
        <div class="controls">
            <?= $this->tag->passwordField(['repeatPassword', 'class' => 'form-control']) ?>
            <?= $form->messages('repeatPassword') ?>
            <!--
            <div class="alert" id="repeatPassword_alert">
                <strong>Warning!</strong> The password does not match
            </div>
            -->
        </div>
    </div>

    <div class="control-group">
      <?= $form->label('terms') ?>
      <div class="controls">
        <?= $form->render('terms') ?>
        <p class="help-block">Please check to confirm terms</p>
        <?= $form->messages('terms') ?>
      </div>
    </div>

    <div class="form-actions">
      <?= $this->tag->submitButton(['Register', 'class' => 'btn btn-primary']) ?>
<!-- 'onclick': 'return SignUp.validate();' -->

      <p class="help-block">By signing up, you accept terms of use and privacy policy.</p>
    </div>

  </fieldset>
</form>