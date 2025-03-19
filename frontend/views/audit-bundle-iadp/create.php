<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\AuditBundleIadp $model */

$this->title = 'Create Audit Bundle Iadp';
$this->params['breadcrumbs'][] = ['label' => 'Audit Bundle Iadps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="audit-bundle-iadp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
