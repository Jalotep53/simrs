<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MasterRencanaKeperawatanPsikiatri $model */

$this->title = 'Create Master Rencana Keperawatan Psikiatri';
$this->params['breadcrumbs'][] = ['label' => 'Master Rencana Keperawatan Psikiatris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-rencana-keperawatan-psikiatri-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
