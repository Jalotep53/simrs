<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatDiagnosticreportLabMb $model */

$this->title = 'Create Satu Sehat Diagnosticreport Lab Mb';
$this->params['breadcrumbs'][] = ['label' => 'Satu Sehat Diagnosticreport Lab Mbs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satu-sehat-diagnosticreport-lab-mb-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
