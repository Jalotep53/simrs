<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\AuditKamarJenazah $model */

$this->title = 'Update Audit Kamar Jenazah: ' . $model->tanggal;
$this->params['breadcrumbs'][] = ['label' => 'Audit Kamar Jenazahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tanggal, 'url' => ['view', 'tanggal' => $model->tanggal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="audit-kamar-jenazah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
