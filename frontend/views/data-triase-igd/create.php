<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\DataTriaseIgd $model */

$this->title = 'Create Data Triase Igd';
$this->params['breadcrumbs'][] = ['label' => 'Data Triase Igds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-triase-igd-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
