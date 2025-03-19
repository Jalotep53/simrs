<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatObservationLabMb $model */

$this->title = 'Create Satu Sehat Observation Lab Mb';
$this->params['breadcrumbs'][] = ['label' => 'Satu Sehat Observation Lab Mbs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satu-sehat-observation-lab-mb-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
