<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Ipsrssuplier $model */

$this->title = 'Create Ipsrssuplier';
$this->params['breadcrumbs'][] = ['label' => 'Ipsrssupliers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ipsrssuplier-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
