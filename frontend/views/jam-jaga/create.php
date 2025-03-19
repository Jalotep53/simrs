<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\JamJaga $model */

$this->title = 'Create Jam Jaga';
$this->params['breadcrumbs'][] = ['label' => 'Jam Jagas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jam-jaga-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
