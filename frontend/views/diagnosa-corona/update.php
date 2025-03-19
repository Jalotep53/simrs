<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\DiagnosaCorona $model */

$this->title = 'Update Diagnosa Corona: ' . $model->no_rkm_medis;
$this->params['breadcrumbs'][] = ['label' => 'Diagnosa Coronas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rkm_medis, 'url' => ['view', 'no_rkm_medis' => $model->no_rkm_medis, 'kode_icd' => $model->kode_icd]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="diagnosa-corona-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
