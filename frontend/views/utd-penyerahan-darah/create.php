<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\UtdPenyerahanDarah $model */

$this->title = 'Create Utd Penyerahan Darah';
$this->params['breadcrumbs'][] = ['label' => 'Utd Penyerahan Darahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="utd-penyerahan-darah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
