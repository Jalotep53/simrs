<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PenjabDokumenKerjasama $model */

$this->title = 'Update Penjab Dokumen Kerjasama: ' . $model->kd_pj;
$this->params['breadcrumbs'][] = ['label' => 'Penjab Dokumen Kerjasamas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_pj, 'url' => ['view', 'kd_pj' => $model->kd_pj]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penjab-dokumen-kerjasama-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
