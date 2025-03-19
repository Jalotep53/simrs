<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\DataTriaseIgdsekunder $model */

$this->title = 'Create Data Triase Igdsekunder';
$this->params['breadcrumbs'][] = ['label' => 'Data Triase Igdsekunders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-triase-igdsekunder-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
