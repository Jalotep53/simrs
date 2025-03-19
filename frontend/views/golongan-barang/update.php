<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\GolonganBarang $model */

$this->title = 'Update Golongan Barang: ' . $model->kode;
$this->params['breadcrumbs'][] = ['label' => 'Golongan Barangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode, 'url' => ['view', 'kode' => $model->kode]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="golongan-barang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
