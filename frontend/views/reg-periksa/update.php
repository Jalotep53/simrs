<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\RegPeriksa $model */

$this->title = 'Update Reg Periksa: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Reg Periksas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="reg-periksa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
