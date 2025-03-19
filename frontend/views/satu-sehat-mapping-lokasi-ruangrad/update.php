<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatMappingLokasiRuangrad $model */

$this->title = 'Update Satu Sehat Mapping Lokasi Ruangrad: ' . $model->id_lokasi_satusehat;
$this->params['breadcrumbs'][] = ['label' => 'Satu Sehat Mapping Lokasi Ruangrads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_lokasi_satusehat, 'url' => ['view', 'id_lokasi_satusehat' => $model->id_lokasi_satusehat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="satu-sehat-mapping-lokasi-ruangrad-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
