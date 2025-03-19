<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PangkatPolri $model */

$this->title = 'Create Pangkat Polri';
$this->params['breadcrumbs'][] = ['label' => 'Pangkat Polris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pangkat-polri-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
