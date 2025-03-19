<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\DetailObatRacikanJual $model */

$this->title = 'Update Detail Obat Racikan Jual: ' . $model->nota_jual;
$this->params['breadcrumbs'][] = ['label' => 'Detail Obat Racikan Juals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nota_jual, 'url' => ['view', 'nota_jual' => $model->nota_jual, 'no_racik' => $model->no_racik, 'kode_brng' => $model->kode_brng]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detail-obat-racikan-jual-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
