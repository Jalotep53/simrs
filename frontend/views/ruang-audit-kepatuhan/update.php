<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\RuangAuditKepatuhan $model */

$this->title = 'Update Ruang Audit Kepatuhan: ' . $model->id_ruang;
$this->params['breadcrumbs'][] = ['label' => 'Ruang Audit Kepatuhans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_ruang, 'url' => ['view', 'id_ruang' => $model->id_ruang]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ruang-audit-kepatuhan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
