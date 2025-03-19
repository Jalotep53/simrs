<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Tokoreturbeli $model */

$this->title = 'Create Tokoreturbeli';
$this->params['breadcrumbs'][] = ['label' => 'Tokoreturbelis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tokoreturbeli-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
