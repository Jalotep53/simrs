<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\DataTriaseIgddetailSkala1 $model */

$this->title = 'Update Data Triase Igddetail Skala1: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Data Triase Igddetail Skala1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'kode_skala1' => $model->kode_skala1]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-triase-igddetail-skala1-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
