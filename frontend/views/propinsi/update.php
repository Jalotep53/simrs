<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Propinsi $model */

$this->title = 'Update Propinsi: ' . $model->kd_prop;
$this->params['breadcrumbs'][] = ['label' => 'Propinsis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_prop, 'url' => ['view', 'kd_prop' => $model->kd_prop]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="propinsi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
