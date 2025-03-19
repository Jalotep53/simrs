<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\AuditBundleIadp $model */

$this->title = 'Update Audit Bundle Iadp: ' . $model->tanggal;
$this->params['breadcrumbs'][] = ['label' => 'Audit Bundle Iadps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tanggal, 'url' => ['view', 'tanggal' => $model->tanggal, 'nik' => $model->nik]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="audit-bundle-iadp-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
