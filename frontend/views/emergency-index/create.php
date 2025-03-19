<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\EmergencyIndex $model */

$this->title = 'Create Emergency Index';
$this->params['breadcrumbs'][] = ['label' => 'Emergency Indices', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="emergency-index-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
