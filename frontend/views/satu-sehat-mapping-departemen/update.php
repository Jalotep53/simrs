<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatMappingDepartemen $model */

$this->title = 'Update Satu Sehat Mapping Departemen: ' . $model->dep_id;
$this->params['breadcrumbs'][] = ['label' => 'Satu Sehat Mapping Departemens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dep_id, 'url' => ['view', 'dep_id' => $model->dep_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="satu-sehat-mapping-departemen-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
