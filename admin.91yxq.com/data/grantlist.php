<?php
global $allGrants;
$allGrants=array(
    /***************************************iframe菜单*********************************************/
            array('key' =>1000, 'title' =>'综合管理', 'order' =>3),
                array('key' =>1100, 'title' =>'充值数据统计', 'order' =>1),
                    array('key' =>1102, 'title' =>'日收入统计',  'module' =>'colligate', 'option' =>'index','menu'=>"dataCount_d",'order' =>1),
                    array('key' =>1103, 'title' =>'月收入统计',  'module' =>'colligate', 'option' =>'index','menu'=>"monthCount_m",'order' =>1),
                    array('key' =>1104, 'title' =>'各游戏区服收入统计',  'module' =>'colligate', 'option' =>'index','menu'=>"serverDataCount",'order' =>1),
                    array('key' =>1105, 'title' =>'游戏收入查询',  'module' =>'colligate', 'option' =>'index','menu'=>"gameDataCount",'order' =>1),
                    array('key' =>1106, 'title' =>'游戏收入分析',  'module' =>'colligate', 'option' =>'index','menu'=>"payTogame_analysis",'order' =>1),
                    array('key' =>1107, 'title' =>'充值信息分析',  'module' =>'colligate', 'option' =>'index','menu'=>"paySuccess_rate",'order' =>1),
                    array('key' =>1108, 'title' =>'用户充值明细',  'module' =>'colligate', 'option' =>'index','menu'=>"payList",'order' =>1),
                    array('key' =>1109, 'title' =>'用户充值排行',  'module' =>'colligate', 'option' =>'index','menu'=>"payRanking",'order' =>1),
                    array('key' =>1110, 'title' =>'各区服开服首月收入对比',  'module' =>'colligate', 'option' =>'index','menu'=>"gameServer_payRatio",'order' =>1),
                    array('key' =>1111, 'title' =>'收入注册统计分析',  'module' =>'colligate', 'option' =>'index','menu'=>"pay_reg_analysis",'order' =>1),
                    array('key' =>1112, 'title' =>'收入统计分析',  'module' =>'colligate', 'option' =>'index','menu'=>"pay_analysis",'order' =>1),
                    array('key' =>1113, 'title' =>'开服数据分析',  'module' =>'colligate', 'option' =>'index','menu'=>"open_server_analysis",'order' =>1),
                    array('key' =>1114, 'title' =>'公会成员收入对比',  'module' =>'colligate', 'option' =>'index','menu'=>"guildMemberPay_contrast",'order' =>1),
                array('key' =>1200, 'title' =>'注册数据统计', 'order' =>1),
                    array('key' =>1201, 'title' =>'公会注册充值数据表',  'module' =>'colligate', 'option' =>'index','menu'=>"agent_regPay_data",'order' =>1),
                    array('key' =>1202, 'title' =>'公会注册实时统计',  'module' =>'colligate', 'option' =>'index','menu'=>"guildRegCount_h",'order' =>1),
                    array('key' =>1203, 'title' =>'游戏注册实时统计',  'module' =>'colligate', 'option' =>'index','menu'=>"gameRegCount_h",'order' =>1),
                    array('key' =>1204, 'title' =>'游戏注册按日统计',  'module' =>'colligate', 'option' =>'index','menu'=>"gameRegCount_d",'order' =>1),
                    array('key' =>1205, 'title' =>'公会注册按日统计',  'module' =>'colligate', 'option' =>'index','menu'=>"guildRegCount_d",'order' =>1),
                    array('key' =>1206, 'title' =>'各游戏新老用户统计',  'module' =>'colligate', 'option' =>'index','menu'=>"gameN_OuserCount",'order' =>1),
                    array('key' =>1207, 'title' =>'本月用户登录统计分析',  'module' =>'colligate', 'option' =>'index','menu'=>"monUserLoginCount",'order' =>1),
                array('key' =>1300, 'title' =>'客服中心', 'order' =>1),
                    array('key' =>1301, 'title' =>'玩家问题',  'module' =>'colligate', 'option' =>'index','menu'=>"usersQuestion",'order' =>1),
                    array('key' =>1302, 'title' =>'玩家充值查询',  'module' =>'colligate', 'option' =>'index','menu'=>"usersPayListSelect",'order' =>1),
                    array('key' =>1303, 'title' =>'玩家元宝到账查询',  'module' =>'colligate', 'option' =>'index','menu'=>"userGoldtSelect",'order' =>1),
                    array('key' =>1304, 'title' =>'游戏充值接口测试',  'module' =>'colligate', 'option' =>'index','menu'=>"gamePayTest",'order' =>1),
                    array('key' =>1305, 'title' =>'申请人工充值',  'module' =>'colligate', 'option' =>'index','menu'=>"KFPaytoUser",'order' =>1),
                    array('key' =>1306, 'title' =>'申请补发元宝',  'module' =>'colligate', 'option' =>'index','menu'=>"KFapplyGold",'order' =>1),
                    array('key' =>1307, 'title' =>'审核补发元宝订单管理',  'module' =>'colligate', 'option' =>'index','menu'=>"examineKFapplyGold",'order' =>1),
                    array('key' =>1308, 'title' =>'查询用户资料',  'module' =>'colligate', 'option' =>'index','menu'=>"selectUserInfo",'order' =>1),
                    array('key' =>1309, 'title' =>'修改玩家信息',  'module' =>'colligate', 'option' =>'index','menu'=>"editUserInfo",'order' =>1),
                    array('key' =>1310, 'title' =>'查询玩家登陆日志',  'module' =>'colligate', 'option' =>'index','menu'=>"selectUserLoginLog",'order' =>1),
                    array('key' =>1311, 'title' =>'登录玩家账号【测试】',  'module' =>'colligate', 'option' =>'index','menu'=>"loginUserToGame",'order' =>1),
                array('key' =>1400, 'title' =>'游戏管理', 'order' =>1),
                    array('key' =>1401, 'title' =>'平台游戏列表',  'module' =>'colligate', 'option' =>'index','menu'=>"gameList",'order' =>1),
                    array('key' =>1402, 'title' =>'平台游戏服务器列表',  'module' =>'colligate', 'option' =>'index','menu'=>"gameServerList",'order' =>1),
    /********************************************平台菜单********************************************/
            //**********************平台数据管理**********************************//
            array('key' =>2000, 'title' =>'平台注册数据', 'order' =>3),
                array('key' =>2200, 'title' =>'注册管理', 'order' =>1),
                    array('key' =>2201, 'title' =>'用户注册数据',  'module' =>'platform', 'option' =>'usersRelated', 'order' =>1),
                    array('key' =>2202, 'title' =>'玩家来源修复',  'module' =>'platform', 'option' =>'regCorrect', 'order' =>1),
                    array('key' =>2203, 'title' =>'链接屏蔽',  'module' =>'platform', 'option' =>'shieldUrl', 'order' =>1),
                    array('key' =>2204, 'title' =>'公会各游戏数据分析',  'module' =>'platform', 'option' =>'guildScoreData', 'order' =>1),
                    array('key' =>2205, 'title' =>'公会成员数据分析',  'module' =>'platform', 'option' =>'guildMemberScoreData', 'order' =>1),
            //**************平台、公会数据统计【充值】**************************//
            array('key' =>3000, 'title' =>'平台收入数据', 'order' =>3),
                array('key' =>3100, 'title' =>'充值统计', 'order' =>1),
                    array('key' =>3101, 'title' =>'玩家充值统计', 'order' =>1, 'module' =>'recharge', 'option' =>'rechargeListData', 'order' =>1),
                    array('key' =>3110, 'title' =>'各个游戏充值统计', 'module' =>'recharge', 'option' =>'gamePaycount', 'order' =>1),
                    array('key' =>3102, 'title' =>'发放首充',  'module' =>'recharge', 'option' =>'extendFirstPay', 'order' =>1),
                    array('key' =>3103, 'title' =>'发放VIP',  'module' =>'recharge', 'option' =>'extendVipPay', 'order' =>1),
                    array('key' =>3104, 'title' =>'内部充值及统计',  'module' =>'recharge', 'option' =>'applyInnerPay', 'order' =>1),
                    array('key' =>3105, 'title' =>'审批内充',  'module' =>'recharge', 'option' =>'examineInnerPay', 'order' =>1),
                    array('key' =>3106, 'title' =>'审批公会申请内充',  'module' =>'recharge', 'option' =>'examineInnerGuild', 'order' =>1),
                    array('key' =>3107, 'title' =>'公会工资对账结算',  'module' =>'recharge', 'option' =>'payjieToguild', 'order' =>1),
                    array('key' =>3108, 'title' =>'查询公会工资',  'module' =>'recharge', 'option' =>'guildPaySearch', 'order' =>1),
                    array('key' =>3109, 'title' =>'公会周工资结算查询统计',  'module' =>'recharge', 'option' =>'guildWeekJieSearch', 'order' =>1),
            //充值注册
                array('key' =>3200, 'title' =>'充值注册统计', 'order' =>1),
                    array('key' =>3201, 'title' =>'公会充值注册统计分析', 'module' =>'register', 'option' =>'guildRegPay', 'order' =>1),
                    array('key' =>3202, 'title' =>'游戏收入注册统计分析', 'module' =>'register', 'option' =>'regStatutics', 'order' =>1),
                    array('key' =>3203, 'title' =>'游戏服区注册充值', 'module' =>'register', 'option' =>'regPayByDate', 'order' =>1),
                    array('key' =>3204, 'title' =>'公会注册充值汇总', 'module' =>'register', 'option' =>'regPayCount', 'order' =>1),
            
        //************************财务对账板块***********************************//
            array('key' =>4000, 'title' =>'财务对账', 'order' =>5),
                array('key' =>4100, 'title' =>'平台月数据', 'order' =>1),
                    array('key' =>4101, 'title' =>'各游戏按月数据统计', 'module' =>'finance', 'option' =>'gametMonthData', 'order' =>1),
                    array('key' =>4102, 'title' =>'各研发按月数据统计', 'module' =>'finance', 'option' =>'companyMonthData', 'order' =>1),      
        //************************系统设置**************************************// 
            array('key' =>5000, 'title' =>'后台设置', 'order' =>3),
                array('key' =>5100, 'title' =>'系统权限', 'order' =>1),
                    array('key' =>5101, 'title' =>'权限列表', 'order' =>1, 'module' =>'system', 'option' =>'group', 'order' =>1),
                    array('key' =>5102, 'title' =>'系统管理员', 'module' =>'system', 'option' =>'users', 'order' =>1),
                    array('key' =>5103, 'title' =>'支付切换', 'module' =>'colligate', 'option' =>'index','menu'=>"payToggle",'order' =>1),
                    array('key' =>5104, 'title' =>'注册区服修改', 'module' =>'colligate', 'option' =>'index','menu'=>"modifyRegServer",'order' =>1),
                array('key' =>5200, 'title' =>'公会及成员管理', 'order' =>1),
                    array('key' =>5201, 'title' =>'公会列表', 'module' =>'system', 'option' =>'guilds', 'order' =>1),
                    array('key' =>5202, 'title' =>'公会成员列表', 'module' =>'system', 'option' =>'guildMembers', 'order' =>1),                    
                    array('key' =>5205, 'title' =>'推广链接封闭与解封', 'module' =>'system', 'option' =>'closeAdurl', 'order' =>1),
                    array('key' =>5206, 'title' =>'渠道合作详情',  'module' =>'colligate', 'option' =>'index','menu'=>"channelInfo",'order' =>1),
);