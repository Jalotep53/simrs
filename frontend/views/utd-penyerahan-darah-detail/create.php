<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\UtdPenyerahanDarahDetail $model */

$this->title = 'Create Utd Penyerahan Darah Detail';
$this->params['breadcrumbs'][] = ['label' => 'Utd Penyerahan Darah Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="utd-penyerahan-darah-detail-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
