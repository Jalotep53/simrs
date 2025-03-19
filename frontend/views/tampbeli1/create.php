<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Tampbeli1 $model */

$this->title = 'Create Tampbeli1';
$this->params['breadcrumbs'][] = ['label' => 'Tampbeli1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tampbeli1-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
