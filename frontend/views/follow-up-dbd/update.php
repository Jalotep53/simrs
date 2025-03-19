<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\FollowUpDbd $model */

$this->title = 'Update Follow Up Dbd: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Follow Up Dbds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'tgl_perawatan' => $model->tgl_perawatan, 'jam_rawat' => $model->jam_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="follow-up-dbd-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
