<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PerpustakaanJenisBuku $model */

$this->title = 'Update Perpustakaan Jenis Buku: ' . $model->id_jenis;
$this->params['breadcrumbs'][] = ['label' => 'Perpustakaan Jenis Bukus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_jenis, 'url' => ['view', 'id_jenis' => $model->id_jenis]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="perpustakaan-jenis-buku-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
