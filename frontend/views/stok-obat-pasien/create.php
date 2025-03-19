<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\StokObatPasien $model */

$this->title = 'Create Stok Obat Pasien';
$this->params['breadcrumbs'][] = ['label' => 'Stok Obat Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stok-obat-pasien-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
