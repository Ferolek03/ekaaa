<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Degree $model */

$this->title = 'Create Degree';
$this->params['breadcrumbs'][] = ['label' => 'Degrees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="degree-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
