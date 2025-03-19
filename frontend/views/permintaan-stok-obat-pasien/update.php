<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PermintaanStokObatPasien $model */

$this->title = 'Update Permintaan Stok Obat Pasien: ' . $model->no_permintaan;
$this->params['breadcrumbs'][] = ['label' => 'Permintaan Stok Obat Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_permintaan, 'url' => ['view', 'no_permintaan' => $model->no_permintaan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="permintaan-stok-obat-pasien-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
