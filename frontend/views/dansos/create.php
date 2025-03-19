<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Dansos $model */

$this->title = 'Create Dansos';
$this->params['breadcrumbs'][] = ['label' => 'Dansos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dansos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
