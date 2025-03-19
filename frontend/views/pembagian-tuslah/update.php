<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PembagianTuslah $model */

$this->title = 'Update Pembagian Tuslah: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pembagian Tuslahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pembagian-tuslah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
