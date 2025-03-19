<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\RuangAuditKepatuhan $model */

$this->title = 'Create Ruang Audit Kepatuhan';
$this->params['breadcrumbs'][] = ['label' => 'Ruang Audit Kepatuhans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ruang-audit-kepatuhan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
