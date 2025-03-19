<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Tindakan $model */

$this->title = 'Update Tindakan: ' . $model->tgl;
$this->params['breadcrumbs'][] = ['label' => 'Tindakans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tgl, 'url' => ['view', 'tgl' => $model->tgl, 'id' => $model->id, 'tnd' => $model->tnd, 'nm_pasien' => $model->nm_pasien]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tindakan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
