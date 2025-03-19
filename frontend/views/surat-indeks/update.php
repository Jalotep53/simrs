<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratIndeks $model */

$this->title = 'Update Surat Indeks: ' . $model->kd;
$this->params['breadcrumbs'][] = ['label' => 'Surat Indeks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd, 'url' => ['view', 'kd' => $model->kd]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="surat-indeks-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
