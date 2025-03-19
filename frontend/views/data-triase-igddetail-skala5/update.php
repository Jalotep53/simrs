<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\DataTriaseIgddetailSkala5 $model */

$this->title = 'Update Data Triase Igddetail Skala5: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Data Triase Igddetail Skala5s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'kode_skala5' => $model->kode_skala5]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-triase-igddetail-skala5-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
