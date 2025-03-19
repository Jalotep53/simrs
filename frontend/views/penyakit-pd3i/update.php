<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PenyakitPd3i $model */

$this->title = 'Update Penyakit Pd3i: ' . $model->kd_penyakit;
$this->params['breadcrumbs'][] = ['label' => 'Penyakit Pd3is', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_penyakit, 'url' => ['view', 'kd_penyakit' => $model->kd_penyakit]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penyakit-pd3i-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
