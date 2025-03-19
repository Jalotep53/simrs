<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetTuslah $model */

$this->title = 'Create Set Tuslah';
$this->params['breadcrumbs'][] = ['label' => 'Set Tuslahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-tuslah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
