<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\RuangOk $model */

$this->title = 'Update Ruang Ok: ' . $model->kd_ruang_ok;
$this->params['breadcrumbs'][] = ['label' => 'Ruang Oks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_ruang_ok, 'url' => ['view', 'kd_ruang_ok' => $model->kd_ruang_ok]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ruang-ok-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
