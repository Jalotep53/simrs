<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ResikoKerja $model */

$this->title = 'Update Resiko Kerja: ' . $model->kode_resiko;
$this->params['breadcrumbs'][] = ['label' => 'Resiko Kerjas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_resiko, 'url' => ['view', 'kode_resiko' => $model->kode_resiko]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="resiko-kerja-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
