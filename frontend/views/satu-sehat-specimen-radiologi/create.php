<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatSpecimenRadiologi $model */

$this->title = 'Create Satu Sehat Specimen Radiologi';
$this->params['breadcrumbs'][] = ['label' => 'Satu Sehat Specimen Radiologis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satu-sehat-specimen-radiologi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
