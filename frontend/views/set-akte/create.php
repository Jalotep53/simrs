<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetAkte $model */

$this->title = 'Create Set Akte';
$this->params['breadcrumbs'][] = ['label' => 'Set Aktes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-akte-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
