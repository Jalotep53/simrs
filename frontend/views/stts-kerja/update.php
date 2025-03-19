<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SttsKerja $model */

$this->title = 'Update Stts Kerja: ' . $model->stts;
$this->params['breadcrumbs'][] = ['label' => 'Stts Kerjas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->stts, 'url' => ['view', 'stts' => $model->stts]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="stts-kerja-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
