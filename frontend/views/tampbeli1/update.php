<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Tampbeli1 $model */

$this->title = 'Update Tampbeli1: ' . $model->kode_brng;
$this->params['breadcrumbs'][] = ['label' => 'Tampbeli1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_brng, 'url' => ['view', 'kode_brng' => $model->kode_brng]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tampbeli1-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
