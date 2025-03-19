<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\AuditCuciTanganMedis $model */

$this->title = 'Create Audit Cuci Tangan Medis';
$this->params['breadcrumbs'][] = ['label' => 'Audit Cuci Tangan Medis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="audit-cuci-tangan-medis-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
