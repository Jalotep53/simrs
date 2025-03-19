<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\DataHAIs $model */

$this->title = 'Create Data Ha Is';
$this->params['breadcrumbs'][] = ['label' => 'Data Ha Is', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-hais-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
