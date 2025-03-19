<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MasterMasalahKeperawatanNeonatus $model */

$this->title = 'Create Master Masalah Keperawatan Neonatus';
$this->params['breadcrumbs'][] = ['label' => 'Master Masalah Keperawatan Neonatuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-masalah-keperawatan-neonatus-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
