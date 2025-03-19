<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\LaporanAnestesi $model */

$this->title = 'Update Laporan Anestesi: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Laporan Anestesis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'mulai' => $model->mulai]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="laporan-anestesi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
