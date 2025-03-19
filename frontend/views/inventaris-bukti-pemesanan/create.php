<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\InventarisBuktiPemesanan $model */

$this->title = 'Create Inventaris Bukti Pemesanan';
$this->params['breadcrumbs'][] = ['label' => 'Inventaris Bukti Pemesanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inventaris-bukti-pemesanan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
