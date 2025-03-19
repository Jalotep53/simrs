<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PembagianWarung $model */

$this->title = 'Create Pembagian Warung';
$this->params['breadcrumbs'][] = ['label' => 'Pembagian Warungs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pembagian-warung-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
