<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\KonselingFarmasi $model */

$this->title = 'Create Konseling Farmasi';
$this->params['breadcrumbs'][] = ['label' => 'Konseling Farmasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="konseling-farmasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
