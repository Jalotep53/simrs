<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SkriningNutrisiAnak $model */

$this->title = 'Update Skrining Nutrisi Anak: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Skrining Nutrisi Anaks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="skrining-nutrisi-anak-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
