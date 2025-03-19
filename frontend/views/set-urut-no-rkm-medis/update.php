<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetUrutNoRkmMedis $model */

$this->title = 'Update Set Urut No Rkm Medis: ' . $model->urutan;
$this->params['breadcrumbs'][] = ['label' => 'Set Urut No Rkm Medis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->urutan, 'url' => ['view', 'urutan' => $model->urutan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="set-urut-no-rkm-medis-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
