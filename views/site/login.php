<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>

    .social-login {
        display: flex;
        flex-wrap: wrap;
        margin: -10px;
    }

    .btn {
        display: block;
        width: 100%;
        padding: 10px;
        margin: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
        text-align: center;
        color: #333;
        text-decoration: none;
        font-size: 14px;
        cursor: pointer;
    }

    .btn:hover {
        background-color: #eee;
    }

    .btn img {
        width: 20px;
        margin-right: 10px;
        vertical-align: middle;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    input {
        width: 100%;
        padding: 5px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    button {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 4px;
        background-color: #007bff;
    }
</style>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>

    <div class="row">
        <div class="col-lg-5">

            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'fieldConfig' => [
                    'template' => "{label}\n{input}\n{error}",
                    'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
                    'inputOptions' => ['class' => 'col-lg-3 form-control'],
                    'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
                ],
            ]); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <?= $form->field($model, 'rememberMe')->checkbox([
                'template' => "<div class=\"custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
            ]) ?>

            <div class="form-group">
                <div>
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
            </div>

            <?php ActiveForm::end(); ?>

            <div style="color:#999;">
                You may login with <strong>admin/admin</strong> or <strong>demo/demo</strong>.<br>
                To modify the username/password, please check out the code <code>app\models\User::$users</code>.
            </div>


            <div class="social-login">
                <a href="#" class="btn btn-google">
                    <img src="https://cdn2.iconfinder.com/data/icons/social-icons-33/128/Google-512.png" alt="Google">
                    Continue with Google
                </a>
                <a href="#" class="btn btn-facebook">
                    <img src="https://cdn1.iconfinder.com/data/icons/social-media-2285/512/Colored_Facebook3_svg-512.png" alt="Facebook">
                    Continue with Facebook
                </a>
                <a href="#" class="btn btn-x">
                    <img src="https://cdn2.iconfinder.com/data/icons/social-media-2285/512/1_Twitter_colored_svg-512.png" alt="X">
                    Continue with X
                </a>
                <a href="#" class="btn btn-linkedin">
                    <img src="https://cdn2.iconfinder.com/data/icons/social-media-2285/512/1_Linkedin_unofficial_colored_svg-512.png" alt="LinkedIn">
                    Continue with LinkedIn
                </a>
                <a href="#" class="btn btn-microsoft">
                    <img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/windows-512.png" alt="Microsoft">
                    Continue with Microsoft
                </a>
            </div>

        </div>
    </div>
</div>
