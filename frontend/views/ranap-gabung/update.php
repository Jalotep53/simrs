<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\RanapGabung $model */

$this->title = 'Update Ranap Gabung: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Ranap Gabungs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'no_rawat2' => $model->no_rawat2]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ranap-gabung-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
