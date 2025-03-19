<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMedisHemodialisa $model */

$this->title = 'Update Penilaian Medis Hemodialisa: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Medis Hemodialisas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penilaian-medis-hemodialisa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
