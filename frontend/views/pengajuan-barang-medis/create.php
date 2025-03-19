<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PengajuanBarangMedis $model */

$this->title = 'Create Pengajuan Barang Medis';
$this->params['breadcrumbs'][] = ['label' => 'Pengajuan Barang Medis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengajuan-barang-medis-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
