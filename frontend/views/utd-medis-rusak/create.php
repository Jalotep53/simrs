<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\UtdMedisRusak $model */

$this->title = 'Create Utd Medis Rusak';
$this->params['breadcrumbs'][] = ['label' => 'Utd Medis Rusaks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="utd-medis-rusak-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
