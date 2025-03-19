<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PermintaanStokObatPasien $model */

$this->title = 'Create Permintaan Stok Obat Pasien';
$this->params['breadcrumbs'][] = ['label' => 'Permintaan Stok Obat Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="permintaan-stok-obat-pasien-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
