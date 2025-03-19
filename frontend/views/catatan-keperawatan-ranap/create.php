<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\CatatanKeperawatanRanap $model */

$this->title = 'Create Catatan Keperawatan Ranap';
$this->params['breadcrumbs'][] = ['label' => 'Catatan Keperawatan Ranaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catatan-keperawatan-ranap-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
