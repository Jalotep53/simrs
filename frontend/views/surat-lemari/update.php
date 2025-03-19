<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratLemari $model */

$this->title = 'Update Surat Lemari: ' . $model->kd;
$this->params['breadcrumbs'][] = ['label' => 'Surat Lemaris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd, 'url' => ['view', 'kd' => $model->kd]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="surat-lemari-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
