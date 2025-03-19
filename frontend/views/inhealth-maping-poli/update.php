<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\InhealthMapingPoli $model */

$this->title = 'Update Inhealth Maping Poli: ' . $model->kd_poli_rs;
$this->params['breadcrumbs'][] = ['label' => 'Inhealth Maping Polis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_poli_rs, 'url' => ['view', 'kd_poli_rs' => $model->kd_poli_rs]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="inhealth-maping-poli-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
