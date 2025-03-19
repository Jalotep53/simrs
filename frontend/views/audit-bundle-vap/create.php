<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\AuditBundleVap $model */

$this->title = 'Create Audit Bundle Vap';
$this->params['breadcrumbs'][] = ['label' => 'Audit Bundle Vaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="audit-bundle-vap-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
