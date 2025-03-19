<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Tampjurnal $model */

$this->title = 'Create Tampjurnal';
$this->params['breadcrumbs'][] = ['label' => 'Tampjurnals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tampjurnal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
