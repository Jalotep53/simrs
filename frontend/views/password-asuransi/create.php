<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PasswordAsuransi $model */

$this->title = 'Create Password Asuransi';
$this->params['breadcrumbs'][] = ['label' => 'Password Asuransis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="password-asuransi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
