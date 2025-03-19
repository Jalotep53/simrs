<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\AuditPenangananDarah $model */

$this->title = 'Update Audit Penanganan Darah: ' . $model->tanggal;
$this->params['breadcrumbs'][] = ['label' => 'Audit Penanganan Darahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tanggal, 'url' => ['view', 'tanggal' => $model->tanggal, 'id_ruang' => $model->id_ruang]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="audit-penanganan-darah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
