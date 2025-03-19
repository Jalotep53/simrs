<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Tokopenjualan $model */

$this->title = 'Create Tokopenjualan';
$this->params['breadcrumbs'][] = ['label' => 'Tokopenjualans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tokopenjualan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
