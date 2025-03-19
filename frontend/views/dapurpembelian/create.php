<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Dapurpembelian $model */

$this->title = 'Create Dapurpembelian';
$this->params['breadcrumbs'][] = ['label' => 'Dapurpembelians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dapurpembelian-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
