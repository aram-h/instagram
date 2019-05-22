<?php

/* @var $this yii\web\View */
/* @var $instagram \app\models\Instagram */
/* @var $posts array */

use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;

$this->title = 'My Yii Application';
?>
<div class="site-index">


    <div class="body-content">

        <div class="row">
            <?php $form = ActiveForm::begin(['id' => 'instagram_search']); ?>

            <div class="col-sm-8">
                <?= $form->field($instagram, 'url')->textInput(['autofocus' => true]) ?>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="control-label" > &nbsp; </label> <br />
                    <?= Html::submitButton('GET POSTS', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>
            </div>





            <?php ActiveForm::end(); ?>
        </div>

        <div class="row">
            <?php foreach ($posts as $post):?>
            <div class="col-sm-3">
                <div class="instagram-post">
                    <p><?=$post['title']?></p>

                    <p><img src="<?=$post['imageUrl']?>" class="img-responsive"></p>


                    <p>Likes: <?=$post['likes']?>,
                        Comments: <?=$post['commentsCount']?></p>
                    <p>Is Video: <?=$post['is_video'] ? 'YES' : 'NO'?></p>
                </div>

            </div>
            <?php endforeach;?>
        </div>

    </div>
</div>
