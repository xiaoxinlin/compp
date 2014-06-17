/*
Navicat MySQL Data Transfer

Source Server         : mysqlphp
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : compp

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2014-06-15 17:46:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `comment`
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gid` int(11) NOT NULL,
  `context` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `g-id` (`gid`),
  CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`gid`) REFERENCES `good` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comment
-- ----------------------------

-- ----------------------------
-- Table structure for `good`
-- ----------------------------
DROP TABLE IF EXISTS `good`;
CREATE TABLE `good` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(24) NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of good
-- ----------------------------
INSERT INTO `good` VALUES ('1', '绿色花盆', '12', '适于客厅装饰的花盆——花盆（英文名：flower pot），种花用的一种器皿，\r\n花卉生产者或养花人士可以根据花卉的特性和需要以及花盆的特点选用花盆。', 'drawing', 'images/drawing/dr1.jpg');
INSERT INTO `good` VALUES ('2', '水果盘', '12', '适于客厅存放水果', 'drawing ', 'images/drawing/dr2.jpg');
INSERT INTO `good` VALUES ('3', '大象', '15', '适于摆设在客厅，perfect', 'drawing', 'images/drawing/dr3.jpg');
INSERT INTO `good` VALUES ('4', '花盆', '15', '适于摆设在客厅，有助于提高客厅的空气质量', 'drawing ', '  images/drawing/dr4.jpg');
INSERT INTO `good` VALUES ('5', '玩偶猪猪侠', '15', '适于放在客厅的电视旁边，有助于提高客厅的美感', 'drawing ', ' images/drawing/dr5f.jpg');
INSERT INTO `good` VALUES ('6', '玻璃花盆', '12', '适于摆设在客厅，有新鲜的花可以置入其中，增加客厅的美感', 'drawing ', ' images/drawing/dr16.jpg');
INSERT INTO `good` VALUES ('7', '猪猪F4', '12', '猪猪F4是最新流行的摆设小玩具，小巧可爱', 'drawing', ' images/drawing/dr14.jpg');
INSERT INTO `good` VALUES ('8', '红椅', '12', '适于摆设在客厅供客人使用，舒服.,..', 'drawing', ' images/drawing/dr72.jpg');
INSERT INTO `good` VALUES ('9', '台灯', '12', '适于摆设在客厅，增加光线...', 'drawing', ' images/drawing/dr73.jpg');
INSERT INTO `good` VALUES ('10', '座垫', '12', '适于放在客厅的椅子上', 'drawing', ' images/drawing/dr84.jpg');
INSERT INTO `good` VALUES ('11', '风火轮风扇', '12', '适于摆设在客厅，吹得凉快', 'drawing', ' images/drawing/dr89.jpg');
INSERT INTO `good` VALUES ('12', '挂钩', '12', '适于摆设在客厅，可以挂东西', 'drawing ', ' images/drawing/dr87.jpg');
INSERT INTO `good` VALUES ('13', '熊猫台灯', '12', '适于客厅，增加光线', 'drawing', ' images/drawing/dr102.jpg');
INSERT INTO `good` VALUES ('14', '水杯', '12', '适于摆设在客厅', 'drawing', ' images/drawing/dr103.jpg');
INSERT INTO `good` VALUES ('15', '大花盆', '12', '适于摆设更多的花朵', 'drawing ', ' images/drawing/dr114.jpg');
INSERT INTO `good` VALUES ('16', '熊灯', '12', '适于熊孩子用的台灯', 'drawing', ' images/drawing/dr112.jpg');
INSERT INTO `good` VALUES ('17', '熊挂钩', '12', '适用于熊孩子挂东西', 'drawing ', 'images/drawing/dr115.jpg');
INSERT INTO `good` VALUES ('18', '熊杯子', '14', '适于熊孩子喝的水', 'drawing', ' images/drawing/dr118.jpg');
INSERT INTO `good` VALUES ('19', '存钱罐', '12', '适于存钱，有多少就存多少', 'drawing', 'images/drawing/dr112.jpg');
INSERT INTO `good` VALUES ('20', '万能存钱罐', '12', '越存越多', 'drawing', ' images/drawing/dr124.jpg');
INSERT INTO `good` VALUES ('21', '壁画', '12', '适于贴于房间', 'bedroom', ' images/bedroom/b1.jpg');
INSERT INTO `good` VALUES ('22', '蘑菇灯', '12', '房间灯', 'bedroom', '  images/bedroom/b2.jpg');
INSERT INTO `good` VALUES ('23', '奔腾马', '12', '吉祥物，意义为一马当先', 'bedroom', '  images/bedroom/b3.jpg');
INSERT INTO `good` VALUES ('24', 'F4', '12', 'F4小帅帅', 'bedroom', '  images/bedroom/b4.jpg');
INSERT INTO `good` VALUES ('25', '幸福小夫妻', '12', '吉祥物', 'bedroom', '  images/bedroom/b5.jpg');
INSERT INTO `good` VALUES ('26', '花灯', '12', '隐形小花灯', 'bedroom', '  images/bedroom/b6.jpg');
INSERT INTO `good` VALUES ('27', '兔兔侠', '12', '小兔子白又白，两只耳朵竖起来', 'bedroom', '  images/bedroom/b8.jpg');
INSERT INTO `good` VALUES ('28', '大象侠', '12', '大笨象会跳舞，马楼仔会上树，狐狸会打跟斗', 'bedroom', '  images/bedroom/b9.jpg');
INSERT INTO `good` VALUES ('29', '幸福4口人', '12', '幸福幸福一家人', 'bedroom', '  images/bedroom/b10.jpg');
INSERT INTO `good` VALUES ('30', '陶艺', '12', '我是一个陶艺哥，不是一个传说', 'bedroom', ' images/bedroom/b11.jpg');
INSERT INTO `good` VALUES ('31', '夜灯侠', '12', '照亮迷失方向的小伙伴们', 'bedroom', '  images/bedroom/b13.jpg');
INSERT INTO `good` VALUES ('32', '闹钟', '12', '就是要把你吵醒，就是要把你吵醒', 'bedroom', '  images/bedroom/b20.jpg');
INSERT INTO `good` VALUES ('33', '玻珠', '12', '小小玻珠，回味童年吧', 'bedroom', '  images/bedroom/b16.jpg ');
INSERT INTO `good` VALUES ('34', '蜡烛柱', '12', '放蜡烛，放蜡烛，我是卖蜡烛的小柱子', 'bedroom', '  images/bedroom/b22.jpg');
INSERT INTO `good` VALUES ('35', '臭臭虫', '12', '臭臭臭臭', 'bedroom', '  images/bedroom/b23.jpg');
INSERT INTO `good` VALUES ('36', '黄花菜', '12', '失去它生命就会枯萎', 'bedroom', '  images/bedroom/b26.jpg');
INSERT INTO `good` VALUES ('37', '肥皂框', '12', '不是捡肥皂，是肥皂相的框框', 'bedroom', '  images/bedroom/b30.jpg');
INSERT INTO `good` VALUES ('38', '花盆灯', '12', '夜晚很漂亮哦', 'bedroom', ' images/bedroom/b33.jpg');
INSERT INTO `good` VALUES ('39', '米老鼠枕头', '12', '枕枕更舒服', 'bedroom', '  images/bedroom/b38.jpg');
INSERT INTO `good` VALUES ('40', '垃圾桶', '12', '房间是我家，清洁靠大家', 'bedroom', '  images/bedroom/b41.jpg');
INSERT INTO `good` VALUES ('41', '小袋鼠', '12', '袋鼠哥，是传说', 'children', '  images/children/c1.jpg');
INSERT INTO `good` VALUES ('42', '猫灯', '12', '哈哈哈哈哈哈哈哈哈好漂亮哦', 'children', '   images/children/c2.jpg');
INSERT INTO `good` VALUES ('43', '铜罗汉', '12', '我是18铜罗汉之一哦', 'children', '   images/children/c5.jpg');
INSERT INTO `good` VALUES ('44', '肥猪', '12', '你们觉得我肥，只是因为你们嫉妒我吃得比你们好', 'children ', '   images/children/c6.jpg');
INSERT INTO `good` VALUES ('45', '双马', '12', '我不孤独，你也不孤独，好马不吃回头草', ' children ', '   images/children/c7.jpg');
INSERT INTO `good` VALUES ('46', '天使', '12', '我是一个天使', 'children', '   images/children/c8.jpg');
INSERT INTO `good` VALUES ('47', '卖萌小猪', '12', '卖萌小猪猪', 'children', '   images/children/c9.jpg');
INSERT INTO `good` VALUES ('48', '三羊开泰', '12', '我是三羊', 'children', '   images/children/c16.jpg');
INSERT INTO `good` VALUES ('49', '鱼目混珠', '12', '哈哈哈哈哈哈哈哈哈哈小鱼儿爱上花无缺', 'children', '   images/children/c20.jpg');
INSERT INTO `good` VALUES ('50', '复古挂钩', '12', '复古的才是精华', 'children', '   images/children/c33.jpg');
INSERT INTO `good` VALUES ('51', '垃圾桶', '12', '来吧垃圾，垃圾来吧', 'children', '   images/children/c37.jpg');
INSERT INTO `good` VALUES ('52', '挂钩沟', '12', '拉住你是我的工作', 'children', '   images/children/c40.jpg');
INSERT INTO `good` VALUES ('53', '时间斗', '12', '时间如水，生命如歌', 'children', '   images/children/c45.jpg48');
INSERT INTO `good` VALUES ('54', '绿色时间斗', '12', '别管我是不是绿色，你消耗的时间就是你的生命', ' children', '   images/children/c.jpg');
INSERT INTO `good` VALUES ('55', '毛巾挂钩', '12', '挂住你', 'children ', '   images/children/57.jpg');
INSERT INTO `good` VALUES ('56', '垃圾桶', '12', '哎哎哎哎哎哎哎垃圾', 'children', '   images/children/58.jpg');
INSERT INTO `good` VALUES ('57', '水壶', '12', '水是生命之源，失去她生命就会枯萎', 'children', '   images/children/c52.jpg');
INSERT INTO `good` VALUES ('58', '红挂钩', '12', '钩住你', 'children', '   images/children/c56.jpg');
INSERT INTO `good` VALUES ('59', '笑哈哈', '12', '笑一笑生活更美妙', 'children', '   images/children/c25.jpg');
INSERT INTO `good` VALUES ('60', '粑粑', '12', '我是粑粑侠', 'children', '   images/children/c21.jpg');
INSERT INTO `good` VALUES ('61', '酒架', '12', '好朋友，干一杯', 'dining', '  images/dining/di1.jpg');
INSERT INTO `good` VALUES ('62', '酱油碟', '12', '有多少放多少', 'dining', '   images/dining/di2.jpg');
INSERT INTO `good` VALUES ('63', '刀架', '12', '方便的刀架', 'dining ', '   images/dining/di3.jpg');
INSERT INTO `good` VALUES ('64', '多款酒架', '12', '越多越好', ' dining', '   images/dining/di4.jpg');
INSERT INTO `good` VALUES ('65', '彩虹酱油碟', '12', '生活多姿多彩', 'dining', '   images/dining/di5.jpg');
INSERT INTO `good` VALUES ('66', '勺子', '12', '大勺子，才吃得多', 'dining', '   images/dining/di6.jpg');
INSERT INTO `good` VALUES ('67', '碗', '12', '化斋呗，大师兄', ' dining', '   images/dining/di7.jpg');
INSERT INTO `good` VALUES ('68', '刀架1', '12', '放刀的', 'dining', '   images/dining/di13.jpg');
INSERT INTO `good` VALUES ('69', '水果篮', '12', '吃水果', 'dining', '  images/dining/di1.jpg');
INSERT INTO `good` VALUES ('70', '刀2', '12', '111', 'dining', '   images/dining/di13.jpg');
INSERT INTO `good` VALUES ('71', '刀2', '12', '好刀啊', 'dining', '   images/dining/di13.jpg');
INSERT INTO `good` VALUES ('72', '刀2', '13', '放刀的', 'dining', '   images/dining/di13.jpg');
INSERT INTO `good` VALUES ('73', '刀2', '12', '放刀的', 'dining', '   images/dining/di13.jpg');
INSERT INTO `good` VALUES ('74', '刀2', '12', '放刀的', 'dining', '   images/dining/di13.jpg');
INSERT INTO `good` VALUES ('75', '刀2', '13', '放刀的', 'dining', '   images/dining/di13.jpg');
INSERT INTO `good` VALUES ('76', '刀2', '13', '放刀的', 'dining', '   images/dining/di13.jpg');
INSERT INTO `good` VALUES ('77', '刀2', '13', '放刀的', 'dining', '   images/dining/di13.jpg');
INSERT INTO `good` VALUES ('78', '刀2', '13', '放刀的', 'dining', '   images/dining/di13.jpg');
INSERT INTO `good` VALUES ('79', '刀2', '13', '放刀的', 'dining', '   images/dining/di13.jpg');
INSERT INTO `good` VALUES ('80', '刀2', '13', '放刀的', 'dining', '   images/dining/di13.jpg');
INSERT INTO `good` VALUES ('81', '兔', '13', '玩具', 'outdoors', '   images/outdoors/o1.jpg');
INSERT INTO `good` VALUES ('82', '红绿灯', '15', '红灯停，绿灯行', 'outdoorsman', '   images/outdoors/o1.jpg');
INSERT INTO `good` VALUES ('83', '花盆', '15', '美丽的花朵', 'outdoors', '    images/outdoors/o5.jpg');
INSERT INTO `good` VALUES ('84', '小老鼠', '14', '属鼠的', 'outdoors', '    images/outdoors/o12.jpg');
INSERT INTO `good` VALUES ('85', '圣诞小人', '14', '圣诞小小人', 'outdoors', '    images/outdoors/o15.jpg');
INSERT INTO `good` VALUES ('86', '天使', '12', '美丽的天使', 'outdoors', '    images/outdoors/o19.jpg');
INSERT INTO `good` VALUES ('87', '马', '12', '千里马常有，而伯乐不常有', 'outdoors', '    images/outdoors/o32.jpg');
INSERT INTO `good` VALUES ('88', '自由男神像', '13', '我有一个梦想', 'outdoors', '    images/outdoors/o34.jpg');
INSERT INTO `good` VALUES ('89', '挑水工', '13', '我是一个挑水工', ' outdoors ', '    images/outdoors/o35.jpg');
INSERT INTO `good` VALUES ('90', '长颈鹿', '12', '脖子长，植物人', 'outdoors ', '    images/outdoors/o36.jpg');
INSERT INTO `good` VALUES ('91', '长颈鹿', '13', '脖子长，植物人', 'outdoors ', '    images/outdoors/o36.jpg');
INSERT INTO `good` VALUES ('92', '长颈鹿', '13', '脖子长，植物人', 'outdoors ', '    images/outdoors/o36.jpg');
INSERT INTO `good` VALUES ('93', '长颈鹿', '13', '脖子长，植物人', 'outdoors ', '    images/outdoors/o36.jpg');
INSERT INTO `good` VALUES ('94', '长颈鹿', '13', '脖子长，植物人', 'outdoors ', '    images/outdoors/o36.jpg');
INSERT INTO `good` VALUES ('95', '长颈鹿', '13', '脖子长，植物人', 'outdoors ', '    images/outdoors/o36.jpg');
INSERT INTO `good` VALUES ('96', '长颈鹿', '13', '脖子长，植物人', 'outdoors', '    images/outdoors/o36.jpg');
INSERT INTO `good` VALUES ('97', '长颈鹿', '13', '脖子长，植物人', 'outdoors', '    images/outdoors/o36.jpg');
INSERT INTO `good` VALUES ('98', '长颈鹿', '13', '脖子长，植物人', 'outdoors', '    images/outdoors/o36.jpg');
INSERT INTO `good` VALUES ('99', '长颈鹿', '13', '脖子长，植物人', 'schoolroom ', '    images/outdoors/o36.jpg');
INSERT INTO `good` VALUES ('100', '长颈鹿', '13', '脖子长，植物人', 'outdoors', '    images/outdoors/o36.jpg');
INSERT INTO `good` VALUES ('101', '帆船', '12', '学如逆水行舟，不进则退', 'schoolroom', '    images/schoolroom/s1.jpg');
INSERT INTO `good` VALUES ('102', '加他模型', '12', '我会弹吉他哦，好好厉害的哦', 'schoolroom ', '     images/schoolroom/s2.jpg');
INSERT INTO `good` VALUES ('103', '小提琴', '13', '小提琴，大智慧', 'schoolroom ', '    images/schoolroom/s5.jpg');
INSERT INTO `good` VALUES ('104', '笔筒', '12', '笔筒', 'schoolroom ', '     images/schoolroom/s6.jpg');
INSERT INTO `good` VALUES ('105', '笔筒手', '12', '下笔如有神', 'schoolroom ', '     images/schoolroom/s7.jpg');
INSERT INTO `good` VALUES ('106', '简约笔筒', '14', '简约笔筒，简单生活', 'schoolroom ', '     images/schoolroom/s11.jpg');
INSERT INTO `good` VALUES ('107', '仙人掌', '12', '绿色植物，健康生活', 'schoolroom ', '     images/schoolroom/s13.jpg');
INSERT INTO `good` VALUES ('108', '刺猬笔筒', '12', '你是猴子请来的逗比吗', 'schoolroom ', '     images/schoolroom/s14.jpg');
INSERT INTO `good` VALUES ('109', ' 青蛙笔筒', '12', '呱呱呱呱呱', 'schoolroom ', '     images/schoolroom/s16.jpg');
INSERT INTO `good` VALUES ('110', ' 相框', '12', '放照片的', ' schoolroom ', '     images/schoolroom/s20.jpg');
INSERT INTO `good` VALUES ('111', '时间斗', '12', '时间不等人，人赢不了时间', ' schoolroom', '     images/schoolroom/s22.jpg');
INSERT INTO `good` VALUES ('112', '埃菲尔铁塔', '12', ' 漂亮', ' schoolroom', '     images/schoolroom/s23.jpg');
INSERT INTO `good` VALUES ('113', '垃圾桶', '13', ' 宿舍时我家，生活靠大家', ' schoolroom', '     images/schoolroom/s50.jpg');
INSERT INTO `good` VALUES ('114', '笔筒', '12', '笔咧，笔咧', ' schoolroom', '     images/schoolroom/s8.jpg');
INSERT INTO `good` VALUES ('115', '海豚', '12', '海豚音', ' schoolroom', '     images/schoolroom/s25.jpg');
INSERT INTO `good` VALUES ('116', '书皮', '12', '保护书是我的责任', ' schoolroom', '     images/schoolroom/s21.jpg');
INSERT INTO `good` VALUES ('117', '花盆', '12', '我是一个小小的花盆', ' schoolroom', '     images/schoolroom/s18.jpg');
INSERT INTO `good` VALUES ('118', '小型书架', '12', '小书架，大智慧', ' schoolroom', '     images/schoolroom/s4.jpg');
INSERT INTO `good` VALUES ('119', '熊笔筒', '12', '吃货一个', ' schoolroom', '     images/schoolroom/s9.jpg');
INSERT INTO `good` VALUES ('120', '漂亮笔筒', '12', ' 美丽的笔筒', ' schoolroom', '     images/schoolroom/s10.jpg');

-- ----------------------------
-- Table structure for `order`
-- ----------------------------
DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `goods` varchar(255) NOT NULL,
  `totalprice` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `u-id` (`uid`),
  CONSTRAINT `order_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of order
-- ----------------------------

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(12) NOT NULL,
  `nickname` varchar(12) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(64) NOT NULL,
  `authority` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1125 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1120', '江彩霞', '呼呼', '123', '822055377@qq.com', 'admin');
INSERT INTO `user` VALUES ('1121', '林晓鑫', '小新', '123', '822055377@qq.com', 'admin');
INSERT INTO `user` VALUES ('1122', '廖坤城', '小城', '123', '822055377@qq.com', 'customer');
INSERT INTO `user` VALUES ('1123', '何业文', '荷叶', '123', '822055377@qq.com', 'customer');
INSERT INTO `user` VALUES ('1124', '刘志锋', '小锋锋', '123', '822055377@qq.com', 'customer');
