<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PenatalaksanaanTerapiOkupasi $model */

$this->title = 'Update Penatalaksanaan Terapi Okupasi: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Penatalaksanaan Terapi Okupasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penatalaksanaan-terapi-okupasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
