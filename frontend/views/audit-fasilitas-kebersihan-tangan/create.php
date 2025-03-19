<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\AuditFasilitasKebersihanTangan $model */

$this->title = 'Create Audit Fasilitas Kebersihan Tangan';
$this->params['breadcrumbs'][] = ['label' => 'Audit Fasilitas Kebersihan Tangans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="audit-fasilitas-kebersihan-tangan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
