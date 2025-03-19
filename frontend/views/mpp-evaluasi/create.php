<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MppEvaluasi $model */

$this->title = 'Create Mpp Evaluasi';
$this->params['breadcrumbs'][] = ['label' => 'Mpp Evaluasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mpp-evaluasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
