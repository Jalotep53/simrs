<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\AuditKepatuhanApd $model */

$this->title = 'Update Audit Kepatuhan Apd: ' . $model->nik;
$this->params['breadcrumbs'][] = ['label' => 'Audit Kepatuhan Apds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nik, 'url' => ['view', 'nik' => $model->nik, 'tindakan' => $model->tindakan, 'tanggal' => $model->tanggal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="audit-kepatuhan-apd-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
