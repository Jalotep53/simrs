<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TelaahFarmasi $model */

$this->title = 'Update Telaah Farmasi: ' . $model->no_resep;
$this->params['breadcrumbs'][] = ['label' => 'Telaah Farmasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_resep, 'url' => ['view', 'no_resep' => $model->no_resep]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="telaah-farmasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
