<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PangkatTni $model */

$this->title = 'Create Pangkat Tni';
$this->params['breadcrumbs'][] = ['label' => 'Pangkat Tnis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pangkat-tni-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
