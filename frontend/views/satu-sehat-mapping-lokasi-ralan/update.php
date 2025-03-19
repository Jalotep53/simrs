<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatMappingLokasiRalan $model */

$this->title = 'Update Satu Sehat Mapping Lokasi Ralan: ' . $model->kd_poli;
$this->params['breadcrumbs'][] = ['label' => 'Satu Sehat Mapping Lokasi Ralans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_poli, 'url' => ['view', 'kd_poli' => $model->kd_poli]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="satu-sehat-mapping-lokasi-ralan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
