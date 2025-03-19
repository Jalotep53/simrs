<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\UtdKomponenDarah $model */

$this->title = 'Update Utd Komponen Darah: ' . $model->kode;
$this->params['breadcrumbs'][] = ['label' => 'Utd Komponen Darahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode, 'url' => ['view', 'kode' => $model->kode]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="utd-komponen-darah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
