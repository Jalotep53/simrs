<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\AuditPembuanganLimbahCairInfeksius $model */

$this->title = 'Create Audit Pembuangan Limbah Cair Infeksius';
$this->params['breadcrumbs'][] = ['label' => 'Audit Pembuangan Limbah Cair Infeksiuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="audit-pembuangan-limbah-cair-infeksius-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
