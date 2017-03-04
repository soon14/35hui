<?php
$this->breadcrumbs=array(
	'所有购买记录',
);
if($userid){
    $this->menu=array(
            array('label'=>'经纪人详细页', 'url'=>array('uagent/view', 'id'=>Uagent::model()->findByAttributes(array('ua_uid'=>$userid))->ua_id)),
            array('label'=>'返回首页', 'url'=>array('uagent/index')),
    );
}else{
    $this->menu=array(
            array('label'=>'管理购买记录', 'url'=>array('admin')),
    );
}
?>

<h1>购买记录</h1>
<?php if(!$userid){?>
<form action="" method="get">
    <div class="row">
        区域：<?php echo CHtml::dropDownList('district',$district,Region::model()->getTarafUnits(37),array("empty"=>"--请选择--")); ?>
        业务员：<?php echo CHtml::textField('mr_salesman',$mr_salesman,array('size'=>20,'maxlength'=>50)); ?>
        合同编号：<?php echo CHtml::textField('br_contractno',$br_contractno,array('size'=>20,'maxlength'=>50)); ?>
        <input type="submit" value="搜索"/>
    </div>
</form>
<?php }?>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>