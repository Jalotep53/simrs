<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MasterMasalahKeperawatanGeriatri $model */

$this->title = 'Create Master Masalah Keperawatan Geriatri';
$this->params['breadcrumbs'][] = ['label' => 'Master Masalah Keperawatan Geriatris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-masalah-keperawatan-geriatri-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
