<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Penjab $model */

$this->title = 'Create Penjab';
$this->params['breadcrumbs'][] = ['label' => 'Penjabs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penjab-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
