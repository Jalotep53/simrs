<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatObservationttvbb $model */

$this->title = 'Create Satu Sehat Observationttvbb';
$this->params['breadcrumbs'][] = ['label' => 'Satu Sehat Observationttvbbs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satu-sehat-observationttvbb-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
