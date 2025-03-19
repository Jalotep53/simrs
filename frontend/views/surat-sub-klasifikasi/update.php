<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratSubKlasifikasi $model */

$this->title = 'Update Surat Sub Klasifikasi: ' . $model->kd;
$this->params['breadcrumbs'][] = ['label' => 'Surat Sub Klasifikasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd, 'url' => ['view', 'kd' => $model->kd]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="surat-sub-klasifikasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
