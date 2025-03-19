<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetTuslah $model */

$this->title = 'Update Set Tuslah: ' . $model->tahun;
$this->params['breadcrumbs'][] = ['label' => 'Set Tuslahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tahun, 'url' => ['view', 'tahun' => $model->tahun, 'bulan' => $model->bulan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="set-tuslah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
