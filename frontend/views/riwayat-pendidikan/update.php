<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\RiwayatPendidikan $model */

$this->title = 'Update Riwayat Pendidikan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Riwayat Pendidikans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'pendidikan' => $model->pendidikan, 'sekolah' => $model->sekolah]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="riwayat-pendidikan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
