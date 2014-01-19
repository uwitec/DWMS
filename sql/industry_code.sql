/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50527
Source Host           : localhost:3306
Source Database       : dwms

Target Server Type    : MYSQL
Target Server Version : 50527
File Encoding         : 65001

Date: 2014-01-18 16:49:13
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `industry_code`
-- ----------------------------
DROP TABLE IF EXISTS `industry_code`;
CREATE TABLE `industry_code` (
  `industry_id` int(11) NOT NULL AUTO_INCREMENT,
  `industry_code` int(11) DEFAULT NULL,
  `industry_name` varchar(255) DEFAULT NULL,
  `industry_description` varchar(255) DEFAULT NULL,
  `industry_up` int(11) DEFAULT NULL,
  PRIMARY KEY (`industry_id`)
) ENGINE=InnoDB AUTO_INCREMENT=157 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of industry_code
-- ----------------------------
INSERT INTO `industry_code` VALUES ('1', '1', '农、林、牧、渔业', null, null);
INSERT INTO `industry_code` VALUES ('2', '1010', '农业', '包括谷物种植业、油料和豆类作物种植业、棉、麻等植物性纺织原料种植业、糖料作物、烟草、药材，蔬菜、瓜类和薯类作物种植业，茶、桑、果树种植业及其他种植业。（含野生植物的果实、纤维、树胶、树脂、油料以及野生药材、菌类、柴草等的采集。）', '1');
INSERT INTO `industry_code` VALUES ('3', '1020', '林业', '包括采种、育苗、植树造林、森林抚育、迹地更新、森林保护、林场的经营管理及对橡胶、漆树、油桐、咖啡、可可、花椒、胡椒、核桃等林木种植及其林产品的采集。', '1');
INSERT INTO `industry_code` VALUES ('4', '1030', '畜牧业', '牲畜饲养放牧业家禽饲养业、狩猎业及其他畜牧业。', '1');
INSERT INTO `industry_code` VALUES ('5', '1040', '渔业', '海洋渔业、淡水渔业、水生动物养殖及捕捞。', '1');
INSERT INTO `industry_code` VALUES ('6', '1050', '农、林、牧、渔服务业', '包括农业技术推广、动植物检疫、冶沙及兽医等。', '1');
INSERT INTO `industry_code` VALUES ('7', '2', '采掘业', null, null);
INSERT INTO `industry_code` VALUES ('8', '2060', '煤炭采选业', '煤炭开采业、煤炭洗选业。', '2');
INSERT INTO `industry_code` VALUES ('9', '2070', '石油和天然气开采业', '天然原油、天然气、油页岩开采业。', '2');
INSERT INTO `industry_code` VALUES ('10', '2080', '黑色金属矿采选业', '采矿、选矿、铁矿、锰矿、铬矿采选业。', '2');
INSERT INTO `industry_code` VALUES ('11', '2090', '有色金属矿采选业', '重有色金属矿、轻有色金属矿、贵金属矿、稀有稀土金属矿采选业。', '2');
INSERT INTO `industry_code` VALUES ('12', '2100', '非金属矿采选业', '土砂石开采业、化学矿采选业及其他非金属矿采选业。', '2');
INSERT INTO `industry_code` VALUES ('13', '2103', '采盐业', '海盐业、湖盐业、井盐业、矿盐业及池盐的生产。', '2');
INSERT INTO `industry_code` VALUES ('14', '2110', '其他矿采选业', null, '2');
INSERT INTO `industry_code` VALUES ('15', '2120', '木材及竹材采运业', '木材采运业、竹材采运业。', '2');
INSERT INTO `industry_code` VALUES ('16', '3', '制造业', null, null);
INSERT INTO `industry_code` VALUES ('17', '3130', '食品加工业', '粮食及饲料加工业、植物油加工业、制糖业、屠宰及肉类蛋类加工业、水产品加工业、盐加工业及其他食品加工业(蔬菜的加工等)。', '3');
INSERT INTO `industry_code` VALUES ('18', '3140', '食品制造业', '糕点、糖果制造业、乳制品制造业、罐头食品制造业、发酵制品业、调味品制造业及其他食品制造业（豆制品、代乳品、制冰业、淀粉糖业、冷冻钦品等）。', '3');
INSERT INTO `industry_code` VALUES ('19', '3150', '饮料制造业', '酒精及饮料酒制造业、软饮料制造业、制茶业及其他饮料制造业（中药保健钦料等）。', '3');
INSERT INTO `industry_code` VALUES ('20', '3160', '烟草加工业', '烟叶复烤业、卷烟制造业及其他烟草加工业。', '3');
INSERT INTO `industry_code` VALUES ('21', '3170', '纺织业', '纤维原料初步加工业、棉纺织业、毛纺织业、麻纺织业、丝绢纺织业、针织品业及其他纺织业。', '3');
INSERT INTO `industry_code` VALUES ('22', '3180', '服装及其他纤维制品制造业', '服装制造业、制帽业、制鞋业及其他纤维制品制造业。', '3');
INSERT INTO `industry_code` VALUES ('23', '3190', '皮革、毛皮、羽绒及其制品业', '制革业、皮革制品制造业、毛皮鞣制及制品业、羽毛(绒)及制品业。', '3');
INSERT INTO `industry_code` VALUES ('24', '3200', '木材加工及竹、藤、棕、草制品业', '锯材、木片加工业、人造板制造业、木制品业、竹、藤、棕、草制品业。', '3');
INSERT INTO `industry_code` VALUES ('25', '3210', '家具制造业', '木制家具制造业、竹、藤家具制造业、金属家具制造业、塑料家具制造业及其他家具制造业。', '3');
INSERT INTO `industry_code` VALUES ('26', '3220', '造纸及纸制品业', '纸浆制造业、造纸业、纸制品业。', '3');
INSERT INTO `industry_code` VALUES ('27', '3230', '印刷业，记录媒介的复制', '包括纸张印刷、制版、装订，塑料、金属印刷及磁带、声像带及电影、电视胶片及唱片和唱盘的复制。不包括电影、电视片的摄制，空白磁带、磁盘等的生产。', '3');
INSERT INTO `industry_code` VALUES ('28', '3240', '文教体育用品制造业', '文化用品制造业、体育用品制造业、乐器及其他文娱用品制造业、玩具制造业、游艺器材制造业。', '3');
INSERT INTO `industry_code` VALUES ('29', '3250', '石油加工及炼焦业', '人造原油生产业、原油加工业、石油制品业、炼焦业。', '3');
INSERT INTO `industry_code` VALUES ('30', '3260', '化学原料及化学制品制造业', '基本化学原料制造业、化学肥料制造业、化学农药制造业、有机化学产品制造业、合成材料制造业、专用化学产品制造业、日用化学产品制造业。', '3');
INSERT INTO `industry_code` VALUES ('31', '3270', '医药制造业', '化学药品原药制造业、化学药品制剂制造业、中药材及中成药加工业、动物药品制造业。', '3');
INSERT INTO `industry_code` VALUES ('32', '3275', '生物制品业', '包括疫苗、菌苗、类毒素苗、抗毒素、血液制品、诊断用品等的生产。', '3');
INSERT INTO `industry_code` VALUES ('33', '3280', '化学纤维制造业', '纤维素纤维制造业、合成纤维制造业、渔具及渔具材料制造业。', '3');
INSERT INTO `industry_code` VALUES ('34', '3290', '橡胶制品业', '轮胎制造业、力车胎制造业、橡胶板、管、带制造业、橡胶零件制品业、再生橡胶制造业、橡胶靴鞋制造业、日用橡胶制品业、橡胶制品翻修业及其他橡胶制品业。', '3');
INSERT INTO `industry_code` VALUES ('35', '3300', '塑料制品业', '塑料薄膜制造业、塑料板、管、棒材制造业、塑料丝、绳及编织品制造业、泡沫塑料及人造革、合成革制造业、塑料包装箱及容器制造业、塑料鞋制造业、日用塑料杂品制造业、塑料零件制造业及其他塑料制品业。', '3');
INSERT INTO `industry_code` VALUES ('36', '3310', '非金属矿物制品业', '水泥制造业、水泥制品和石棉水泥制品业、砖瓦、石灰和轻质建筑材料制造业、玻璃及玻璃制品业、陶瓷制品业、耐火材料制品业。石墨及碳素制品业、矿物纤维及其制品业，', '3');
INSERT INTO `industry_code` VALUES ('37', '3320', '黑色金属冶炼及压延加工业', '炼铁业、炼钢业、钢压延加工业、铁合金冶炼业。', '3');
INSERT INTO `industry_code` VALUES ('38', '3330', '有色金属冶炼及压延加工业', '重有色金属冶炼业、轻有色金属冶炼业、贵金属冶炼业、稀有稀土金属冶炼业、有色金属合金业、有色金属压延加工业。', '3');
INSERT INTO `industry_code` VALUES ('39', '3340', '金属制品业', '金属结构制造业、铸铁管制造业、工具制造业、集装箱和金属包装物品制造业、金属丝绳及其制品业、建筑用金属制造业、金属表面处理及热处理业。', '3');
INSERT INTO `industry_code` VALUES ('40', '3348', '日用金属制品业', '搪瓷制造业、铝制品业、不锈钢制品业、刀剪制造业、制锁业、炊事用具制造业、燃气用具制造业、理发用具制造业。', '3');
INSERT INTO `industry_code` VALUES ('41', '3350', '普通机械制造业', '包括轴承、阀门制造业、其他通用零部件制造业、铸锻件制造业、普通机械修理业。', '3');
INSERT INTO `industry_code` VALUES ('42', '3351', '锅炉及原动机制造业', '锅炉制造业、内燃机制造业、汽轮机制造业、水轮机制造业、内燃机零部件及配件制造业。', '3');
INSERT INTO `industry_code` VALUES ('43', '3352', '金属加工机械制造业', '金属切削机床制造业、锻压设备制造业、铸造机械制造业、机床附件制造业。', '3');
INSERT INTO `industry_code` VALUES ('44', '3353', '通用设备制造业', '起重运输设备制造业、工矿车辆制造业、泵制造业、风机制造业、气体压缩机及气体分离设备制造业、冷冻设备制造业、风动工具制造业、电动工具制造业。', '3');
INSERT INTO `industry_code` VALUES ('45', '3361', '冶金、矿山、机电工业专用设备制造业', '矿山设备制造业、冶金工业专用设备制造业、电工专用设备制造业、电子工业专用设备制造业及其他机电工业专用设备制造业。', '3');
INSERT INTO `industry_code` VALUES ('46', '3362', '石化及其他工业专用设备制造业', '石油工业专用设备制造业、化学工业专用设备制造业、化学纤维工业专用设备制造业、橡胶工业专用设备制造业、塑料工业专用设备制造业、森林工业专用设备制造业、印刷工业专用设备制造业、制药工业专用设备制造业、建筑材料及其他非金属矿物制品专用设备制造业。', '3');
INSERT INTO `industry_code` VALUES ('47', '3363', '轻纺工业专用设备制造业', '食品、饮料、烟草工业专用设备制造业、粮油工业专用设备制造业、饲料工业专用设备制造业、包装工业专用设备制造业、纺织、服装、皮革工业专用设备制造业、照明器具工业专用设备制造业、日用硅酸制品工业专用设备制造业、制浆、造纸工业专用设备制造业、日用化学工业专用设备制造业。', '3');
INSERT INTO `industry_code` VALUES ('48', '3364', '农、林、牧、渔、水利业机械制造业', '拖拉机制造业、机械化农机具制造业、营林机械制造业、畜牧机械制造业、渔业机械制造业、水利机械制造业、拖拉机配件制造业。', '3');
INSERT INTO `industry_code` VALUES ('49', '3365', '医疗器械制造业', '手术器械制造业、医疗仪器、设备制造业、诊断用品制造业、医用材料及医疗用品制造业、假肢、矫形器制造业。', '3');
INSERT INTO `industry_code` VALUES ('50', '3367', '其他专用设备制造业', '建筑机械制造业、地质专用设备制造业、畜牧兽医医疗器械制造业、缝纫机制造业、商业、饮食业、服务业专用机械制造业、邮政机械及器材制造业、环境保护机械制造业、社会公共安全设备及器材制造业。', '3');
INSERT INTO `industry_code` VALUES ('51', '3368', '专用机械设备修理业', '工业专用设备修理业、农、林、牧、渔、水利机械修理业、医疗器械修理业。', '3');
INSERT INTO `industry_code` VALUES ('52', '3371', '铁路运输设备制造业', '机车制造业、客车制造业、货车制造业、机车车辆配件制造业、铁路信号设备制造业、铁路专用设备制造业、铁路专用器材制造业。', '3');
INSERT INTO `industry_code` VALUES ('53', '3372', '汽车制造业', '载重汽车制造业、客车制造业、小轿车制造业、微型汽车制造业、特种车辆及改装汽车制造业、汽车车身制造业、汽车零部件及配件制造业。', '3');
INSERT INTO `industry_code` VALUES ('54', '3373', '摩托车制造业', '摩托车整车制造业、摩托车零部件及配件制造业。', '3');
INSERT INTO `industry_code` VALUES ('55', '3374', '自行车制造业', null, '3');
INSERT INTO `industry_code` VALUES ('56', '3375', '电车制造业', null, '3');
INSERT INTO `industry_code` VALUES ('57', '3376', '船舶制造业', '海洋运输船制造业、内河船制造业、渔轮制造业、船舶机械设备制造业、海洋石油平台制造业。', '3');
INSERT INTO `industry_code` VALUES ('58', '3377', '航空航天器制造业', null, '3');
INSERT INTO `industry_code` VALUES ('59', '3378', '交通运输设备修理业', '铁路运输设备修理业、汽车修理业、摩托车修理业、电车修理业、船舶修理业、飞机修理业。', '3');
INSERT INTO `industry_code` VALUES ('60', '3379', '其他交通运输设备制造业', '航标器材制造业、潜水装备制造业、公路标志制造业。', '3');
INSERT INTO `industry_code` VALUES ('61', '3390', '武器弹药制造业', null, '3');
INSERT INTO `industry_code` VALUES ('62', '3400', '电气机械及器材制造业', '电机制造业、输配电及控制设备制造业、电工器材制造业、日用电器制造业、照明器具制造业、电气机械修理业及其他电气机械制造业。', '3');
INSERT INTO `industry_code` VALUES ('63', '3410', '电子及通信设备制造业', '包括雷达制造业、广播电视设备制造业、电子器件制造业、电子元件制造业、电子设备及通信设备修理业。', '3');
INSERT INTO `industry_code` VALUES ('64', '3411', '通信设备制造业', '传输设备制造业、交换设备制造业、通信终端设备制造业及其他通信制备制造业。', '3');
INSERT INTO `industry_code` VALUES ('65', '3414', '电子计算机制造业', '电子计算机整机制造业、电子计算机外部设备制造业。', '3');
INSERT INTO `industry_code` VALUES ('66', '3417', '日用电子器具制造业', '电视机、录像机、摄像机制造业、收音机、录音机制造业、电子计算器制造业。', '3');
INSERT INTO `industry_code` VALUES ('67', '3420', '仪器仪表及文化、办公用机械制造业', '通用仪器仪表制造业、专用仪器仪表制造业、电子测量仪器制造业、计量器具制造业、文化、办公用机械制造业、钟表制造业、仪器仪表及、办公用机械修理业。', '3');
INSERT INTO `industry_code` VALUES ('68', '3430', '其他制造业', '工艺美术品制造业、日用杂品制造业、其他生产、生活用品制造业。', '3');
INSERT INTO `industry_code` VALUES ('69', '4', '电力、煤气及水的生产和供应业', null, null);
INSERT INTO `industry_code` VALUES ('70', '4440', '电力、蒸汽、热水的生产和供应业', '电力生产业、电力供应业、蒸汽、热水生产和供应业。', '4');
INSERT INTO `industry_code` VALUES ('71', '4450', '煤气生产和供应业', '煤气生产业、煤气供应业。', '4');
INSERT INTO `industry_code` VALUES ('72', '4460', '自来水的生产和供应业', '自来水生产业、自来水供应业。', '4');
INSERT INTO `industry_code` VALUES ('73', '5', '建筑业', '  ', null);
INSERT INTO `industry_code` VALUES ('74', '5470', '土木工程建筑业', '房屋建筑业、矿山建筑业、铁路、公路、遂道、桥梁建筑业、堤坝、电站 、码头建筑业及其他土木工程建筑业。', '5');
INSERT INTO `industry_code` VALUES ('75', '5480', '线路、管道和设备安装业', '包括专门从事电力、通信线路、石油、燃气、给水、排水、供热等管道系统和各类机械设备、装置的安装活动。', '5');
INSERT INTO `industry_code` VALUES ('76', '5490', '装修装饰业', '包括从事对建筑物的内、外装修和装饰的施工和安装活动，车、船、飞机等的装饰、装璜活动也包括在内。', '5');
INSERT INTO `industry_code` VALUES ('77', '6', '地质勘查业、水利管理业', '  ', null);
INSERT INTO `industry_code` VALUES ('78', '6500', '地质勘查业', '区域地质勘查业、海洋地质勘查业、矿产地质勘查业、工程地质勘查业、环境地质勘查业、地球物理和地球化学勘查业、地质工程技术及其他技术服务业。', '6');
INSERT INTO `industry_code` VALUES ('79', '6510', '水利管理业', '包括从事灌溉、水库、堤坝、闸涵、江河治理、防洪除涝等水利设施和水利工程的勘查、管理活动以及水土保持活动等。', '6');
INSERT INTO `industry_code` VALUES ('80', '7', '交通运输、仓储及邮电通信业', null, null);
INSERT INTO `industry_code` VALUES ('81', '7520', '铁路运输业', '包括铁路货运、客运活动。', '7');
INSERT INTO `industry_code` VALUES ('82', '7530', '公路运输业', '包括通过汽车、兽力车、人力车等运输工具进行的公路客货运输活动。', '7');
INSERT INTO `industry_code` VALUES ('83', '7540', '管道运输业', '包括通过管道进行的气体、液体、浆体等运输活动，也包括泵站的运行和管道的维护。', '7');
INSERT INTO `industry_code` VALUES ('84', '7550', '水上运输业', '远洋运输业、沿海运输业、内河、内湖运输业及其他水上运输业。', '7');
INSERT INTO `industry_code` VALUES ('85', '7560', '航空运输业', '航空客货运输业、通用航空业。', '7');
INSERT INTO `industry_code` VALUES ('86', '7570', '交通运输辅助业', '包括公路管理及养护业、港口业、水运辅助业、机场及航空运输辅助业、装卸搬运业。', '7');
INSERT INTO `industry_code` VALUES ('87', '7580', '其他交通运输业', '包括索道等运输活动。', '7');
INSERT INTO `industry_code` VALUES ('88', '7590', '仓储业', '包括专门从事为货物储存和中转运输业务等提供服务的活动。', '7');
INSERT INTO `industry_code` VALUES ('89', '7600', '邮电通信业', '邮政业、电信业、邮电业。', '7');
INSERT INTO `industry_code` VALUES ('90', '8', '批发和零售贸易、餐饮业', null, null);
INSERT INTO `industry_code` VALUES ('91', '8610', '食品、饮料、烟草和家庭日用品批发业', '食品、饮料、烟草批发业、棉麻、土畜产品批发业、纺织品、服装和鞋帽批发业、日用百货批发业、日用杂品批发业、五金、交电、化工批发业、药品及医疗器械批发业。', '8');
INSERT INTO `industry_code` VALUES ('92', '8620', '能源、材料和机械电子设备批发业', '能源批发业、化工材料批发业、木材批发业、建筑材料批发业、矿产品批发业、金属材料批发业、机械、电子设备批发业、汽车、摩 托车及零配件批发业、再生物资回收批发业。', '8');
INSERT INTO `industry_code` VALUES ('93', '8630', '其他批发业', '包括工艺美术品批发业、图书报刊批发业、农业生产资料批发业。', '8');
INSERT INTO `industry_code` VALUES ('94', '8640', '零售业', '食品、饮料和烟草零售业、日用百货零售业、纺织品、服装和鞋帽零售业、日用杂品零售业、五金、交电、化工零售业、药品及医疗器械零售业、图书报刊零售业及其他零售业。', '8');
INSERT INTO `industry_code` VALUES ('95', '8650', '商业经纪与代理业', '包括代办商、商品经纪商 、拍卖商以及所有为别人服务的批发商。', '8');
INSERT INTO `industry_code` VALUES ('96', '8670', '餐饮业', '包括专门从事饭馆、菜馆、饭铺、冷饮馆、酒馆、馆等的行业，也包括其他部门所属的对外营业的食堂。', '8');
INSERT INTO `industry_code` VALUES ('97', '9', '金融、保险业', null, null);
INSERT INTO `industry_code` VALUES ('98', '9680', '金融业', '中央银行、商业银行、其他银行、信用合作社、信托投资业、证券经纪与交易业及其他非银行金融业。', '9');
INSERT INTO `industry_code` VALUES ('99', '9700', '保险业', '包括各类保险公司的保险活动，不包括社会福利保险活动。', '9');
INSERT INTO `industry_code` VALUES ('100', '10', '房地产业', null, null);
INSERT INTO `industry_code` VALUES ('101', '10720', '房地产开发与经营业', '包括各类房地产经营、房地产交易、房地产租赁等活动。', '10');
INSERT INTO `industry_code` VALUES ('102', '10730', '房地产管理业', '包括对住宅发展管理，土地批租经营管理和其他房屋的管理活动等。也包括兼营房屋零星维修的各类房管所(站)、物业管理单位的活动。不包括房管部门所属独立核算的维修公司(队)的活动。', '10');
INSERT INTO `industry_code` VALUES ('103', '10740', '房地产经纪与代理业', '包括房地产经纪与代理中介活动，如房地产交易所、房地产估价所等。', '10');
INSERT INTO `industry_code` VALUES ('104', '11', '社会服务业', null, null);
INSERT INTO `industry_code` VALUES ('105', '11750', '公共设施服务业', '市内公共交通业、园林绿化业、自然保护区管理业、环境卫生业、市政工程管理业、风景名胜区管理业及其他公共服务业。', '11');
INSERT INTO `industry_code` VALUES ('106', '11760', '居民服务业', '包括理发及美容化妆业、沐浴业、洗染业、摄影及扩印业、托儿所、日用品修理业、家务服务业、殡葬业及其他居民服务业。', '11');
INSERT INTO `industry_code` VALUES ('107', '11780', '旅馆业', '包括宾馆、旅馆及招待所、大车店等。', '11');
INSERT INTO `industry_code` VALUES ('108', '11790', '租赁服务业', '包括提供机械电子设备、交通工具、办公用品、家庭生活用品、文化体育用品等租赁活动。', '11');
INSERT INTO `industry_code` VALUES ('109', '11800', '旅游业', '包括经营旅游业务的各类旅行社和旅游公司等的活动。不包括接待旅游活动的饭店、公园等的活动。', '11');
INSERT INTO `industry_code` VALUES ('110', '11810', '娱乐服务业', '包括卡拉OK歌舞厅、电子游戏厅(室)、游乐园(场)、夜总会等活动。', '11');
INSERT INTO `industry_code` VALUES ('111', '11820', '信息、咨询服务业', '包括广告业、咨询服务业。', '11');
INSERT INTO `industry_code` VALUES ('112', '11830', '计算机应用服务业', '软件开发咨询业、数据处理业、数据库服务业、计算机设备维护咨询业。', '11');
INSERT INTO `industry_code` VALUES ('113', '11840', '其他社会服务业', '包括市场管理服务活动、保安活动等。', '11');
INSERT INTO `industry_code` VALUES ('114', '12', '卫生、体育和社会福利业', null, null);
INSERT INTO `industry_code` VALUES ('115', '12850', '卫生', '包括医院、疗养院、专科防治所(站)、卫生防疫站、妇幼保健所(站)、药品检验所(室)及其他卫生事业。', '12');
INSERT INTO `industry_code` VALUES ('116', '12860', '体育', '包括组织和举办的各种室内、外体育活动以及对进行这些活动的场所和设施的管理。', '12');
INSERT INTO `industry_code` VALUES ('117', '12870', '社会福利保障业', '包括社会福利业、社会保险救济业及其他的社会福利保障业。', '12');
INSERT INTO `industry_code` VALUES ('118', '13', '教育、文化艺术及广播电影电视业', null, null);
INSERT INTO `industry_code` VALUES ('119', '13890', '教育', '包括高等教育、中等教育、初等教育、学前教育、特殊教育及其他教育。', '13');
INSERT INTO `industry_code` VALUES ('120', '13900', '文化艺术业', '包括艺术、出版、文物保护、图书馆、档案馆、群众文化、新闻、文化艺术经纪与代理业及其他文化艺术事业。', '13');
INSERT INTO `industry_code` VALUES ('121', '13910', '广播电影电视业', null, '13');
INSERT INTO `industry_code` VALUES ('122', '14', '科学研究和综合技术服务业', null, null);
INSERT INTO `industry_code` VALUES ('123', '14920', '科学研究业', '包括自然科学、社会科学及其他科学的研究活动。', '14');
INSERT INTO `industry_code` VALUES ('124', '14931', '气象', '包括气象观测、预报和服务活动。', '14');
INSERT INTO `industry_code` VALUES ('125', '14932', '地震', '包括地震观测预报活动。', '14');
INSERT INTO `industry_code` VALUES ('126', '14933', '测绘', '包括从事各类测绘业务活动(如大地测量、地形测量、摄影测量与遥感、工程测量、海洋测量地籍测绘、地图制图与印刷等)。　', '14');
INSERT INTO `industry_code` VALUES ('127', '14934', '技术监督', '包括技术监测、检定、质量监督、标准制定以及计量活动等。', '14');
INSERT INTO `industry_code` VALUES ('128', '14935', '海洋环境', '包括海洋调查、监测等活动。', '14');
INSERT INTO `industry_code` VALUES ('129', '14936', '环境保护', '包括环境保护、监测等活动。', '14');
INSERT INTO `industry_code` VALUES ('130', '14937', '技术推广和科技交流服务业', null, '14');
INSERT INTO `industry_code` VALUES ('131', '14938', '工程设计业', '包括各行业的工程设计活动。', '14');
INSERT INTO `industry_code` VALUES ('132', '14939', '其他综合技术服务业', '包括专利审批活动、产品设计等活动。', '14');
INSERT INTO `industry_code` VALUES ('133', '15', '国家机关、政党机关和社会团体', null, null);
INSERT INTO `industry_code` VALUES ('134', '15940', '国家机关', '包括各级国家权力机关和各级行政机关，也包括人民解放军、武警部队。', '15');
INSERT INTO `industry_code` VALUES ('135', '15950', '政党机关', '包括中国共产党各级机关和所属办事机构、各民主党派各级机关办事机构和各级政治协商会议。', '15');
INSERT INTO `industry_code` VALUES ('136', '15960', '社会团体', '包括各级工会、共青团、妇联、文联、残联、工商联及各类协会，中国红十字会、中国福利会、中国保护儿童委员会，各类学术团体和宗教团体等。', '15');
INSERT INTO `industry_code` VALUES ('137', '15970', '基层群众自治组织', '包括居民委员会、村民委员会。', '15');
INSERT INTO `industry_code` VALUES ('138', '16', '其他行业', null, null);
INSERT INTO `industry_code` VALUES ('139', '16990', '其他行业', '企业管理机构及其他类未包括的行业。', '16');
