<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PcareKegiatanKelompok $model */

$this->title = 'Update Pcare Kegiatan Kelompok: ' . $model->eduId;
$this->params['breadcrumbs'][] = ['label' => 'Pcare Kegiatan Kelompoks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->eduId, 'url' => ['view', 'eduId' => $model->eduId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pcare-kegiatan-kelompok-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
