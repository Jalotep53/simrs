<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\AuditSterilisasiAlat $model */

$this->title = 'Update Audit Sterilisasi Alat: ' . $model->tanggal;
$this->params['breadcrumbs'][] = ['label' => 'Audit Sterilisasi Alats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tanggal, 'url' => ['view', 'tanggal' => $model->tanggal, 'id_ruang' => $model->id_ruang]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="audit-sterilisasi-alat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
