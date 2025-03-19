<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatObservationttvsuhu $model */

$this->title = 'Create Satu Sehat Observationttvsuhu';
$this->params['breadcrumbs'][] = ['label' => 'Satu Sehat Observationttvsuhus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satu-sehat-observationttvsuhu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
