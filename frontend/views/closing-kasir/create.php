<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ClosingKasir $model */

$this->title = 'Create Closing Kasir';
$this->params['breadcrumbs'][] = ['label' => 'Closing Kasirs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="closing-kasir-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
