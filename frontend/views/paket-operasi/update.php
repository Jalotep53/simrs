<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PaketOperasi $model */

$this->title = 'Update Paket Operasi: ' . $model->kode_paket;
$this->params['breadcrumbs'][] = ['label' => 'Paket Operasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_paket, 'url' => ['view', 'kode_paket' => $model->kode_paket]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="paket-operasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
