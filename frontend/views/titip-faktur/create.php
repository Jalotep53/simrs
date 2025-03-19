<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TitipFaktur $model */

$this->title = 'Create Titip Faktur';
$this->params['breadcrumbs'][] = ['label' => 'Titip Fakturs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="titip-faktur-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
