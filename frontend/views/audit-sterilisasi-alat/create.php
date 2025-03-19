<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\AuditSterilisasiAlat $model */

$this->title = 'Create Audit Sterilisasi Alat';
$this->params['breadcrumbs'][] = ['label' => 'Audit Sterilisasi Alats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="audit-sterilisasi-alat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
