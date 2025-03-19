<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\AuditFasilitasApd $model */

$this->title = 'Create Audit Fasilitas Apd';
$this->params['breadcrumbs'][] = ['label' => 'Audit Fasilitas Apds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="audit-fasilitas-apd-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
