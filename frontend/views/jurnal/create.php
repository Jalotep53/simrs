<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Jurnal $model */

$this->title = 'Create Jurnal';
$this->params['breadcrumbs'][] = ['label' => 'Jurnals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jurnal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
