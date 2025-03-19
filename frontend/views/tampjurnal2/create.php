<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Tampjurnal2 $model */

$this->title = 'Create Tampjurnal2';
$this->params['breadcrumbs'][] = ['label' => 'Tampjurnal2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tampjurnal2-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
