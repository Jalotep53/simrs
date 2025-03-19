<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatObservationttvlp $model */

$this->title = 'Create Satu Sehat Observationttvlp';
$this->params['breadcrumbs'][] = ['label' => 'Satu Sehat Observationttvlps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satu-sehat-observationttvlp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
