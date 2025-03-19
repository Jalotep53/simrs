<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BayarPemesananNonMedis $model */

$this->title = 'Create Bayar Pemesanan Non Medis';
$this->params['breadcrumbs'][] = ['label' => 'Bayar Pemesanan Non Medis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bayar-pemesanan-non-medis-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
