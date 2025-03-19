<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ResepLuar $model */

$this->title = 'Update Resep Luar: ' . $model->no_resep;
$this->params['breadcrumbs'][] = ['label' => 'Resep Luars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_resep, 'url' => ['view', 'no_resep' => $model->no_resep]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="resep-luar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
