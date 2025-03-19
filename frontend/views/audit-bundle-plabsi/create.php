<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\AuditBundlePlabsi $model */

$this->title = 'Create Audit Bundle Plabsi';
$this->params['breadcrumbs'][] = ['label' => 'Audit Bundle Plabsis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="audit-bundle-plabsi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
