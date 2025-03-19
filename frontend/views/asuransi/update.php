<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Asuransi $model */

$this->title = 'Update Asuransi: ' . $model->stts;
$this->params['breadcrumbs'][] = ['label' => 'Asuransis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->stts, 'url' => ['view', 'stts' => $model->stts]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="asuransi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
