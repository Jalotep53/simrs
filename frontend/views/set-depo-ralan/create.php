<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetDepoRalan $model */

$this->title = 'Create Set Depo Ralan';
$this->params['breadcrumbs'][] = ['label' => 'Set Depo Ralans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-depo-ralan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
