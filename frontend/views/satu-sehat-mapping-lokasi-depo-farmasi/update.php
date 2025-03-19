<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatMappingLokasiDepoFarmasi $model */

$this->title = 'Update Satu Sehat Mapping Lokasi Depo Farmasi: ' . $model->kd_bangsal;
$this->params['breadcrumbs'][] = ['label' => 'Satu Sehat Mapping Lokasi Depo Farmasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_bangsal, 'url' => ['view', 'kd_bangsal' => $model->kd_bangsal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="satu-sehat-mapping-lokasi-depo-farmasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
