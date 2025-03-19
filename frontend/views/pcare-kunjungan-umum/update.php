<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PcareKunjunganUmum $model */

$this->title = 'Update Pcare Kunjungan Umum: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Pcare Kunjungan Umums', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pcare-kunjungan-umum-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
