<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Tampjurnal $model */

$this->title = 'Update Tampjurnal: ' . $model->kd_rek;
$this->params['breadcrumbs'][] = ['label' => 'Tampjurnals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_rek, 'url' => ['view', 'kd_rek' => $model->kd_rek]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tampjurnal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
