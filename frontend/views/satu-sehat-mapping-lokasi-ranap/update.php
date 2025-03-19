<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatMappingLokasiRanap $model */

$this->title = 'Update Satu Sehat Mapping Lokasi Ranap: ' . $model->kd_kamar;
$this->params['breadcrumbs'][] = ['label' => 'Satu Sehat Mapping Lokasi Ranaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_kamar, 'url' => ['view', 'kd_kamar' => $model->kd_kamar]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="satu-sehat-mapping-lokasi-ranap-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
