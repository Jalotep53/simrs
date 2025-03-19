<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PerpustakaanPenerbit $model */

$this->title = 'Update Perpustakaan Penerbit: ' . $model->kode_penerbit;
$this->params['breadcrumbs'][] = ['label' => 'Perpustakaan Penerbits', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_penerbit, 'url' => ['view', 'kode_penerbit' => $model->kode_penerbit]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="perpustakaan-penerbit-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
