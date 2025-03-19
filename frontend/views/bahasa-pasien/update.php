<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BahasaPasien $model */

$this->title = 'Update Bahasa Pasien: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Bahasa Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bahasa-pasien-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
