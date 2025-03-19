<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BalasanPengaduan $model */

$this->title = 'Update Balasan Pengaduan: ' . $model->id_pengaduan;
$this->params['breadcrumbs'][] = ['label' => 'Balasan Pengaduans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pengaduan, 'url' => ['view', 'id_pengaduan' => $model->id_pengaduan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="balasan-pengaduan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
