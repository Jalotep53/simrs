<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Indexins $model */

$this->title = 'Create Indexins';
$this->params['breadcrumbs'][] = ['label' => 'Indexins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="indexins-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
