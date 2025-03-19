<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ReferensiMobilejknBpjsBatal $model */

$this->title = 'Update Referensi Mobilejkn Bpjs Batal: ' . $model->nobooking;
$this->params['breadcrumbs'][] = ['label' => 'Referensi Mobilejkn Bpjs Batals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nobooking, 'url' => ['view', 'nobooking' => $model->nobooking]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="referensi-mobilejkn-bpjs-batal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
