<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PengkajianRestrainYangMenyetujui $model */

$this->title = 'Create Pengkajian Restrain Yang Menyetujui';
$this->params['breadcrumbs'][] = ['label' => 'Pengkajian Restrain Yang Menyetujuis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengkajian-restrain-yang-menyetujui-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
