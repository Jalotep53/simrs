<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TagihanSadewa $model */

$this->title = 'Create Tagihan Sadewa';
$this->params['breadcrumbs'][] = ['label' => 'Tagihan Sadewas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tagihan-sadewa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
