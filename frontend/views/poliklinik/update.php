<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Poliklinik $model */

$this->title = 'Update Poliklinik: ' . $model->kd_poli;
$this->params['breadcrumbs'][] = ['label' => 'Polikliniks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_poli, 'url' => ['view', 'kd_poli' => $model->kd_poli]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="poliklinik-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
