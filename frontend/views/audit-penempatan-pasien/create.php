<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\AuditPenempatanPasien $model */

$this->title = 'Create Audit Penempatan Pasien';
$this->params['breadcrumbs'][] = ['label' => 'Audit Penempatan Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="audit-penempatan-pasien-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
