<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TagihanSadewa $model */

$this->title = 'Update Tagihan Sadewa: ' . $model->no_nota;
$this->params['breadcrumbs'][] = ['label' => 'Tagihan Sadewas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_nota, 'url' => ['view', 'no_nota' => $model->no_nota]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tagihan-sadewa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
