<?php

/**
 * This is the model class for table "{{oprationconfig}}".
 *
 * The followings are the available columns in table '{{oprationconfig}}':
 * @property integer $ocf_id
 * @property string $ocf_name
 * @property string $ocf_key
 * @property string $ocf_val
 * @property string $ocf_desc
 */
class Oprationconfig extends CActiveRecord
{

/*
       * 注：$oprationConfig数组不可使用于代码中，只在此作为注释
       * 所有使用到的地方全用数据库查询
       */
      var  $oprationConfig=array(
            'ua_identify_audit' =>array(
                 '0' ,//经纪人认证成功后，奖励的商务币.
                 '1' ,//经纪人认证成功后，奖励的积分.
            ),
            'ua_practice_audit' =>array(
                 '0' ,//经纪人名片认证成功后，奖励的商务币.
                 '1' ,//经纪人名片认证成功后，奖励的积分.
            ),
            'ua_license_audit' =>array(
                 '0' ,//经纪人运营认证成功后，奖励的商务币.
                 '1' ,//经纪人运营认证成功后， 奖励的积分.
            ),
            'uc_license_audit' =>array(
                 '0' ,//中介公司运营认证后，奖励的商务币.
                 '1' ,//中介公司运营认证后，奖励的积分.
            ),
            'bindTwitter' =>array(
                 '0' ,//发表微博被采用，奖励的商务币.
                 '1' ,//发表微博被采用，奖励的积分.
            ),
            'dealError' =>array(
                 '0' ,//楼盘纠错受理，奖励的商务币.
                 '1' ,//楼盘纠错受理，奖励的积分.
            ),
            'release' =>array(
                 '0' ,//发布房源，基本扣除的商务币.
                 '1' ,//发布推荐房源，扣除的商务币.
                 '2' ,//发布急房源，扣除的商务币。.
            ),
            'flushUpdateDate' =>array(
                 '0' ,//每刷新一次房源扣除的商务币.
            ),
            'updateLoss' =>array(
                 '0' ,//更新房源需花费的商务币.
            ),
            'applyPanorama' =>array(
                 '0' ,//申请绑定全景扣除的商务币.
            ),
            'uploadPanoramaPicAndSucBinding' =>array(
                '0',//成功上次全景图片，并绑定全景。奖励商务币数
                "1",//成功上次全景图片，并绑定全景。奖励积分数
            ),
            'illegalUpdate' =>array(
                 '0' ,//违规处理，奖励举报人的商务币.
                 '1' ,//违规受理，奖励举报人的积分.
                 '3' ,//违规受理，扣除被举报者的商务币.
                 '4' ,//违规受理，扣除被举报者的积分.
            ),
            'unormalOpration' =>array(
                 '0' ,//个人用户，可发布房源总数.
                 '1' ,//个人用户，可录入房源总数.
                 '2' ,//个人用户，每日可刷新数.
            ),
            'uagentOpration_unCertificate' =>array(
                 '0' ,//注册后未通过任何验证的经纪人,可发布房源总数.
                 '1' ,//注册后未通过任何验证的经纪人，可录入房源总数.
                 '2' ,//注册后未通过任何验证的经纪人，每日可刷新数.
            ),
            'uagentOpration_unAllCertificate' =>array(
                 '0' ,//注册后通过身份验证或门店验证的经纪人，可发布房源总数.
                 '1' ,//注册后通过身份验证或门店验证的经纪人，可录入房源总数.
                 '2' ,//注册后通过身份验证或门店验证的经纪人,每日可刷新数.
            ),
            'uagentOpration_AllCertificate' =>array(
                 '0' ,//通过身份验证以及门店验证的经纪人，可发布房源总数.
                 '1' ,//通过身份验证以及门店验证的经纪人，可录入房源总数.
                 '2' ,//通过身份验证以及门店验证的经纪人，每日可刷新数.
            ),
            'ucomOpration_unCertification' =>array(
                 '0' ,//注册后未通过运营认证的中介公司，可发布房源总数.
                 '1' ,//注册后未通过运营认证的中介公司，可录入房源总数.
                 '2' ,//注册后未通过运营认证的中介公司，每日可刷新数.
            ),
            'ucomOpration_AllCertification' =>array(
                 '0' ,//注册后通过通过运营认证的中介公司，可发布房源总数.
                 '1' ,//注册后通过通过运营认证的中介公司，可录入房源总数.
                 '2' ,//注册后通过通过运营认证的中介公司，每日可刷新数.
            ),
        );
	/**
	 * Returns the static model of the specified AR class.
	 * @return Oprationconfig the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{oprationconfig}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
		  array('ocf_name, ocf_key, ocf_val,ocf_desc', 'required'),
		  	array('ocf_name, ocf_key, ocf_val', 'length', 'max'=>100),
			array('ocf_desc', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ocf_id, ocf_name, ocf_key, ocf_val, ocf_desc', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ocf_id' => 'ID',
			'ocf_name' => '配置名',
			'ocf_key' => 'KEY',
			'ocf_val' => '值',
			'ocf_desc' => '描述',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('ocf_id',$this->ocf_id);

		$criteria->compare('ocf_name',$this->ocf_name,true);

		$criteria->compare('ocf_key',$this->ocf_key,true);

		$criteria->compare('ocf_val',$this->ocf_val,true);

		$criteria->compare('ocf_desc',$this->ocf_desc,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
    /*
     * $name 配置名
     * $key KEY
     */
    public static function getConfigByName($name,$key=false){
        $arr=array('ocf_name'=>$name);
        if(!($key===false)){
            $arr['ocf_key']=$key;
            $info= self::model()->findByAttributes($arr);
            return $info->ocf_val;
        }else{
            $valArr=array();
            $info= self::model()->findAllByAttributes($arr);
            foreach($info as $k => $v){
                $valArr[$v->ocf_key]=$v->ocf_val;
            }
            return $valArr;
        }
        throw new CHttpException(400,'没有相关的奖惩或操作限制的配置记录！');
    }
}