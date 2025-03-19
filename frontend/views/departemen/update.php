<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Departemen $model */

$this->title = 'Update Departemen: ' . $model->dep_id;
$this->params['breadcrumbs'][] = ['label' => 'Departemens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dep_id, 'url' => ['view', 'dep_id' => $model->dep_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="departemen-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
