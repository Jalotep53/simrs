<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ParkirJenis $model */

$this->title = 'Create Parkir Jenis';
$this->params['breadcrumbs'][] = ['label' => 'Parkir Jenis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parkir-jenis-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
