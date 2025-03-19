<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PengajuanBarangNonmedis $model */

$this->title = 'Create Pengajuan Barang Nonmedis';
$this->params['breadcrumbs'][] = ['label' => 'Pengajuan Barang Nonmedis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengajuan-barang-nonmedis-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
