<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingSrbBpjs $model */

$this->title = 'Create Bridging Srb Bpjs';
$this->params['breadcrumbs'][] = ['label' => 'Bridging Srb Bpjs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bridging-srb-bpjs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
