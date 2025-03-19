<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\DataTriaseIgddetailSkala2 $model */

$this->title = 'Update Data Triase Igddetail Skala2: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Data Triase Igddetail Skala2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'kode_skala2' => $model->kode_skala2]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-triase-igddetail-skala2-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
