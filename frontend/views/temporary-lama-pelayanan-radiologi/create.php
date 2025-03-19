<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TemporaryLamaPelayananRadiologi $model */

$this->title = 'Create Temporary Lama Pelayanan Radiologi';
$this->params['breadcrumbs'][] = ['label' => 'Temporary Lama Pelayanan Radiologis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="temporary-lama-pelayanan-radiologi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
