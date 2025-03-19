<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingDukcapil $model */

$this->title = 'Create Bridging Dukcapil';
$this->params['breadcrumbs'][] = ['label' => 'Bridging Dukcapils', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bridging-dukcapil-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
