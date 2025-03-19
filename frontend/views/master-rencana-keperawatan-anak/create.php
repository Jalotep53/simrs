<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MasterRencanaKeperawatanAnak $model */

$this->title = 'Create Master Rencana Keperawatan Anak';
$this->params['breadcrumbs'][] = ['label' => 'Master Rencana Keperawatan Anaks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-rencana-keperawatan-anak-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
