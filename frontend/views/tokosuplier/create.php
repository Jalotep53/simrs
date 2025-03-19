<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Tokosuplier $model */

$this->title = 'Create Tokosuplier';
$this->params['breadcrumbs'][] = ['label' => 'Tokosupliers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tokosuplier-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
