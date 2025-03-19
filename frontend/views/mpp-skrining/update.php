<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MppSkrining $model */

$this->title = 'Update Mpp Skrining: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Mpp Skrinings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mpp-skrining-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
