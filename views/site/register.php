<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title = 'Registro';
$this->params['breadcrumbs'][] = $this->title;
?>

<!DOCTYPE html>
<html lang="en">

<body> 
     <h1><?= Html::encode($this->title) ?></h1>
 <f<?php $form = ActiveForm::begin([
        'id' => 'register-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>
    
        <?= $form->field($model, 'nombre')->textInput() ?>
        
        <?= $form->field($model, 'apellido')->textInput() ?>

        <?= $form->field($model, 'correo')->textInput() ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <?= $form->field($model, 'telefono')->numberInput() ?>

        <?= $form->field($model, 'acepto')->checkbox([
            'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
        ]) ?>

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                <?= Html::submitButton('Register', ['class' => 'btn btn-primary', 'name' => 'registe-button']) ?>

            </div>
        </div>

    <?php ActiveForm::end(); ?>

    <div class="col-lg-offset-1" style="color:#999;">
    </div>
</div>

