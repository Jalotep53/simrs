<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Industrifarmasi $model */

$this->title = 'Create Industrifarmasi';
$this->params['breadcrumbs'][] = ['label' => 'Industrifarmasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="industrifarmasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
