<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatMappingDepartemen $model */

$this->title = 'Create Satu Sehat Mapping Departemen';
$this->params['breadcrumbs'][] = ['label' => 'Satu Sehat Mapping Departemens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satu-sehat-mapping-departemen-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
