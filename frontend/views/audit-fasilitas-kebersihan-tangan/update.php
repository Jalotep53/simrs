<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\AuditFasilitasKebersihanTangan $model */

$this->title = 'Update Audit Fasilitas Kebersihan Tangan: ' . $model->tanggal;
$this->params['breadcrumbs'][] = ['label' => 'Audit Fasilitas Kebersihan Tangans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tanggal, 'url' => ['view', 'tanggal' => $model->tanggal, 'id_ruang' => $model->id_ruang]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="audit-fasilitas-kebersihan-tangan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
