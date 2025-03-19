<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MasterMasalahKeperawatanPsikiatri $model */

$this->title = 'Create Master Masalah Keperawatan Psikiatri';
$this->params['breadcrumbs'][] = ['label' => 'Master Masalah Keperawatan Psikiatris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-masalah-keperawatan-psikiatri-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
