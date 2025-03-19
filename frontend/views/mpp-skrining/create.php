<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MppSkrining $model */

$this->title = 'Create Mpp Skrining';
$this->params['breadcrumbs'][] = ['label' => 'Mpp Skrinings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mpp-skrining-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
