<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\NotaJalan $model */

$this->title = 'Update Nota Jalan: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Nota Jalans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nota-jalan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
