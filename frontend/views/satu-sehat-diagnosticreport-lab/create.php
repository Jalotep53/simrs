<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatDiagnosticreportLab $model */

$this->title = 'Create Satu Sehat Diagnosticreport Lab';
$this->params['breadcrumbs'][] = ['label' => 'Satu Sehat Diagnosticreport Labs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satu-sehat-diagnosticreport-lab-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
