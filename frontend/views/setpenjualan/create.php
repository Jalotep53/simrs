<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Setpenjualan $model */

$this->title = 'Create Setpenjualan';
$this->params['breadcrumbs'][] = ['label' => 'Setpenjualans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="setpenjualan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
