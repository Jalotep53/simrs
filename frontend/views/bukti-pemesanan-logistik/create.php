<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BuktiPemesananLogistik $model */

$this->title = 'Create Bukti Pemesanan Logistik';
$this->params['breadcrumbs'][] = ['label' => 'Bukti Pemesanan Logistiks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bukti-pemesanan-logistik-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
