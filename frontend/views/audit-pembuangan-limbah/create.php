<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\AuditPembuanganLimbah $model */

$this->title = 'Create Audit Pembuangan Limbah';
$this->params['breadcrumbs'][] = ['label' => 'Audit Pembuangan Limbahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="audit-pembuangan-limbah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
