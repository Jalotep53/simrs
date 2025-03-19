<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\KategoriPemasukanLain $model */

$this->title = 'Update Kategori Pemasukan Lain: ' . $model->kode_kategori;
$this->params['breadcrumbs'][] = ['label' => 'Kategori Pemasukan Lains', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_kategori, 'url' => ['view', 'kode_kategori' => $model->kode_kategori]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kategori-pemasukan-lain-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
