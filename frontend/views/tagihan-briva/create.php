<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TagihanBriva $model */

$this->title = 'Create Tagihan Briva';
$this->params['breadcrumbs'][] = ['label' => 'Tagihan Brivas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tagihan-briva-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
