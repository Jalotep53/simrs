<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatMappingVaksin $model */

$this->title = 'Update Satu Sehat Mapping Vaksin: ' . $model->kode_brng;
$this->params['breadcrumbs'][] = ['label' => 'Satu Sehat Mapping Vaksins', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_brng, 'url' => ['view', 'kode_brng' => $model->kode_brng]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="satu-sehat-mapping-vaksin-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
