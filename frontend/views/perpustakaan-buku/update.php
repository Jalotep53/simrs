<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PerpustakaanBuku $model */

$this->title = 'Update Perpustakaan Buku: ' . $model->kode_buku;
$this->params['breadcrumbs'][] = ['label' => 'Perpustakaan Bukus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_buku, 'url' => ['view', 'kode_buku' => $model->kode_buku]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="perpustakaan-buku-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
