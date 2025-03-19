<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PeriksaRadiologi $model */

$this->title = 'Create Periksa Radiologi';
$this->params['breadcrumbs'][] = ['label' => 'Periksa Radiologis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="periksa-radiologi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
