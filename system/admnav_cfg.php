<?php 
return array( 
	"index"	=>	array(
		"name"	=>	"系统首页", 
		"key"	=>	"index", 
		"groups"	=>	array( 
			"index"	=>	array(
				"name"	=>	"系统首页", 
				"key"	=>	"index", 
				"nodes"	=>	array( 
					array("name"=>"待办事务","module"=>"Index","action"=>"main"),
					array("name"=>"网站数据统计","module"=>"Index","action"=>"statistics"),
				),
			),
			"syslog"	=>	array(
				"name"	=>	"系统日志", 
				"key"	=>	"syslog", 
				"nodes"	=>	array( 
					array("name"=>"系统日志列表","module"=>"Log","action"=>"index"),
				),
			),
		),
	),
 	"user"	=>	array(
			"name"	=>	"会员管理",
			"key"	=>	"user",
			"groups"	=>	array(
					"user"	=>	array(
							"name"	=>	"会员管理",
							"key"	=>	"user",
							"nodes"	=>	array(
									array("name"=>"会员列表","module"=>"User","action"=>"index"),
									array("name"=>"会员等级","module"=>"UserLevel","action"=>"index"),
									array("name"=>"身份认证申请列表","module"=>"UserInvestor","action"=>"index"),
									array("name"=>"冻结资金列表","module"=>"UserFreeze","action"=>"index"),
									array("name"=>"申请解冻资金列表","module"=>"UserUnfreeze","action"=>"index"),
 							),
					),
					"referrals"	=>	array(
							"name"	=>	"会员邀请",
							"key"	=>	"referrals",
							"nodes"	=>	array(
									array("name"=>"邀请返利列表","module"=>"Referrals","action"=>"index"),
									array("name"=>"邀请统计列表","module"=>"ReferralsTotal","action"=>"referrals_count"),
  							),
					),
					"message"	=>	array(
							"name"	=>	"留言列表",
							"key"	=>	"message",
							"nodes"	=>	array(
									array("name"=>"留言分类列表","module"=>"MessageCate","action"=>"index"),
									array("name"=>"留言列表","module"=>"Message","action"=>"index"),
							),
					),
 					"integrate"	=>	array(
							"name"	=>	"会员插件管理",
							"key"	=>	"notice",
							"nodes"	=>	array(
									array("name"=>"会员整合插件","module"=>"Integrate","action"=>"index"),
									array("name"=>"同步登陆插件","module"=>"ApiLogin","action"=>"index"),
							),
					),
				   
					
			),
	),
	"dealcate"	=>	array(
			"name"	=>	"项目管理",
			"key"	=>	"dealcate",
			"groups"	=>	array(
					"dealcate"	=>	array(
							"name"	=>	"产品管理",
							"key"	=>	"dealcate",
							"nodes"	=>	array(
									array("name"=>"产品众筹分类","module"=>"DealCate","action"=>"index"),
 									array("name"=>"上线产品项目","module"=>"DealOnline","action"=>"online_index"),
									array("name"=>"未审核产品项目","module"=>"DealSubmit","action"=>"submit_index"),
 									array("name"=>"产品项目回收站","module"=>"DealDelete","action"=>"delete_index"),
  							),
					),
					"selflesscate"	=>	array(
							"name"	=>	"公益管理",
							"key"	=>	"selflesscate",
							"nodes"	=>	array(
									array("name"=>"公益众筹分类","module"=>"DealSelflessCate","action"=>"index"),
 									array("name"=>"上线公益项目","module"=>"DealSelflessOnline","action"=>"online_index"),
									array("name"=>"未审核公益项目","module"=>"DealSelflessSubmit","action"=>"submit_index"),
 									array("name"=>"公益项目回收站","module"=>"DealSelflessDelete","action"=>"delete_index"),
  							),
					),
					"investorcate"	=>	array(
							"name"	=>	"股权管理",
							"key"	=>	"investorcate",
							"nodes"	=>	array(
									array("name"=>"股权众筹分类","module"=>"DealInvestorCate","action"=>"index"),
 									array("name"=>"上线股权项目","module"=>"DealInvestorOnline","action"=>"online_index"),
									array("name"=>"未审核股权项目","module"=>"DealInvestorSubmit","action"=>"submit_index"),
 									array("name"=>"股权项目回收站","module"=>"DealInvestorDelete","action"=>"delete_index"),
  							),
					),
					"financecate"	=>	array(
							"name"	=>	"融资管理",
							"key"	=>	"financecate",
							"nodes"	=>	array(
									array("name"=>"融资众筹分类","module"=>"DealFinanceCate","action"=>"index"),
 									array("name"=>"上线融资项目","module"=>"DealFinanceOnline","action"=>"online_index"),
									array("name"=>"未审核融资项目","module"=>"DealFinanceSubmit","action"=>"submit_index"),
 									array("name"=>"融资项目回收站","module"=>"DealFinanceDelete","action"=>"delete_index"),
  							),
					),
					"housecate"	=>	array(
							"name"	=>	"房产管理",
							"key"	=>	"housecate",
							"nodes"	=>	array(
 									array("name"=>"房产众筹分类","module"=>"DealHouseCate","action"=>"index"),
 									array("name"=>"上线房产项目","module"=>"DealHouseOnline","action"=>"house_index"),
									array("name"=>"未审核房产项目","module"=>"DealHouseSubmit","action"=>"submit_house_index"),
									array("name"=>"房产项目回收站","module"=>"DealHouseDelete","action"=>"delete_house_index"),
   							),
					),
					"deal"	=>	array(
							"name"	=>	"投后管理",
							"key"	=>	"deal",
							"nodes"	=>	array(
									array("name"=>"未审核分红列表","module"=>"DealSubmitUserBonus","action"=>"submit_user_bonus"),
									array("name"=>"未审核固定回报列表","module"=>"DealSubmitFixedInterest","action"=>"submit_fixed_interest"),
									array("name"=>"未审核买房收益列表","module"=>"DealSubmitBuyHouseEarnings","action"=>"submit_buy_house_earnings"),
  							),
					),
					"stock_transfer"	=>	array(
							"name"	=>	"股权转让管理",
							"key"	=>	"stock_transfer",
							"nodes"	=>	array(
									array("name"=>"未审核转让列表","module"=>"StockTransfer","action"=>"submit_index"),
									array("name"=>"已审核转让列表","module"=>"StockTransferList","action"=>"submit_stock_transfer"),
							),
					),
 					"dealorder"	=>	array(
							"name"	=>	"项目信息",
							"key"	=>	"dealorder",
							"nodes"	=>	array(
									array("name"=>"项目支持","module"=>"DealOrder","action"=>"index"),
									array("name"=>"项目点评","module"=>"DealComment","action"=>"index"),
									array("name"=>"地区列表","module"=>"RegionConf","action"=>"index"),
							),
					),
				   
					"finance"=>array(
						"name"=> "融资公司管理",
						"key"=> "finance",
						"nodes" => array(
							array("name"=>"公司列表","module"=>"Finance","action"=>"online_index"),
							array("name"=>"未审核公司","module"=>"FinanceSubmit","action"=>"submit_index"),
						),
					),
			),
	),
	"payment"	=>	array(
			"name"	=>	"资金管理",
			"key"	=>	"payment",
			"groups"	=>	array(
					"payment"	=>	array(
							"name"	=>	"支付接口",
							"key"	=>	"payment",
							"nodes"	=>	array(
									array("name"=>"支付接口列表","module"=>"Payment","action"=>"index"),
									array("name"=>"第三方资金托管","module"=>"Collocation","action"=>"index"),
   							),
					),
					
 					"paymentnotice"	=>	array(
							"name"	=>	"资金日志",
							"key"	=>	"paymentnotice",
							"nodes"	=>	array(
									array("name"=>"付款记录","module"=>"PaymentNotice","action"=>"index"),
									array("name"=>"提现审核记录","module"=>"UserRefund","action"=>"index"),
									array("name"=>"提现确认记录","module"=>"UserConfirmRefund","action"=>"confirm_list"),
									array("name"=>"诚意金记录","module"=>"MoneyFreeze","action"=>"index"),
 							),
					),
					"transfernotice" => array(
							"name"  => "转账日志",
							"key"   => "transfernotice",
							"nodes" => array(
									array("name"=>"转账记录","module"=>"Transfernotice","action"=>"index"),							
							),
					),
				   	"yeepayrecharge"	=>	array(
							"name"	=>	"第三方托管",
							"key"	=>	"yeepayrecharge",
							"nodes"	=>	array(
									array("name"=>"充值记录","module"=>"YeepayRecharge","action"=>"index"),
									array("name"=>"提现记录","module"=>"YeepayWithdraw","action"=>"index"),
 							),
					),
					
			),
	),
	"nav"	=>	array(
			"name"	=>	"前端管理",
			"key"	=>	"nav",
			"groups"	=>	array(
					"nav"	=>	array(
							"name"	=>	"前端设置",
							"key"	=>	"nav",
							"nodes"	=>	array(
									array("name"=>"导航菜单列表","module"=>"Nav","action"=>"index"),
									array("name"=>"广告位列表","module"=>"Adv","action"=>"index"),
    							),
					),
  					"articlecate"	=>	array(
							"name"	=>	"文章管理",
							"key"	=>	"articlecate",
							"nodes"	=>	array(
									array("name"=>"文章分类列表","module"=>"ArticleCate","action"=>"index"),
									array("name"=>"文章分类回收站","module"=>"ArticleCateTrash","action"=>"trash"),
									array("name"=>"文章列表","module"=>"Article","action"=>"index"),
									array("name"=>"文章回收站","module"=>"ArticleTrash","action"=>"trash"),
 							),
					),
				   "link"	=>	array(
							"name"	=>	"友情链接管理",
							"key"	=>	"link",
							"nodes"	=>	array(
									array("name"=>"友情链接分组列表","module"=>"LinkGroup","action"=>"index"),
									array("name"=>"友情链接列表","module"=>"Link","action"=>"index"),
  							),
					),
					
					"vote"	=>	array(
							"name"	=>	"问卷调查设置",
							"key"	=>	"vote",
							"nodes"	=>	array(
									array("name"=>"问卷调查列表","module"=>"Vote","action"=>"index"),
   							),
					),			
			),
	),
	"msgtemplate"	=>	array(
			"name"	=>	"短信邮件",
			"key"	=>	"msgtemplate",
			"groups"	=>	array(
					"msgtemplate"	=>	array(
							"name"	=>	"消息模板",
							"key"	=>	"payment",
							"nodes"	=>	array(
									array("name"=>"消息模板","module"=>"MsgTemplate","action"=>"index"),
    							),
					),
					
 					"mailserver"	=>	array(
							"name"	=>	"邮件管理",
							"key"	=>	"mailserver",
							"nodes"	=>	array(
									array("name"=>"邮件服务器列表 ","module"=>"MailServer","action"=>"index","action_id"=>"57"),
									array("name"=>"邮件列表","module"=>"PromoteMsgMail","action"=>"mail_index","action_id"=>"667"),
 							),
					),
					"sms"	=>	array(
							"name"	=>	"短信管理",
							"key"	=>	"sms",
							"nodes"	=>	array(
									array("name"=>"短信接口列表","module"=>"Sms","action"=>"index","action_id"=>"58"),
									array("name"=>"短信列表","module"=>"PromoteMsgSms","action"=>"sms_index","action_id"=>"668"),
 							),
					),
					"stationmessage"	=>	array(
							"name"	=>	"站内消息管理",
							"key"	=>	"StationMessage",
							"nodes"	=>	array(
 									array("name"=>"站内消息列表","module"=>"StationMessage","action"=>"index"),//LS
 							),
					),
					"dealmsgList"	=>	array(
							"name"	=>	"队列管理",
							"key"	=>	"dealmsgList",
							"nodes"	=>	array(
									array("name"=>"业务队列列表","module"=>"DealMsgList","action"=>"index"),
									array("name"=>"推广队列列表","module"=>"PromoteMsgList","action"=>"index"),
									array("name"=>"站内消息队列列表","module"=>"StationMessageMsgList","action"=>"msg_list","action_id"=>"6944"),//LS
 							),
					),
				   
					
			),
	),
	"statistics"	=>	array(
			"name"	=>	"统计模块",
			"key"	=>	"statistics",
			"groups"	=>	array(
					"statistics"	=>	array(
							"name"	=>	"回报项目统计",
							"key"	=>	"statistics",
							"nodes"	=>	array(
									array("name"=>"项目统计","module"=>"StatisticsProject","action"=>"project"),
									array("name"=>"人数统计","module"=>"StatisticsUsernumTotal","action"=>"usernum_total"),
									array("name"=>"金额统计","module"=>"StatisticsMoneyTotal","action"=>"money_total"),
									array("name"=>"回报统计","module"=>"StatisticsHasbackTotal","action"=>"hasback_total"),
									array("name"=>"逾期统计","module"=>"StatisticsOverdueTotal","action"=>"overdue_total"),
									
   							),
					),
					
 					"statistics_gq"	=>	array(
							"name"	=>	"股权项目统计",
							"key"	=>	"statistics_gq",
							"nodes"	=>	array(
									array("name"=>"项目统计","module"=>"StatisticsInvesteTotal","action"=>"investe_total"),
									array("name"=>"投资人统计","module"=>"StatisticsInvestorsTotal","action"=>"investors_total"),
									array("name"=>"融资金额统计","module"=>"StatisticsFinancingAmountTotal","action"=>"financing_amount_total"),
									array("name"=>"违约统计","module"=>"StatisticsBreachConventionTotal","action"=>"breach_convention_total"),
 							),
					),
				   
				   "statistics_pt"	=>	array(
							"name"	=>	"平台统计",
							"key"	=>	"statistics_pt",
							"nodes"	=>	array(
									array("name"=>"充值统计","module"=>"StatisticsMoneyInchangeTotal","action"=>"money_inchange_total"),
									array("name"=>"提现统计","module"=>"StatisticsMoneyCarryBankTotal","action"=>"money_carry_bank_total"),
									array("name"=>"用户统计","module"=>"StatisticsUserTotal","action"=>"user_total"),
									array("name"=>"网站费用统计","module"=>"StatisticsSiteCostsTotal","action"=>"site_costs_total"),
 							),
					),
					
			),
	),
	"system"	=>	array(
		"name"	=>	"系统设置", 
		"key"	=>	"system", 
		"groups"	=>	array( 
			"sysconf"	=>	array(
				"name"	=>	"系统设置", 
				"key"	=>	"sysconf", 
				"nodes"	=>	array( 
					array("name"=>"系统配置","module"=>"Conf","action"=>"index"),
					array("name"=>"轮播广告设置","module"=>"IndexImage","action"=>"index"),
					array("name"=>"帮助列表","module"=>"Help","action"=>"index"),
					array("name"=>"常见问题","module"=>"Faq","action"=>"index"),
					array("name"=>"银行列表","module"=>"Bank","action"=>"index"),
					//array("name"=>"提现手续费","module"=>"UserCarry","action"=>"config"),
					'Contract_index'=>array("name"=>"合同范本设置","module"=>"Contract","action"=>"index"),
 				),
			),
		 
 			
			"mobile"	=>	array(
				"name"	=>	"移动平台设置", 
				"key"	=>	"mobile", 
				"nodes"	=>	array( 
					array("name"=>"手机端配置","module"=>"Conf","action"=>"mobile"),
					array("name"=>"手机端广告列表","module"=>"MAdv","action"=>"index"),
				),
			),		
			"admin"	=>	array(
				"name"	=>	"系统管理员", 
				"key"	=>	"admin", 
				"nodes"	=>	array( 
					array("name"=>"管理员分组列表","module"=>"Role","action"=>"index","action_id"=>"11"),
					array("name"=>"管理员分组回收站","module"=>"RoleTrash","action"=>"trash","action_id"=>"13"),
					array("name"=>"管理员列表","module"=>"Admin","action"=>"index","action_id"=>"14"),
					array("name"=>"管理员回收站","module"=>"AdminTrash","action"=>"trash","action_id"=>"15"),
				),
			),
			 
			"datebase"	=>	array(
				"name"	=>	"数据库", 
				"key"	=>	"datebase", 
				"nodes"	=>	array( 
					array("name"=>"数据库备份","module"=>"Database","action"=>"index","action_id"=>"17"),
					array("name"=>"SQL操作","module"=>"DatabaseSql","action"=>"sql","action_id"=>"18"),
				),
			),
			"sqlcheck"	=>	array(
				"name"	=>	"系统监测", 
				"key"	=>	"sqlcheck", 
				"nodes"	=>	array( 
					array("name"=>"系统监测列表","module"=>"SqlCheck","action"=>"index"),
 				),
			),
		),
	),
	"weixin"	=>	array(
		"name"	=>	"微信平台设置", 
		"key"	=>	"weixin", 
		"groups"	=>	array( 
			"weixinconf"	=>	array(
				"name"	=>	"平台设置", 
				"key"	=>	"WeixinConf", 
				"nodes"	=>	array( 
					array("name"=>"第三方平台配置","module"=>"WeixinConf","action"=>"index"),
  				),
			),
			"weixininfo"	=>	array(
				"name"	=>	"微信配置", 
				"key"	=>	"weixininfo", 
				"nodes"	=>	array( 
					array("name"=>"账户管理","module"=>"WeixinInfo","action"=>"index"),
					array("name"=>"自定义菜单","module"=>"WeixinInfoNavSetting","action"=>"nav_setting"),
					 
  				),
			),
		   "weixinreply"	=>	array(
				"name"	=>	"微信回复设置", 
				"key"	=>	"weixinreply", 
				"nodes"	=>	array( 
 					array("name"=>"默认回复设置","module"=>"WeixinReply","action"=>"index"),
 					array("name"=>"关注时回复","module"=>"WeixinReplyOnfocus","action"=>"onfocus"),
 					array("name"=>"文本回复","module"=>"WeixinReplyTxt","action"=>"txt"),
 					array("name"=>"图文回复","module"=>"WeixinReplyNews","action"=>"news"),
 					array("name"=>"LBS回复","module"=>"WeixinReplyLbs","action"=>"lbs"),
   				),
			),
			
			"weixintemplate"	=>	array(
				"name"	=>	"微信模板设置", 
				"key"	=>	"weixintemplate", 
				"nodes"	=>	array(
 					array("name"=>"设置行业","module"=>"WeixinTemplateSetIndustry","action"=>"set_industry"),
 					array("name"=>"模板列表","module"=>"WeixinTemplate","action"=>"index"),
 					array("name"=>"模板消息队列","module"=>"WeixinTemplateMsglist","action"=>"msglist"),
    				),
			),
			
			"weixinuser"	=>	array(
				"name"	=>	"微信会员管理", 
				"key"	=>	"weixinuser", 
				"nodes"	=>	array(
 					array("name"=>"分组管理","module"=>"WeixinUserGroups","action"=>"groups"),
 					array("name"=>"会员管理","module"=>"WeixinUser","action"=>"index"),
 					array("name"=>"普通消息群发","module"=>"WeixinUserMessageSend","action"=>"message_send"),
 					array("name"=>"高级群发","module"=>"WeixinUserAdvanced","action"=>"advanced"),
    				),
			),
 			
		),
	),
	"licai"	=>	array(
			"name"	=>	"理财管理",
			"key"	=>	"licai",
			"groups"	=>	array(
					"licai"	=>	array(
							"name"	=>	"理财管理",
							"key"	=>	"licai",
							"nodes"	=>	array(
									array("name"=>"理财列表","module"=>"Licai","action"=>"index"),
									array("name"=>"订单列表","module"=>"LicaiOrder","action"=>"order_list"),
   							),
					),
					
 					"LicaiBank"	=>	array(
							"name"	=>	"理财配置",
							"key"	=>	"LicaiBank",
							"nodes"	=>	array(
									array("name"=>"银行列表","module"=>"LicaiBank","action"=>"index"),
									array("name"=>"基金种类列表","module"=>"LicaiFundType","action"=>"index"),
									array("name"=>"基金品牌列表","module"=>"LicaiFundBrand","action"=>"index"),
 									array("name"=>"个性推荐","module"=>"LicaiRecommend","action"=>"index"),
									array("name"=>"假日列表","module"=>"LicaiHoliday","action"=>"index"),
									array("name"=>"首页显示订单","module"=>"LicaiDealshow","action"=>"index"),
							),
					),
				   
				   "LicaiRedempte"	=>	array(
							"name"	=>	"赎回管理",
							"key"	=>	"LicaiRedempte",
							"nodes"	=>	array(
									array("name"=>"理财赎回管理","module"=>"LicaiRedempte","action"=>"index","action_id"=>"7028"),
									array("name"=>"预热期赎回管理","module"=>"LicaiRedempteBefore","action"=>"before_index","action_id"=>"7031"),
   							),
					),
					
					 "LicaiNear"	=>	array(
							"name"	=>	"理财发放",
							"key"	=>	"LicaiNear",
							"nodes"	=>	array(
									array("name"=>"快到期","module"=>"LicaiNear","action"=>"index"),
									array("name"=>"已发放","module"=>"LicaiSend","action"=>"index"),
   							),
					),
					
					 "LicaiAdvance"	=>	array(
							"name"	=>	"垫付单",
							"key"	=>	"LicaiAdvance",
							"nodes"	=>	array(
									array("name"=>"垫付单管理","module"=>"LicaiAdvance","action"=>"index"),
    							),
					),
					
			),
	),
	
	"score_mall"	=>	array(
			"name"	=>	"积分商城",
			"key"	=>	"score_mall",
			"groups"	=>	array(
					"score_mall"	=>	array(
							"name"	=>	"积分商城",
							"key"	=>	"score_mall",
							"nodes"	=>	array(
									array("name"=>"商品列表","module"=>"Goods","action"=>"index"),
									array("name"=>"商品分类","module"=>"GoodsCate","action"=>"index"),
									array("name"=>"兑换商品","module"=>"GoodsOrder","action"=>"index"),
									//array("name"=>"商品属性类型","module"=>"GoodsType","action"=>"index"),
							),
					),
	
			),
	),
		
);
?>