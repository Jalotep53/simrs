<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\DetailPengeluaranObatBhp $model */

$this->title = 'Update Detail Pengeluaran Obat Bhp: ' . $model->no_keluar;
$this->params['breadcrumbs'][] = ['label' => 'Detail Pengeluaran Obat Bhps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_keluar, 'url' => ['view', 'no_keluar' => $model->no_keluar, 'kode_brng' => $model->kode_brng]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detail-pengeluaran-obat-bhp-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
