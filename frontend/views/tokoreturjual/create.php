<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Tokoreturjual $model */

$this->title = 'Create Tokoreturjual';
$this->params['breadcrumbs'][] = ['label' => 'Tokoreturjuals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tokoreturjual-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
