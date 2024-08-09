<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Bangsal $model */

$this->title = 'Create Bangsal';
$this->params['breadcrumbs'][] = ['label' => 'Bangsals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bangsal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
