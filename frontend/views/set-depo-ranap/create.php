<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetDepoRanap $model */

$this->title = 'Create Set Depo Ranap';
$this->params['breadcrumbs'][] = ['label' => 'Set Depo Ranaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-depo-ranap-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
