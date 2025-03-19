<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\AuditBundleIdo $model */

$this->title = 'Create Audit Bundle Ido';
$this->params['breadcrumbs'][] = ['label' => 'Audit Bundle Idos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="audit-bundle-ido-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
