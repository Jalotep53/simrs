<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Setsms $model */

$this->title = 'Create Setsms';
$this->params['breadcrumbs'][] = ['label' => 'Setsms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="setsms-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
