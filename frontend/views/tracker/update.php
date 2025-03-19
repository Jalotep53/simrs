<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Tracker $model */

$this->title = 'Update Tracker: ' . $model->nip;
$this->params['breadcrumbs'][] = ['label' => 'Trackers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nip, 'url' => ['view', 'nip' => $model->nip, 'tgl_login' => $model->tgl_login, 'jam_login' => $model->jam_login]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tracker-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
