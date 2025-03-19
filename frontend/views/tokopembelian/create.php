<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Tokopembelian $model */

$this->title = 'Create Tokopembelian';
$this->params['breadcrumbs'][] = ['label' => 'Tokopembelians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tokopembelian-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
