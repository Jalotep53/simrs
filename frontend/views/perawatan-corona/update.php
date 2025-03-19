<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PerawatanCorona $model */

$this->title = 'Update Perawatan Corona: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Perawatan Coronas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="perawatan-corona-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
