<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Kelurahan $model */

$this->title = 'Update Kelurahan: ' . $model->kd_kel;
$this->params['breadcrumbs'][] = ['label' => 'Kelurahans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_kel, 'url' => ['view', 'kd_kel' => $model->kd_kel]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kelurahan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
