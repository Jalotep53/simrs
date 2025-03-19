<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatMedicationrequestRacikan $model */

$this->title = 'Create Satu Sehat Medicationrequest Racikan';
$this->params['breadcrumbs'][] = ['label' => 'Satu Sehat Medicationrequest Racikans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satu-sehat-medicationrequest-racikan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
