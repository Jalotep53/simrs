<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Tampjurnal2 $model */

$this->title = 'Update Tampjurnal2: ' . $model->kd_rek;
$this->params['breadcrumbs'][] = ['label' => 'Tampjurnal2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_rek, 'url' => ['view', 'kd_rek' => $model->kd_rek]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tampjurnal2-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
