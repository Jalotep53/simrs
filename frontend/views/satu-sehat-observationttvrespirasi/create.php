<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatObservationttvrespirasi $model */

$this->title = 'Create Satu Sehat Observationttvrespirasi';
$this->params['breadcrumbs'][] = ['label' => 'Satu Sehat Observationttvrespirasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satu-sehat-observationttvrespirasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
