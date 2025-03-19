<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\AuditKepatuhanApd $model */

$this->title = 'Create Audit Kepatuhan Apd';
$this->params['breadcrumbs'][] = ['label' => 'Audit Kepatuhan Apds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="audit-kepatuhan-apd-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
