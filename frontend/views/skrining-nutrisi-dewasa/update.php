<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SkriningNutrisiDewasa $model */

$this->title = 'Update Skrining Nutrisi Dewasa: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Skrining Nutrisi Dewasas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="skrining-nutrisi-dewasa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
