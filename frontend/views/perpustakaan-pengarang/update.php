<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PerpustakaanPengarang $model */

$this->title = 'Update Perpustakaan Pengarang: ' . $model->kode_pengarang;
$this->params['breadcrumbs'][] = ['label' => 'Perpustakaan Pengarangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_pengarang, 'url' => ['view', 'kode_pengarang' => $model->kode_pengarang]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="perpustakaan-pengarang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
