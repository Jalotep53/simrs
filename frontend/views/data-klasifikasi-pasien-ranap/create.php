<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\DataKlasifikasiPasienRanap $model */

$this->title = 'Create Data Klasifikasi Pasien Ranap';
$this->params['breadcrumbs'][] = ['label' => 'Data Klasifikasi Pasien Ranaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-klasifikasi-pasien-ranap-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
