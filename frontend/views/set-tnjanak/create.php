<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetTnjanak $model */

$this->title = 'Create Set Tnjanak';
$this->params['breadcrumbs'][] = ['label' => 'Set Tnjanaks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-tnjanak-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
