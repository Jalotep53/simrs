<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetLemburhr $model */

$this->title = 'Create Set Lemburhr';
$this->params['breadcrumbs'][] = ['label' => 'Set Lemburhrs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-lemburhr-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
