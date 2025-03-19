<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatClinicalimpression $model */

$this->title = 'Create Satu Sehat Clinicalimpression';
$this->params['breadcrumbs'][] = ['label' => 'Satu Sehat Clinicalimpressions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satu-sehat-clinicalimpression-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
