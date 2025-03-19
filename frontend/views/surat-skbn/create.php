<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratSkbn $model */

$this->title = 'Create Surat Skbn';
$this->params['breadcrumbs'][] = ['label' => 'Surat Skbns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-skbn-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
