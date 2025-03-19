<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatObservationttvkesadaran $model */

$this->title = 'Create Satu Sehat Observationttvkesadaran';
$this->params['breadcrumbs'][] = ['label' => 'Satu Sehat Observationttvkesadarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satu-sehat-observationttvkesadaran-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
