<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\DiagnosaPasien $model */

$this->title = 'Create Diagnosa Pasien';
$this->params['breadcrumbs'][] = ['label' => 'Diagnosa Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diagnosa-pasien-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
