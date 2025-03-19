<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetHadir $model */

$this->title = 'Create Set Hadir';
$this->params['breadcrumbs'][] = ['label' => 'Set Hadirs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-hadir-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
