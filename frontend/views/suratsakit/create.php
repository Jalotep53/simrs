<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Suratsakit $model */

$this->title = 'Create Suratsakit';
$this->params['breadcrumbs'][] = ['label' => 'Suratsakits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="suratsakit-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
