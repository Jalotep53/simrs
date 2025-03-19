<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\KategoriPengeluaranHarian $model */

$this->title = 'Update Kategori Pengeluaran Harian: ' . $model->kode_kategori;
$this->params['breadcrumbs'][] = ['label' => 'Kategori Pengeluaran Harians', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_kategori, 'url' => ['view', 'kode_kategori' => $model->kode_kategori]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kategori-pengeluaran-harian-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
