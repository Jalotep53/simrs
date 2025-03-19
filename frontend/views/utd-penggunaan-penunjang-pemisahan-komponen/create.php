<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\UtdPenggunaanPenunjangPemisahanKomponen $model */

$this->title = 'Create Utd Penggunaan Penunjang Pemisahan Komponen';
$this->params['breadcrumbs'][] = ['label' => 'Utd Penggunaan Penunjang Pemisahan Komponens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="utd-penggunaan-penunjang-pemisahan-komponen-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
