<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\DataTriaseIgd $model */

$this->title = 'Update Data Triase Igd: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Data Triase Igds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-triase-igd-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
