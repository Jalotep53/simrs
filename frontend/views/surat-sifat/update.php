<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratSifat $model */

$this->title = 'Update Surat Sifat: ' . $model->kd;
$this->params['breadcrumbs'][] = ['label' => 'Surat Sifats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd, 'url' => ['view', 'kd' => $model->kd]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="surat-sifat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
