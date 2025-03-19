<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\DataHAIs $model */

$this->title = 'Update Data Ha Is: ' . $model->tanggal;
$this->params['breadcrumbs'][] = ['label' => 'Data Ha Is', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tanggal, 'url' => ['view', 'tanggal' => $model->tanggal, 'no_rawat' => $model->no_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-hais-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
