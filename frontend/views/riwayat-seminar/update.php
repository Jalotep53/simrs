<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\RiwayatSeminar $model */

$this->title = 'Update Riwayat Seminar: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Riwayat Seminars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'nama_seminar' => $model->nama_seminar, 'mulai' => $model->mulai]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="riwayat-seminar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
