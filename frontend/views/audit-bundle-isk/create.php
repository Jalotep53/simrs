<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\AuditBundleIsk $model */

$this->title = 'Create Audit Bundle Isk';
$this->params['breadcrumbs'][] = ['label' => 'Audit Bundle Isks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="audit-bundle-isk-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
