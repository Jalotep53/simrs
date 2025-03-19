<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\AuditPembuanganBendaTajam $model */

$this->title = 'Create Audit Pembuangan Benda Tajam';
$this->params['breadcrumbs'][] = ['label' => 'Audit Pembuangan Benda Tajams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="audit-pembuangan-benda-tajam-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
