<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\AuditPengelolaanLinenKotor $model */

$this->title = 'Update Audit Pengelolaan Linen Kotor: ' . $model->tanggal;
$this->params['breadcrumbs'][] = ['label' => 'Audit Pengelolaan Linen Kotors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tanggal, 'url' => ['view', 'tanggal' => $model->tanggal, 'id_ruang' => $model->id_ruang]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="audit-pengelolaan-linen-kotor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
