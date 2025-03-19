<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Tampreturbeli $model */

$this->title = 'Create Tampreturbeli';
$this->params['breadcrumbs'][] = ['label' => 'Tampreturbelis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tampreturbeli-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
