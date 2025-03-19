<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\AuditPembuanganLimbahCairInfeksius $model */

$this->title = 'Update Audit Pembuangan Limbah Cair Infeksius: ' . $model->tanggal;
$this->params['breadcrumbs'][] = ['label' => 'Audit Pembuangan Limbah Cair Infeksiuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tanggal, 'url' => ['view', 'tanggal' => $model->tanggal, 'id_ruang' => $model->id_ruang]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="audit-pembuangan-limbah-cair-infeksius-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
