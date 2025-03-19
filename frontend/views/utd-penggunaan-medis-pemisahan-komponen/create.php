<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\UtdPenggunaanMedisPemisahanKomponen $model */

$this->title = 'Create Utd Penggunaan Medis Pemisahan Komponen';
$this->params['breadcrumbs'][] = ['label' => 'Utd Penggunaan Medis Pemisahan Komponens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="utd-penggunaan-medis-pemisahan-komponen-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
