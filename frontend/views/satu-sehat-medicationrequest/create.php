<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatMedicationrequest $model */

$this->title = 'Create Satu Sehat Medicationrequest';
$this->params['breadcrumbs'][] = ['label' => 'Satu Sehat Medicationrequests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satu-sehat-medicationrequest-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
