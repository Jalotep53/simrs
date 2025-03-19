<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MasterMasalahKeperawatan $model */

$this->title = 'Create Master Masalah Keperawatan';
$this->params['breadcrumbs'][] = ['label' => 'Master Masalah Keperawatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-masalah-keperawatan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
