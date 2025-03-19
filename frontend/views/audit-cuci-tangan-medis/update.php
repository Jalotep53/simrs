<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\AuditCuciTanganMedis $model */

$this->title = 'Update Audit Cuci Tangan Medis: ' . $model->tanggal;
$this->params['breadcrumbs'][] = ['label' => 'Audit Cuci Tangan Medis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tanggal, 'url' => ['view', 'tanggal' => $model->tanggal, 'nik' => $model->nik]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="audit-cuci-tangan-medis-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
