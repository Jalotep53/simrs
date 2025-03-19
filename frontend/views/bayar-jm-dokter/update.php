<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BayarJmDokter $model */

$this->title = 'Update Bayar Jm Dokter: ' . $model->no_bayar;
$this->params['breadcrumbs'][] = ['label' => 'Bayar Jm Dokters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_bayar, 'url' => ['view', 'no_bayar' => $model->no_bayar]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bayar-jm-dokter-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
