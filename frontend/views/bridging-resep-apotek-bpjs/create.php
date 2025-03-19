<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingResepApotekBpjs $model */

$this->title = 'Create Bridging Resep Apotek Bpjs';
$this->params['breadcrumbs'][] = ['label' => 'Bridging Resep Apotek Bpjs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bridging-resep-apotek-bpjs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
