<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Subrekening $model */

$this->title = 'Create Subrekening';
$this->params['breadcrumbs'][] = ['label' => 'Subrekenings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subrekening-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
