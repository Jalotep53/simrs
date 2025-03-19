<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PenguranganBiaya $model */

$this->title = 'Update Pengurangan Biaya: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Pengurangan Biayas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'nama_pengurangan' => $model->nama_pengurangan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pengurangan-biaya-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
