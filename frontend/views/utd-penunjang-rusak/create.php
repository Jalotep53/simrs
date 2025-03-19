<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\UtdPenunjangRusak $model */

$this->title = 'Create Utd Penunjang Rusak';
$this->params['breadcrumbs'][] = ['label' => 'Utd Penunjang Rusaks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="utd-penunjang-rusak-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
