<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\RawatInapPr $model */

$this->title = 'Create Rawat Inap Pr';
$this->params['breadcrumbs'][] = ['label' => 'Rawat Inap Prs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rawat-inap-pr-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
