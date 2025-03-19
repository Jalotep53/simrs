<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\InhealthTindakanRadiologi $model */

$this->title = 'Create Inhealth Tindakan Radiologi';
$this->params['breadcrumbs'][] = ['label' => 'Inhealth Tindakan Radiologis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inhealth-tindakan-radiologi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
