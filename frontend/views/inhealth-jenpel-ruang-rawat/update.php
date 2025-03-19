<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\InhealthJenpelRuangRawat $model */

$this->title = 'Update Inhealth Jenpel Ruang Rawat: ' . $model->kd_kamar;
$this->params['breadcrumbs'][] = ['label' => 'Inhealth Jenpel Ruang Rawats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_kamar, 'url' => ['view', 'kd_kamar' => $model->kd_kamar]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="inhealth-jenpel-ruang-rawat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
