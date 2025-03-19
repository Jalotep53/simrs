<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MasterMasalahKeperawatanGigi $model */

$this->title = 'Create Master Masalah Keperawatan Gigi';
$this->params['breadcrumbs'][] = ['label' => 'Master Masalah Keperawatan Gigis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-masalah-keperawatan-gigi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
