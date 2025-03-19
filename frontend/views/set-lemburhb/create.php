<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetLemburhb $model */

$this->title = 'Create Set Lemburhb';
$this->params['breadcrumbs'][] = ['label' => 'Set Lemburhbs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-lemburhb-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
