<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SkpKategoriPenilaian $model */

$this->title = 'Update Skp Kategori Penilaian: ' . $model->kode_kategori;
$this->params['breadcrumbs'][] = ['label' => 'Skp Kategori Penilaians', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_kategori, 'url' => ['view', 'kode_kategori' => $model->kode_kategori]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="skp-kategori-penilaian-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
