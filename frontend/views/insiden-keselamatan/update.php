<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\InsidenKeselamatan $model */

$this->title = 'Update Insiden Keselamatan: ' . $model->kode_insiden;
$this->params['breadcrumbs'][] = ['label' => 'Insiden Keselamatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_insiden, 'url' => ['view', 'kode_insiden' => $model->kode_insiden]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="insiden-keselamatan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
