<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Tampjual1 $model */

$this->title = 'Create Tampjual1';
$this->params['breadcrumbs'][] = ['label' => 'Tampjual1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tampjual1-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
