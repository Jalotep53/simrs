<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Dapursuplier $model */

$this->title = 'Create Dapursuplier';
$this->params['breadcrumbs'][] = ['label' => 'Dapursupliers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dapursuplier-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
