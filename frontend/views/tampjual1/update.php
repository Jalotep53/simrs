<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Tampjual1 $model */

$this->title = 'Update Tampjual1: ' . $model->kode_brng;
$this->params['breadcrumbs'][] = ['label' => 'Tampjual1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_brng, 'url' => ['view', 'kode_brng' => $model->kode_brng]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tampjual1-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
