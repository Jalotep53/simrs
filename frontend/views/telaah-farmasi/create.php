<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TelaahFarmasi $model */

$this->title = 'Create Telaah Farmasi';
$this->params['breadcrumbs'][] = ['label' => 'Telaah Farmasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="telaah-farmasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
