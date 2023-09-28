<?php

use app\models\Gender;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$items = Gender::find()
    ->select(['name'])
    ->indexBy('id')
    ->column();
/** @var yii\web\View $this */
/** @var app\models\Request $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="request-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_user')->hiddenInput(['value'=>Yii::$app->user->getId()]) ?>

    <?= $form->field($model, 'id_gender')->dropdownList($items,
        ['prompt'=>'Select Category']
    ) ?>

    <?= $form->field($model, 'id_position')->textInput() ?>

    <?= $form->field($model, 'id_children')->textInput() ?>

    <?= $form->field($model, 'id_job')->textInput() ?>

    <?= $form->field($model, 'id_degree')->textInput() ?>

    <?= $form->field($model, 'fio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'age')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
