<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MasterMasalahMpp $model */

$this->title = 'Create Master Masalah Mpp';
$this->params['breadcrumbs'][] = ['label' => 'Master Masalah Mpps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-masalah-mpp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
