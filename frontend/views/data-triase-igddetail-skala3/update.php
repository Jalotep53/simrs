<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\DataTriaseIgddetailSkala3 $model */

$this->title = 'Update Data Triase Igddetail Skala3: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Data Triase Igddetail Skala3s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'kode_skala3' => $model->kode_skala3]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-triase-igddetail-skala3-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
