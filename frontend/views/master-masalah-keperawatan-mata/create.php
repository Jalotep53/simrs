<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MasterMasalahKeperawatanMata $model */

$this->title = 'Create Master Masalah Keperawatan Mata';
$this->params['breadcrumbs'][] = ['label' => 'Master Masalah Keperawatan Matas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-masalah-keperawatan-mata-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
