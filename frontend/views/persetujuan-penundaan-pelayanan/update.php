<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PersetujuanPenundaanPelayanan $model */

$this->title = 'Update Persetujuan Penundaan Pelayanan: ' . $model->no_surat;
$this->params['breadcrumbs'][] = ['label' => 'Persetujuan Penundaan Pelayanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_surat, 'url' => ['view', 'no_surat' => $model->no_surat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="persetujuan-penundaan-pelayanan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
