/*
Navicat MySQL Data Transfer

Source Server         : admin
Source Server Version : 50162
Source Host           : localhost:3306
Source Database       : cccccc

Target Server Type    : MYSQL
Target Server Version : 50162
File Encoding         : 65001

Date: 2015-05-14 14:01:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for cc_city
-- ----------------------------
DROP TABLE IF EXISTS `cc_city`;
CREATE TABLE `cc_city` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cityname` varchar(20) DEFAULT NULL,
  `citycode` varchar(8) DEFAULT NULL,
  `provinceid` int(11) DEFAULT NULL,
  `provincecode` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cc_city
-- ----------------------------
INSERT INTO `cc_city` VALUES ('1', '东城区', '110101', '4', '110000');
INSERT INTO `cc_city` VALUES ('2', '西城区', '110102', '4', '110000');
INSERT INTO `cc_city` VALUES ('3', '朝阳区', '110105', '4', '110000');
INSERT INTO `cc_city` VALUES ('4', '丰台区', '110106', '4', '110000');
INSERT INTO `cc_city` VALUES ('5', '石景山区', '110107', '4', '110000');
INSERT INTO `cc_city` VALUES ('6', '海淀区', '110108', '4', '110000');
INSERT INTO `cc_city` VALUES ('7', '门头沟区', '110109', '4', '110000');
INSERT INTO `cc_city` VALUES ('8', '房山区', '110111', '4', '110000');
INSERT INTO `cc_city` VALUES ('9', '通州区', '110112', '4', '110000');
INSERT INTO `cc_city` VALUES ('10', '顺义区', '110113', '4', '110000');
INSERT INTO `cc_city` VALUES ('11', '昌平区', '110114', '4', '110000');
INSERT INTO `cc_city` VALUES ('12', '大兴区', '110115', '4', '110000');
INSERT INTO `cc_city` VALUES ('13', '怀柔区', '110116', '4', '110000');
INSERT INTO `cc_city` VALUES ('14', '平谷区', '110117', '4', '110000');
INSERT INTO `cc_city` VALUES ('15', '密云县', '110228', '4', '110000');
INSERT INTO `cc_city` VALUES ('16', '延庆县', '110229', '4', '110000');
INSERT INTO `cc_city` VALUES ('17', '和平区', '120101', '5', '120000');
INSERT INTO `cc_city` VALUES ('18', '河东区', '120102', '5', '120000');
INSERT INTO `cc_city` VALUES ('19', '河西区', '120103', '5', '120000');
INSERT INTO `cc_city` VALUES ('20', '南开区', '120104', '5', '120000');
INSERT INTO `cc_city` VALUES ('21', '河北区', '120105', '5', '120000');
INSERT INTO `cc_city` VALUES ('22', '红桥区', '120106', '5', '120000');
INSERT INTO `cc_city` VALUES ('23', '东丽区', '120110', '5', '120000');
INSERT INTO `cc_city` VALUES ('24', '西青区', '120111', '5', '120000');
INSERT INTO `cc_city` VALUES ('25', '津南区', '120112', '5', '120000');
INSERT INTO `cc_city` VALUES ('26', '北辰区', '120113', '5', '120000');
INSERT INTO `cc_city` VALUES ('27', '武清区', '120114', '5', '120000');
INSERT INTO `cc_city` VALUES ('28', '宝坻区', '120115', '5', '120000');
INSERT INTO `cc_city` VALUES ('29', '滨海新区', '120116', '5', '120000');
INSERT INTO `cc_city` VALUES ('30', '宁河县', '120221', '5', '120000');
INSERT INTO `cc_city` VALUES ('31', '静海县', '120223', '5', '120000');
INSERT INTO `cc_city` VALUES ('32', '蓟县', '120225', '5', '120000');
INSERT INTO `cc_city` VALUES ('43', '石家庄市', '130100', '6', '130000');
INSERT INTO `cc_city` VALUES ('44', '唐山市', '130200', '6', '130000');
INSERT INTO `cc_city` VALUES ('45', '秦皇岛市', '130300', '6', '130000');
INSERT INTO `cc_city` VALUES ('46', '邯郸市', '130400', '6', '130000');
INSERT INTO `cc_city` VALUES ('47', '邢台市', '130500', '6', '130000');
INSERT INTO `cc_city` VALUES ('48', '保定市', '130600', '6', '130000');
INSERT INTO `cc_city` VALUES ('49', '张家口市', '130700', '6', '130000');
INSERT INTO `cc_city` VALUES ('50', '承德市', '130800', '6', '130000');
INSERT INTO `cc_city` VALUES ('51', '沧州市', '130900', '6', '130000');
INSERT INTO `cc_city` VALUES ('52', '廊坊市', '131000', '6', '130000');
INSERT INTO `cc_city` VALUES ('53', '衡水市', '131100', '6', '130000');
INSERT INTO `cc_city` VALUES ('58', '省直辖县级行政区划', '139000', '6', '130000');
INSERT INTO `cc_city` VALUES ('59', '广州市', '440100', '7', '440000');
INSERT INTO `cc_city` VALUES ('60', '韶关市', '440200', '7', '440000');
INSERT INTO `cc_city` VALUES ('61', '深圳市', '440300', '7', '440000');
INSERT INTO `cc_city` VALUES ('62', '珠海市', '440400', '7', '440000');
INSERT INTO `cc_city` VALUES ('63', '汕头市', '440500', '7', '440000');
INSERT INTO `cc_city` VALUES ('64', '佛山市', '440600', '7', '440000');
INSERT INTO `cc_city` VALUES ('65', '江门市', '440700', '7', '440000');
INSERT INTO `cc_city` VALUES ('66', '湛江市', '440800', '7', '440000');
INSERT INTO `cc_city` VALUES ('67', '茂名市', '440900', '7', '440000');
INSERT INTO `cc_city` VALUES ('68', '肇庆市', '441200', '7', '440000');
INSERT INTO `cc_city` VALUES ('69', '惠州市', '441300', '7', '440000');
INSERT INTO `cc_city` VALUES ('70', '梅州市', '441400', '7', '440000');
INSERT INTO `cc_city` VALUES ('71', '汕尾市', '441500', '7', '440000');
INSERT INTO `cc_city` VALUES ('72', '河源市', '441600', '7', '440000');
INSERT INTO `cc_city` VALUES ('73', '阳江市', '441700', '7', '440000');
INSERT INTO `cc_city` VALUES ('74', '清远市', '441800', '7', '440000');
INSERT INTO `cc_city` VALUES ('75', '东莞市', '441900', '7', '440000');
INSERT INTO `cc_city` VALUES ('76', '中山市', '442000', '7', '440000');
INSERT INTO `cc_city` VALUES ('77', '潮州市', '445100', '7', '440000');
INSERT INTO `cc_city` VALUES ('78', '揭阳市', '445200', '7', '440000');
INSERT INTO `cc_city` VALUES ('79', '云浮市', '445300', '7', '440000');

-- ----------------------------
-- Table structure for cc_county
-- ----------------------------
DROP TABLE IF EXISTS `cc_county`;
CREATE TABLE `cc_county` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `countyname` varchar(20) DEFAULT NULL,
  `countycode` varchar(8) DEFAULT NULL,
  `cityid` int(11) DEFAULT NULL,
  `provincecode` varchar(8) DEFAULT NULL,
  `citycode` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=323 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cc_county
-- ----------------------------
INSERT INTO `cc_county` VALUES ('1', '市辖区', '130101', '43', '130000', '130100');
INSERT INTO `cc_county` VALUES ('2', '长安区', '130102', '43', '130000', '130100');
INSERT INTO `cc_county` VALUES ('3', '桥西区', '130104', '43', '130000', '130100');
INSERT INTO `cc_county` VALUES ('4', '新华区', '130105', '43', '130000', '130100');
INSERT INTO `cc_county` VALUES ('5', '井陉矿区', '130107', '43', '130000', '130100');
INSERT INTO `cc_county` VALUES ('6', '裕华区', '130108', '43', '130000', '130100');
INSERT INTO `cc_county` VALUES ('7', '藁城区', '130109', '43', '130000', '130100');
INSERT INTO `cc_county` VALUES ('8', '鹿泉区', '130110', '43', '130000', '130100');
INSERT INTO `cc_county` VALUES ('9', '栾城区', '130111', '43', '130000', '130100');
INSERT INTO `cc_county` VALUES ('10', '井陉县', '130121', '43', '130000', '130100');
INSERT INTO `cc_county` VALUES ('11', '正定县', '130123', '43', '130000', '130100');
INSERT INTO `cc_county` VALUES ('12', '行唐县', '130125', '43', '130000', '130100');
INSERT INTO `cc_county` VALUES ('13', '灵寿县', '130126', '43', '130000', '130100');
INSERT INTO `cc_county` VALUES ('14', '高邑县', '130127', '43', '130000', '130100');
INSERT INTO `cc_county` VALUES ('15', '深泽县', '130128', '43', '130000', '130100');
INSERT INTO `cc_county` VALUES ('16', '赞皇县', '130129', '43', '130000', '130100');
INSERT INTO `cc_county` VALUES ('17', '无极县', '130130', '43', '130000', '130100');
INSERT INTO `cc_county` VALUES ('18', '平山县', '130131', '43', '130000', '130100');
INSERT INTO `cc_county` VALUES ('19', '元氏县', '130132', '43', '130000', '130100');
INSERT INTO `cc_county` VALUES ('20', '赵县', '130133', '43', '130000', '130100');
INSERT INTO `cc_county` VALUES ('21', '晋州市', '130183', '43', '130000', '130100');
INSERT INTO `cc_county` VALUES ('22', '新乐市', '130184', '43', '130000', '130100');
INSERT INTO `cc_county` VALUES ('23', '市辖区', '130201', '44', '130000', '130200');
INSERT INTO `cc_county` VALUES ('24', '路南区', '130202', '44', '130000', '130200');
INSERT INTO `cc_county` VALUES ('25', '路北区', '130203', '44', '130000', '130200');
INSERT INTO `cc_county` VALUES ('26', '古冶区', '130204', '44', '130000', '130200');
INSERT INTO `cc_county` VALUES ('27', '开平区', '130205', '44', '130000', '130200');
INSERT INTO `cc_county` VALUES ('28', '丰南区', '130207', '44', '130000', '130200');
INSERT INTO `cc_county` VALUES ('29', '丰润区', '130208', '44', '130000', '130200');
INSERT INTO `cc_county` VALUES ('30', '曹妃甸区', '130209', '44', '130000', '130200');
INSERT INTO `cc_county` VALUES ('31', '滦县', '130223', '44', '130000', '130200');
INSERT INTO `cc_county` VALUES ('32', '滦南县', '130224', '44', '130000', '130200');
INSERT INTO `cc_county` VALUES ('33', '乐亭县', '130225', '44', '130000', '130200');
INSERT INTO `cc_county` VALUES ('34', '迁西县', '130227', '44', '130000', '130200');
INSERT INTO `cc_county` VALUES ('35', '玉田县', '130229', '44', '130000', '130200');
INSERT INTO `cc_county` VALUES ('36', '遵化市', '130281', '44', '130000', '130200');
INSERT INTO `cc_county` VALUES ('37', '迁安市', '130283', '44', '130000', '130200');
INSERT INTO `cc_county` VALUES ('38', '市辖区', '130301', '45', '130000', '130300');
INSERT INTO `cc_county` VALUES ('39', '海港区', '130302', '45', '130000', '130300');
INSERT INTO `cc_county` VALUES ('40', '山海关区', '130303', '45', '130000', '130300');
INSERT INTO `cc_county` VALUES ('41', '北戴河区', '130304', '45', '130000', '130300');
INSERT INTO `cc_county` VALUES ('42', '青龙满族自治县', '130321', '45', '130000', '130300');
INSERT INTO `cc_county` VALUES ('43', '昌黎县', '130322', '45', '130000', '130300');
INSERT INTO `cc_county` VALUES ('44', '抚宁县', '130323', '45', '130000', '130300');
INSERT INTO `cc_county` VALUES ('45', '卢龙县', '130324', '45', '130000', '130300');
INSERT INTO `cc_county` VALUES ('46', '市辖区', '130401', '46', '130000', '130400');
INSERT INTO `cc_county` VALUES ('47', '邯山区', '130402', '46', '130000', '130400');
INSERT INTO `cc_county` VALUES ('48', '丛台区', '130403', '46', '130000', '130400');
INSERT INTO `cc_county` VALUES ('49', '复兴区', '130404', '46', '130000', '130400');
INSERT INTO `cc_county` VALUES ('50', '峰峰矿区', '130406', '46', '130000', '130400');
INSERT INTO `cc_county` VALUES ('51', '邯郸县', '130421', '46', '130000', '130400');
INSERT INTO `cc_county` VALUES ('52', '临漳县', '130423', '46', '130000', '130400');
INSERT INTO `cc_county` VALUES ('53', '成安县', '130424', '46', '130000', '130400');
INSERT INTO `cc_county` VALUES ('54', '大名县', '130425', '46', '130000', '130400');
INSERT INTO `cc_county` VALUES ('55', '涉县', '130426', '46', '130000', '130400');
INSERT INTO `cc_county` VALUES ('56', '磁县', '130427', '46', '130000', '130400');
INSERT INTO `cc_county` VALUES ('57', '肥乡县', '130428', '46', '130000', '130400');
INSERT INTO `cc_county` VALUES ('58', '永年县', '130429', '46', '130000', '130400');
INSERT INTO `cc_county` VALUES ('59', '邱县', '130430', '46', '130000', '130400');
INSERT INTO `cc_county` VALUES ('60', '鸡泽县', '130431', '46', '130000', '130400');
INSERT INTO `cc_county` VALUES ('61', '广平县', '130432', '46', '130000', '130400');
INSERT INTO `cc_county` VALUES ('62', '馆陶县', '130433', '46', '130000', '130400');
INSERT INTO `cc_county` VALUES ('63', '魏县', '130434', '46', '130000', '130400');
INSERT INTO `cc_county` VALUES ('64', '曲周县', '130435', '46', '130000', '130400');
INSERT INTO `cc_county` VALUES ('65', '武安市', '130481', '46', '130000', '130400');
INSERT INTO `cc_county` VALUES ('66', '市辖区', '130501', '47', '130000', '130500');
INSERT INTO `cc_county` VALUES ('67', '桥东区', '130502', '47', '130000', '130500');
INSERT INTO `cc_county` VALUES ('68', '桥西区', '130503', '47', '130000', '130500');
INSERT INTO `cc_county` VALUES ('69', '邢台县', '130521', '47', '130000', '130500');
INSERT INTO `cc_county` VALUES ('70', '临城县', '130522', '47', '130000', '130500');
INSERT INTO `cc_county` VALUES ('71', '内丘县', '130523', '47', '130000', '130500');
INSERT INTO `cc_county` VALUES ('72', '柏乡县', '130524', '47', '130000', '130500');
INSERT INTO `cc_county` VALUES ('73', '隆尧县', '130525', '47', '130000', '130500');
INSERT INTO `cc_county` VALUES ('74', '任县', '130526', '47', '130000', '130500');
INSERT INTO `cc_county` VALUES ('75', '南和县', '130527', '47', '130000', '130500');
INSERT INTO `cc_county` VALUES ('76', '宁晋县', '130528', '47', '130000', '130500');
INSERT INTO `cc_county` VALUES ('77', '巨鹿县', '130529', '47', '130000', '130500');
INSERT INTO `cc_county` VALUES ('78', '新河县', '130530', '47', '130000', '130500');
INSERT INTO `cc_county` VALUES ('79', '广宗县', '130531', '47', '130000', '130500');
INSERT INTO `cc_county` VALUES ('80', '平乡县', '130532', '47', '130000', '130500');
INSERT INTO `cc_county` VALUES ('81', '威县', '130533', '47', '130000', '130500');
INSERT INTO `cc_county` VALUES ('82', '清河县', '130534', '47', '130000', '130500');
INSERT INTO `cc_county` VALUES ('83', '临西县', '130535', '47', '130000', '130500');
INSERT INTO `cc_county` VALUES ('84', '南宫市', '130581', '47', '130000', '130500');
INSERT INTO `cc_county` VALUES ('85', '沙河市', '130582', '47', '130000', '130500');
INSERT INTO `cc_county` VALUES ('86', '市辖区', '130601', '48', '130000', '130600');
INSERT INTO `cc_county` VALUES ('87', '新市区', '130602', '48', '130000', '130600');
INSERT INTO `cc_county` VALUES ('88', '北市区', '130603', '48', '130000', '130600');
INSERT INTO `cc_county` VALUES ('89', '南市区', '130604', '48', '130000', '130600');
INSERT INTO `cc_county` VALUES ('90', '满城县', '130621', '48', '130000', '130600');
INSERT INTO `cc_county` VALUES ('91', '清苑县', '130622', '48', '130000', '130600');
INSERT INTO `cc_county` VALUES ('92', '涞水县', '130623', '48', '130000', '130600');
INSERT INTO `cc_county` VALUES ('93', '阜平县', '130624', '48', '130000', '130600');
INSERT INTO `cc_county` VALUES ('94', '徐水县', '130625', '48', '130000', '130600');
INSERT INTO `cc_county` VALUES ('95', '定兴县', '130626', '48', '130000', '130600');
INSERT INTO `cc_county` VALUES ('96', '唐县', '130627', '48', '130000', '130600');
INSERT INTO `cc_county` VALUES ('97', '高阳县', '130628', '48', '130000', '130600');
INSERT INTO `cc_county` VALUES ('98', '容城县', '130629', '48', '130000', '130600');
INSERT INTO `cc_county` VALUES ('99', '涞源县', '130630', '48', '130000', '130600');
INSERT INTO `cc_county` VALUES ('100', '望都县', '130631', '48', '130000', '130600');
INSERT INTO `cc_county` VALUES ('101', '安新县', '130632', '48', '130000', '130600');
INSERT INTO `cc_county` VALUES ('102', '易县', '130633', '48', '130000', '130600');
INSERT INTO `cc_county` VALUES ('103', '曲阳县', '130634', '48', '130000', '130600');
INSERT INTO `cc_county` VALUES ('104', '蠡县', '130635', '48', '130000', '130600');
INSERT INTO `cc_county` VALUES ('105', '顺平县', '130636', '48', '130000', '130600');
INSERT INTO `cc_county` VALUES ('106', '博野县', '130637', '48', '130000', '130600');
INSERT INTO `cc_county` VALUES ('107', '雄县', '130638', '48', '130000', '130600');
INSERT INTO `cc_county` VALUES ('108', '涿州市', '130681', '48', '130000', '130600');
INSERT INTO `cc_county` VALUES ('109', '安国市', '130683', '48', '130000', '130600');
INSERT INTO `cc_county` VALUES ('110', '高碑店市', '130684', '48', '130000', '130600');
INSERT INTO `cc_county` VALUES ('111', '市辖区', '130701', '49', '130000', '130700');
INSERT INTO `cc_county` VALUES ('112', '桥东区', '130702', '49', '130000', '130700');
INSERT INTO `cc_county` VALUES ('113', '桥西区', '130703', '49', '130000', '130700');
INSERT INTO `cc_county` VALUES ('114', '宣化区', '130705', '49', '130000', '130700');
INSERT INTO `cc_county` VALUES ('115', '下花园区', '130706', '49', '130000', '130700');
INSERT INTO `cc_county` VALUES ('116', '宣化县', '130721', '49', '130000', '130700');
INSERT INTO `cc_county` VALUES ('117', '张北县', '130722', '49', '130000', '130700');
INSERT INTO `cc_county` VALUES ('118', '康保县', '130723', '49', '130000', '130700');
INSERT INTO `cc_county` VALUES ('119', '沽源县', '130724', '49', '130000', '130700');
INSERT INTO `cc_county` VALUES ('120', '尚义县', '130725', '49', '130000', '130700');
INSERT INTO `cc_county` VALUES ('121', '蔚县', '130726', '49', '130000', '130700');
INSERT INTO `cc_county` VALUES ('122', '阳原县', '130727', '49', '130000', '130700');
INSERT INTO `cc_county` VALUES ('123', '怀安县', '130728', '49', '130000', '130700');
INSERT INTO `cc_county` VALUES ('124', '万全县', '130729', '49', '130000', '130700');
INSERT INTO `cc_county` VALUES ('125', '怀来县', '130730', '49', '130000', '130700');
INSERT INTO `cc_county` VALUES ('126', '涿鹿县', '130731', '49', '130000', '130700');
INSERT INTO `cc_county` VALUES ('127', '赤城县', '130732', '49', '130000', '130700');
INSERT INTO `cc_county` VALUES ('128', '崇礼县', '130733', '49', '130000', '130700');
INSERT INTO `cc_county` VALUES ('129', '市辖区', '130801', '50', '130000', '130800');
INSERT INTO `cc_county` VALUES ('130', '双桥区', '130802', '50', '130000', '130800');
INSERT INTO `cc_county` VALUES ('131', '双滦区', '130803', '50', '130000', '130800');
INSERT INTO `cc_county` VALUES ('132', '鹰手营子矿区', '130804', '50', '130000', '130800');
INSERT INTO `cc_county` VALUES ('133', '承德县', '130821', '50', '130000', '130800');
INSERT INTO `cc_county` VALUES ('134', '兴隆县', '130822', '50', '130000', '130800');
INSERT INTO `cc_county` VALUES ('135', '平泉县', '130823', '50', '130000', '130800');
INSERT INTO `cc_county` VALUES ('136', '滦平县', '130824', '50', '130000', '130800');
INSERT INTO `cc_county` VALUES ('137', '隆化县', '130825', '50', '130000', '130800');
INSERT INTO `cc_county` VALUES ('138', '丰宁满族自治县', '130826', '50', '130000', '130800');
INSERT INTO `cc_county` VALUES ('139', '宽城满族自治县', '130827', '50', '130000', '130800');
INSERT INTO `cc_county` VALUES ('140', '围场满族蒙古族自治县', '130828', '50', '130000', '130800');
INSERT INTO `cc_county` VALUES ('141', '市辖区', '130901', '51', '130000', '130900');
INSERT INTO `cc_county` VALUES ('142', '新华区', '130902', '51', '130000', '130900');
INSERT INTO `cc_county` VALUES ('143', '运河区', '130903', '51', '130000', '130900');
INSERT INTO `cc_county` VALUES ('144', '沧县', '130921', '51', '130000', '130900');
INSERT INTO `cc_county` VALUES ('145', '青县', '130922', '51', '130000', '130900');
INSERT INTO `cc_county` VALUES ('146', '东光县', '130923', '51', '130000', '130900');
INSERT INTO `cc_county` VALUES ('147', '海兴县', '130924', '51', '130000', '130900');
INSERT INTO `cc_county` VALUES ('148', '盐山县', '130925', '51', '130000', '130900');
INSERT INTO `cc_county` VALUES ('149', '肃宁县', '130926', '51', '130000', '130900');
INSERT INTO `cc_county` VALUES ('150', '南皮县', '130927', '51', '130000', '130900');
INSERT INTO `cc_county` VALUES ('151', '吴桥县', '130928', '51', '130000', '130900');
INSERT INTO `cc_county` VALUES ('152', '献县', '130929', '51', '130000', '130900');
INSERT INTO `cc_county` VALUES ('153', '孟村回族自治县', '130930', '51', '130000', '130900');
INSERT INTO `cc_county` VALUES ('154', '泊头市', '130981', '51', '130000', '130900');
INSERT INTO `cc_county` VALUES ('155', '任丘市', '130982', '51', '130000', '130900');
INSERT INTO `cc_county` VALUES ('156', '黄骅市', '130983', '51', '130000', '130900');
INSERT INTO `cc_county` VALUES ('157', '河间市', '130984', '51', '130000', '130900');
INSERT INTO `cc_county` VALUES ('158', '市辖区', '131001', '52', '130000', '131000');
INSERT INTO `cc_county` VALUES ('159', '安次区', '131002', '52', '130000', '131000');
INSERT INTO `cc_county` VALUES ('160', '广阳区', '131003', '52', '130000', '131000');
INSERT INTO `cc_county` VALUES ('161', '固安县', '131022', '52', '130000', '131000');
INSERT INTO `cc_county` VALUES ('162', '永清县', '131023', '52', '130000', '131000');
INSERT INTO `cc_county` VALUES ('163', '香河县', '131024', '52', '130000', '131000');
INSERT INTO `cc_county` VALUES ('164', '大城县', '131025', '52', '130000', '131000');
INSERT INTO `cc_county` VALUES ('165', '文安县', '131026', '52', '130000', '131000');
INSERT INTO `cc_county` VALUES ('166', '大厂回族自治县', '131028', '52', '130000', '131000');
INSERT INTO `cc_county` VALUES ('167', '霸州市', '131081', '52', '130000', '131000');
INSERT INTO `cc_county` VALUES ('168', '三河市', '131082', '52', '130000', '131000');
INSERT INTO `cc_county` VALUES ('169', '市辖区', '131101', '53', '130000', '131100');
INSERT INTO `cc_county` VALUES ('170', '桃城区', '131102', '53', '130000', '131100');
INSERT INTO `cc_county` VALUES ('171', '枣强县', '131121', '53', '130000', '131100');
INSERT INTO `cc_county` VALUES ('172', '武邑县', '131122', '53', '130000', '131100');
INSERT INTO `cc_county` VALUES ('173', '武强县', '131123', '53', '130000', '131100');
INSERT INTO `cc_county` VALUES ('174', '饶阳县', '131124', '53', '130000', '131100');
INSERT INTO `cc_county` VALUES ('175', '安平县', '131125', '53', '130000', '131100');
INSERT INTO `cc_county` VALUES ('176', '故城县', '131126', '53', '130000', '131100');
INSERT INTO `cc_county` VALUES ('177', '景县', '131127', '53', '130000', '131100');
INSERT INTO `cc_county` VALUES ('178', '阜城县', '131128', '53', '130000', '131100');
INSERT INTO `cc_county` VALUES ('179', '冀州市', '131181', '53', '130000', '131100');
INSERT INTO `cc_county` VALUES ('180', '深州市', '131182', '53', '130000', '131100');
INSERT INTO `cc_county` VALUES ('181', '定州市', '139001', '58', '130000', '139000');
INSERT INTO `cc_county` VALUES ('182', '辛集市', '139002', '58', '130000', '139000');
INSERT INTO `cc_county` VALUES ('183', '市辖区', '440101', '59', '440000', '440100');
INSERT INTO `cc_county` VALUES ('184', '荔湾区', '440103', '59', '440000', '440100');
INSERT INTO `cc_county` VALUES ('185', '越秀区', '440104', '59', '440000', '440100');
INSERT INTO `cc_county` VALUES ('186', '海珠区', '440105', '59', '440000', '440100');
INSERT INTO `cc_county` VALUES ('187', '天河区', '440106', '59', '440000', '440100');
INSERT INTO `cc_county` VALUES ('188', '白云区', '440111', '59', '440000', '440100');
INSERT INTO `cc_county` VALUES ('189', '黄埔区', '440112', '59', '440000', '440100');
INSERT INTO `cc_county` VALUES ('190', '番禺区', '440113', '59', '440000', '440100');
INSERT INTO `cc_county` VALUES ('191', '花都区', '440114', '59', '440000', '440100');
INSERT INTO `cc_county` VALUES ('192', '南沙区', '440115', '59', '440000', '440100');
INSERT INTO `cc_county` VALUES ('193', '萝岗区', '440116', '59', '440000', '440100');
INSERT INTO `cc_county` VALUES ('194', '从化区', '440117', '59', '440000', '440100');
INSERT INTO `cc_county` VALUES ('195', '增城区', '440118', '59', '440000', '440100');
INSERT INTO `cc_county` VALUES ('196', '市辖区', '440201', '60', '440000', '440200');
INSERT INTO `cc_county` VALUES ('197', '武江区', '440203', '60', '440000', '440200');
INSERT INTO `cc_county` VALUES ('198', '浈江区', '440204', '60', '440000', '440200');
INSERT INTO `cc_county` VALUES ('199', '曲江区', '440205', '60', '440000', '440200');
INSERT INTO `cc_county` VALUES ('200', '始兴县', '440222', '60', '440000', '440200');
INSERT INTO `cc_county` VALUES ('201', '仁化县', '440224', '60', '440000', '440200');
INSERT INTO `cc_county` VALUES ('202', '翁源县', '440229', '60', '440000', '440200');
INSERT INTO `cc_county` VALUES ('203', '乳源瑶族自治县', '440232', '60', '440000', '440200');
INSERT INTO `cc_county` VALUES ('204', '新丰县', '440233', '60', '440000', '440200');
INSERT INTO `cc_county` VALUES ('205', '乐昌市', '440281', '60', '440000', '440200');
INSERT INTO `cc_county` VALUES ('206', '南雄市', '440282', '60', '440000', '440200');
INSERT INTO `cc_county` VALUES ('207', '市辖区', '440301', '61', '440000', '440300');
INSERT INTO `cc_county` VALUES ('208', '罗湖区', '440303', '61', '440000', '440300');
INSERT INTO `cc_county` VALUES ('209', '福田区', '440304', '61', '440000', '440300');
INSERT INTO `cc_county` VALUES ('210', '南山区', '440305', '61', '440000', '440300');
INSERT INTO `cc_county` VALUES ('211', '宝安区', '440306', '61', '440000', '440300');
INSERT INTO `cc_county` VALUES ('212', '龙岗区', '440307', '61', '440000', '440300');
INSERT INTO `cc_county` VALUES ('213', '盐田区', '440308', '61', '440000', '440300');
INSERT INTO `cc_county` VALUES ('214', '市辖区', '440401', '62', '440000', '440400');
INSERT INTO `cc_county` VALUES ('215', '香洲区', '440402', '62', '440000', '440400');
INSERT INTO `cc_county` VALUES ('216', '斗门区', '440403', '62', '440000', '440400');
INSERT INTO `cc_county` VALUES ('217', '金湾区', '440404', '62', '440000', '440400');
INSERT INTO `cc_county` VALUES ('218', '市辖区', '440501', '63', '440000', '440500');
INSERT INTO `cc_county` VALUES ('219', '龙湖区', '440507', '63', '440000', '440500');
INSERT INTO `cc_county` VALUES ('220', '金平区', '440511', '63', '440000', '440500');
INSERT INTO `cc_county` VALUES ('221', '濠江区', '440512', '63', '440000', '440500');
INSERT INTO `cc_county` VALUES ('222', '潮阳区', '440513', '63', '440000', '440500');
INSERT INTO `cc_county` VALUES ('223', '潮南区', '440514', '63', '440000', '440500');
INSERT INTO `cc_county` VALUES ('224', '澄海区', '440515', '63', '440000', '440500');
INSERT INTO `cc_county` VALUES ('225', '南澳县', '440523', '63', '440000', '440500');
INSERT INTO `cc_county` VALUES ('226', '市辖区', '440601', '64', '440000', '440600');
INSERT INTO `cc_county` VALUES ('227', '禅城区', '440604', '64', '440000', '440600');
INSERT INTO `cc_county` VALUES ('228', '南海区', '440605', '64', '440000', '440600');
INSERT INTO `cc_county` VALUES ('229', '顺德区', '440606', '64', '440000', '440600');
INSERT INTO `cc_county` VALUES ('230', '三水区', '440607', '64', '440000', '440600');
INSERT INTO `cc_county` VALUES ('231', '高明区', '440608', '64', '440000', '440600');
INSERT INTO `cc_county` VALUES ('232', '市辖区', '440701', '65', '440000', '440700');
INSERT INTO `cc_county` VALUES ('233', '蓬江区', '440703', '65', '440000', '440700');
INSERT INTO `cc_county` VALUES ('234', '江海区', '440704', '65', '440000', '440700');
INSERT INTO `cc_county` VALUES ('235', '新会区', '440705', '65', '440000', '440700');
INSERT INTO `cc_county` VALUES ('236', '台山市', '440781', '65', '440000', '440700');
INSERT INTO `cc_county` VALUES ('237', '开平市', '440783', '65', '440000', '440700');
INSERT INTO `cc_county` VALUES ('238', '鹤山市', '440784', '65', '440000', '440700');
INSERT INTO `cc_county` VALUES ('239', '恩平市', '440785', '65', '440000', '440700');
INSERT INTO `cc_county` VALUES ('240', '市辖区', '440801', '66', '440000', '440800');
INSERT INTO `cc_county` VALUES ('241', '赤坎区', '440802', '66', '440000', '440800');
INSERT INTO `cc_county` VALUES ('242', '霞山区', '440803', '66', '440000', '440800');
INSERT INTO `cc_county` VALUES ('243', '坡头区', '440804', '66', '440000', '440800');
INSERT INTO `cc_county` VALUES ('244', '麻章区', '440811', '66', '440000', '440800');
INSERT INTO `cc_county` VALUES ('245', '遂溪县', '440823', '66', '440000', '440800');
INSERT INTO `cc_county` VALUES ('246', '徐闻县', '440825', '66', '440000', '440800');
INSERT INTO `cc_county` VALUES ('247', '廉江市', '440881', '66', '440000', '440800');
INSERT INTO `cc_county` VALUES ('248', '雷州市', '440882', '66', '440000', '440800');
INSERT INTO `cc_county` VALUES ('249', '吴川市', '440883', '66', '440000', '440800');
INSERT INTO `cc_county` VALUES ('250', '市辖区', '440901', '67', '440000', '440900');
INSERT INTO `cc_county` VALUES ('251', '茂南区', '440902', '67', '440000', '440900');
INSERT INTO `cc_county` VALUES ('252', '电白区', '440904', '67', '440000', '440900');
INSERT INTO `cc_county` VALUES ('253', '高州市', '440981', '67', '440000', '440900');
INSERT INTO `cc_county` VALUES ('254', '化州市', '440982', '67', '440000', '440900');
INSERT INTO `cc_county` VALUES ('255', '信宜市', '440983', '67', '440000', '440900');
INSERT INTO `cc_county` VALUES ('256', '市辖区', '441201', '68', '440000', '441200');
INSERT INTO `cc_county` VALUES ('257', '端州区', '441202', '68', '440000', '441200');
INSERT INTO `cc_county` VALUES ('258', '鼎湖区', '441203', '68', '440000', '441200');
INSERT INTO `cc_county` VALUES ('259', '广宁县', '441223', '68', '440000', '441200');
INSERT INTO `cc_county` VALUES ('260', '怀集县', '441224', '68', '440000', '441200');
INSERT INTO `cc_county` VALUES ('261', '封开县', '441225', '68', '440000', '441200');
INSERT INTO `cc_county` VALUES ('262', '德庆县', '441226', '68', '440000', '441200');
INSERT INTO `cc_county` VALUES ('263', '高要市', '441283', '68', '440000', '441200');
INSERT INTO `cc_county` VALUES ('264', '四会市', '441284', '68', '440000', '441200');
INSERT INTO `cc_county` VALUES ('265', '市辖区', '441301', '69', '440000', '441300');
INSERT INTO `cc_county` VALUES ('266', '惠城区', '441302', '69', '440000', '441300');
INSERT INTO `cc_county` VALUES ('267', '惠阳区', '441303', '69', '440000', '441300');
INSERT INTO `cc_county` VALUES ('268', '博罗县', '441322', '69', '440000', '441300');
INSERT INTO `cc_county` VALUES ('269', '惠东县', '441323', '69', '440000', '441300');
INSERT INTO `cc_county` VALUES ('270', '龙门县', '441324', '69', '440000', '441300');
INSERT INTO `cc_county` VALUES ('271', '市辖区', '441401', '70', '440000', '441400');
INSERT INTO `cc_county` VALUES ('272', '梅江区', '441402', '70', '440000', '441400');
INSERT INTO `cc_county` VALUES ('273', '梅县区', '441403', '70', '440000', '441400');
INSERT INTO `cc_county` VALUES ('274', '大埔县', '441422', '70', '440000', '441400');
INSERT INTO `cc_county` VALUES ('275', '丰顺县', '441423', '70', '440000', '441400');
INSERT INTO `cc_county` VALUES ('276', '五华县', '441424', '70', '440000', '441400');
INSERT INTO `cc_county` VALUES ('277', '平远县', '441426', '70', '440000', '441400');
INSERT INTO `cc_county` VALUES ('278', '蕉岭县', '441427', '70', '440000', '441400');
INSERT INTO `cc_county` VALUES ('279', '兴宁市', '441481', '70', '440000', '441400');
INSERT INTO `cc_county` VALUES ('280', '市辖区', '441501', '71', '440000', '441500');
INSERT INTO `cc_county` VALUES ('281', '城区', '441502', '71', '440000', '441500');
INSERT INTO `cc_county` VALUES ('282', '海丰县', '441521', '71', '440000', '441500');
INSERT INTO `cc_county` VALUES ('283', '陆河县', '441523', '71', '440000', '441500');
INSERT INTO `cc_county` VALUES ('284', '陆丰市', '441581', '71', '440000', '441500');
INSERT INTO `cc_county` VALUES ('285', '市辖区', '441601', '72', '440000', '441600');
INSERT INTO `cc_county` VALUES ('286', '源城区', '441602', '72', '440000', '441600');
INSERT INTO `cc_county` VALUES ('287', '紫金县', '441621', '72', '440000', '441600');
INSERT INTO `cc_county` VALUES ('288', '龙川县', '441622', '72', '440000', '441600');
INSERT INTO `cc_county` VALUES ('289', '连平县', '441623', '72', '440000', '441600');
INSERT INTO `cc_county` VALUES ('290', '和平县', '441624', '72', '440000', '441600');
INSERT INTO `cc_county` VALUES ('291', '东源县', '441625', '72', '440000', '441600');
INSERT INTO `cc_county` VALUES ('292', '市辖区', '441701', '73', '440000', '441700');
INSERT INTO `cc_county` VALUES ('293', '江城区', '441702', '73', '440000', '441700');
INSERT INTO `cc_county` VALUES ('294', '阳西县', '441721', '73', '440000', '441700');
INSERT INTO `cc_county` VALUES ('295', '阳东县', '441723', '73', '440000', '441700');
INSERT INTO `cc_county` VALUES ('296', '阳春市', '441781', '73', '440000', '441700');
INSERT INTO `cc_county` VALUES ('297', '市辖区', '441801', '74', '440000', '441800');
INSERT INTO `cc_county` VALUES ('298', '清城区', '441802', '74', '440000', '441800');
INSERT INTO `cc_county` VALUES ('299', '清新区', '441803', '74', '440000', '441800');
INSERT INTO `cc_county` VALUES ('300', '佛冈县', '441821', '74', '440000', '441800');
INSERT INTO `cc_county` VALUES ('301', '阳山县', '441823', '74', '440000', '441800');
INSERT INTO `cc_county` VALUES ('302', '连山壮族瑶族自治县', '441825', '74', '440000', '441800');
INSERT INTO `cc_county` VALUES ('303', '连南瑶族自治县', '441826', '74', '440000', '441800');
INSERT INTO `cc_county` VALUES ('304', '英德市', '441881', '74', '440000', '441800');
INSERT INTO `cc_county` VALUES ('305', '连州市', '441882', '74', '440000', '441800');
INSERT INTO `cc_county` VALUES ('306', '市辖区', '445101', '77', '440000', '445100');
INSERT INTO `cc_county` VALUES ('307', '湘桥区', '445102', '77', '440000', '445100');
INSERT INTO `cc_county` VALUES ('308', '潮安区', '445103', '77', '440000', '445100');
INSERT INTO `cc_county` VALUES ('309', '饶平县', '445122', '77', '440000', '445100');
INSERT INTO `cc_county` VALUES ('310', '市辖区', '445201', '78', '440000', '445200');
INSERT INTO `cc_county` VALUES ('311', '榕城区', '445202', '78', '440000', '445200');
INSERT INTO `cc_county` VALUES ('312', '揭东区', '445203', '78', '440000', '445200');
INSERT INTO `cc_county` VALUES ('313', '揭西县', '445222', '78', '440000', '445200');
INSERT INTO `cc_county` VALUES ('314', '惠来县', '445224', '78', '440000', '445200');
INSERT INTO `cc_county` VALUES ('315', '普宁市', '445281', '78', '440000', '445200');
INSERT INTO `cc_county` VALUES ('316', '市辖区', '445301', '79', '440000', '445300');
INSERT INTO `cc_county` VALUES ('317', '云城区', '445302', '79', '440000', '445300');
INSERT INTO `cc_county` VALUES ('318', '云安区', '445303', '79', '440000', '445300');
INSERT INTO `cc_county` VALUES ('319', '新兴县', '445321', '79', '440000', '445300');
INSERT INTO `cc_county` VALUES ('320', '郁南县', '445322', '79', '440000', '445300');
INSERT INTO `cc_county` VALUES ('321', '罗定市', '445381', '79', '440000', '445300');

-- ----------------------------
-- Table structure for cc_dict
-- ----------------------------
DROP TABLE IF EXISTS `cc_dict`;
CREATE TABLE `cc_dict` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `dictname` varchar(32) DEFAULT NULL COMMENT '字典名称',
  `dictcode` varchar(16) DEFAULT NULL COMMENT '字典编码',
  `dicttypecode` varchar(16) DEFAULT NULL COMMENT '字典类型ID',
  `dicttypeid` int(11) unsigned DEFAULT NULL,
  `orderby` tinyint(2) unsigned DEFAULT NULL COMMENT '排序',
  `status` tinyint(1) unsigned DEFAULT '1' COMMENT '状态\r\n1-可用\r\n0-不可用',
  `createtime` datetime DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cc_dict
-- ----------------------------
INSERT INTO `cc_dict` VALUES ('1', '冰箱', '1010', '1011', '7', '1', '1', '2015-05-13 14:04:14');
INSERT INTO `cc_dict` VALUES ('2', '洗衣机', '1212', '1011', '7', '2', '1', '2015-05-13 14:04:35');
INSERT INTO `cc_dict` VALUES ('3', '空调', '1313', '1011', '7', '3', '1', '2015-05-13 14:05:25');

-- ----------------------------
-- Table structure for cc_dicttype
-- ----------------------------
DROP TABLE IF EXISTS `cc_dicttype`;
CREATE TABLE `cc_dicttype` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `dicttypename` varchar(16) NOT NULL COMMENT '字典类型名称',
  `dicttypecode` varchar(16) NOT NULL COMMENT '字典类型编码',
  `parentcode` varchar(16) DEFAULT NULL COMMENT '父ID',
  `dicttypedesc` varchar(128) DEFAULT NULL COMMENT '描述',
  `createtime` datetime DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cc_dicttype
-- ----------------------------
INSERT INTO `cc_dicttype` VALUES ('6', '产品类型', '1010', '', '', '2015-05-13 11:45:50');
INSERT INTO `cc_dicttype` VALUES ('7', '产品大类', '1011', '1010', '', '2015-05-13 11:46:12');
INSERT INTO `cc_dicttype` VALUES ('8', '产品小类', '1012', '1010', '', '2015-05-13 11:46:35');

-- ----------------------------
-- Table structure for cc_province
-- ----------------------------
DROP TABLE IF EXISTS `cc_province`;
CREATE TABLE `cc_province` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `provincename` varchar(16) DEFAULT NULL,
  `provincecode` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cc_province
-- ----------------------------
INSERT INTO `cc_province` VALUES ('4', '北京市', '110000');
INSERT INTO `cc_province` VALUES ('5', '天津市', '120000');
INSERT INTO `cc_province` VALUES ('6', '河北省', '130000');
INSERT INTO `cc_province` VALUES ('7', '广东省', '440000');

-- ----------------------------
-- Table structure for cc_resource
-- ----------------------------
DROP TABLE IF EXISTS `cc_resource`;
CREATE TABLE `cc_resource` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `resourcename` varchar(64) NOT NULL COMMENT '资源名称',
  `resourceurl` varchar(128) NOT NULL COMMENT '资源路径',
  `resourcealias` varchar(64) DEFAULT NULL COMMENT '资源别名',
  `model` varchar(32) DEFAULT NULL COMMENT '模块',
  `controller` varchar(32) DEFAULT NULL COMMENT '控制器',
  `method` varchar(32) DEFAULT NULL COMMENT '方法',
  `resourcegroup` int(11) unsigned NOT NULL COMMENT '资源组',
  `resourcecode` bigint(20) unsigned NOT NULL COMMENT '资源编码',
  `level` tinyint(2) unsigned DEFAULT NULL COMMENT '级别',
  `resourcetype` tinyint(1) unsigned DEFAULT NULL COMMENT '资源类型\r\n 1-后台 2-前台',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态\r\n1-可用\r\n0-不可用',
  `common` tinyint(1) unsigned DEFAULT '1' COMMENT '是否是公共资源\r\n1-是\r\n0-否',
  `createuser` varchar(32) NOT NULL COMMENT '创建人',
  `parentid` int(11) unsigned DEFAULT NULL COMMENT '父级资源',
  `resourceicon` varchar(64) DEFAULT NULL COMMENT '资源图标',
  `resourcetarget` varchar(32) DEFAULT NULL COMMENT '资源目标',
  `orderby` tinyint(2) DEFAULT NULL COMMENT '排序',
  `event` varchar(32) DEFAULT NULL COMMENT '事件',
  `resourcedesc` text COMMENT '资源描述',
  `createtime` datetime DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cc_resource
-- ----------------------------
INSERT INTO `cc_resource` VALUES ('5', '权限管理', '', '', 'admin', null, null, '0', '1', '1', '1', '1', '0', 'ljz', '0', 'glyphicon glyphicon-globe', 'authcollapse', '1', '', '', '2015-05-13 20:56:28');
INSERT INTO `cc_resource` VALUES ('6', '资源管理', '/admin.php/resource/index', '{:U(\'resource/index\')}', 'admin', 'resource', 'index', '0', '2', '2', '1', '1', '0', 'ljz', '5', 'glyphicon glyphicon-oil', '', '1', '', '', '2015-05-13 20:57:35');
INSERT INTO `cc_resource` VALUES ('7', '添加', '/admin.php/resource/toAdd', '{:U(\'/resource/toAdd\')}', 'admin', 'resource', 'toAdd', '0', '4', '3', '1', '1', '0', 'ljz', '6', '', 'addresource', '1', 'addopera(this)', '', '2015-05-13 20:59:25');
INSERT INTO `cc_resource` VALUES ('8', '修改', '/admin.php/resource/toModify', '{:U(\'/resource/toModify\')}', 'admin', 'resource', 'toModify', '0', '8', '3', '1', '1', '0', 'ljz', '6', '', 'modifyresource', '2', 'modifyopera(this)', '', '2015-05-13 21:00:24');
INSERT INTO `cc_resource` VALUES ('9', '删除', '/admin.php/resource/delete', '{:U(\'/resource/delete\')}', 'admin', 'resource', 'delete', '0', '16', '3', '1', '1', '0', 'ljz', '6', '', 'deleteresource', '3', 'deleteopera(this)', '', '2015-05-13 21:01:26');
INSERT INTO `cc_resource` VALUES ('10', '角色管理', '/admin.php/role/index', '{:U(\'/role/index\')}', 'admin', 'role', 'index', '0', '32', '2', '1', '1', '0', 'ljz', '5', 'glyphicon glyphicon-leaf', '', '2', '', '', '2015-05-13 21:03:48');
INSERT INTO `cc_resource` VALUES ('11', '添加', '/admin.php/role/toAdd', '{:U(\'/role/toAdd\')}', 'admin', 'role', 'toAdd', '0', '64', '3', '1', '1', '0', 'ljz', '10', '', 'addrole', '1', 'addopera(this)', '', '2015-05-13 21:05:46');
INSERT INTO `cc_resource` VALUES ('12', '修改', '/admin.php/role/toModify', '{:U(\'/role/toModify\')}', 'admin', 'role', 'toModify', '0', '128', '3', '1', '1', '0', 'ljz', '10', '', 'modifyrole', '2', 'modifyopera(this)', '', '2015-05-13 21:06:43');
INSERT INTO `cc_resource` VALUES ('13', '删除', '/admin.php/role/delete', '{:U(\'/role/delete\')}', 'admin', 'role', 'delete', '0', '256', '3', '1', '1', '0', 'ljz', '10', '', 'deleterole', '3', 'deleteopera(this)', '', '2015-05-13 21:07:47');
INSERT INTO `cc_resource` VALUES ('14', '用户管理', '/admin.php/user/index', '{:U(\'/user/index\')}', 'admin', 'user', 'index', '0', '512', '2', '1', '1', '0', 'ljz', '5', 'glyphicon glyphicon-user', '', '3', '', '', '2015-05-13 21:08:53');
INSERT INTO `cc_resource` VALUES ('15', '添加', '/admin.php/user/toAdd', '{:U(\'/user/toAdd\')}', 'admin', 'user', 'toAdd', '0', '1024', '3', '1', '1', '0', 'ljz', '14', '', 'adduser', '1', 'addopera(this)', '', '2015-05-13 21:10:06');
INSERT INTO `cc_resource` VALUES ('16', '修改', '/admin.php/user/toModify', '{:U(\'/user/toModify\')}', 'admin', 'user', 'toModify', '0', '2048', '3', '1', '1', '0', 'ljz', '14', '', 'modifyuser', '2', 'modifyopera(this)', '', '2015-05-13 21:11:32');
INSERT INTO `cc_resource` VALUES ('17', '删除', '/admin.php/user/delete', '{:U(\'/user/delete\')}', 'admin', 'user', 'delete', '0', '4096', '3', '1', '1', '0', 'ljz', '14', '', 'deleteuser', '3', 'deleteopera(this)', '', '2015-05-13 21:12:30');
INSERT INTO `cc_resource` VALUES ('18', '字典管理', '', '', 'admin', null, null, '0', '8192', '1', '1', '1', '0', 'ljz', '0', 'glyphicon glyphicon-hourglass', 'dictcollapse', '2', '', '', '2015-05-13 21:13:22');
INSERT INTO `cc_resource` VALUES ('19', '类型管理', '/admin.php/dicttype/index', '{:U(\'/dicttype/index\')}', 'admin', 'dicttype', 'index', '0', '16384', '2', '1', '1', '0', 'ljz', '18', 'glyphicon glyphicon-equalizer', '', '1', '', '', '2015-05-13 21:15:45');
INSERT INTO `cc_resource` VALUES ('20', '添加', '/admin.php/dicttype/toAdd', '{:U(\'/dicttype/toAdd\')}', 'admin', 'dicttype', 'toAdd', '0', '32768', '3', '1', '1', '0', 'ljz', '19', '', 'adddicttype', '1', 'addopera(this)', '', '2015-05-13 21:17:05');
INSERT INTO `cc_resource` VALUES ('21', '修改', '/admin.php/dicttype/toModify', '{:U(\'/dicttype/toModify\')}', 'admin', 'dicttype', 'toModify', '0', '65536', '3', '1', '1', '0', 'ljz', '19', '', 'modifydicttype', '2', 'modifyopera(this)', '', '2015-05-13 21:18:14');
INSERT INTO `cc_resource` VALUES ('22', '删除', '/admin.php/dicttype/delete', '{:U(\'/dicttype/delete\')}', 'admin', 'dicttype', 'delete', '0', '131072', '3', '1', '1', '0', 'ljz', '19', '', 'deletedicttype', '3', 'deleteopera(this)', '', '2015-05-13 21:19:17');
INSERT INTO `cc_resource` VALUES ('23', '内容管理', '/admin.php/dict/index', '{:U(\'/dict/index\')}', 'admin', 'dict', 'index', '0', '262144', '2', '1', '1', '0', 'ljz', '18', 'glyphicon glyphicon-queen', '', '2', '', '', '2015-05-13 21:25:28');
INSERT INTO `cc_resource` VALUES ('24', '添加', '/admin.php/dict/toAdd', '{:U(\'/dict/toAdd\')}', 'admin', 'dict', 'toAdd', '0', '524288', '3', '1', '1', '0', 'ljz', '23', '', 'adddict', '1', 'addopera(this)', '', '2015-05-13 21:28:38');
INSERT INTO `cc_resource` VALUES ('25', '修改', '/admin.php/dict/toModify', '{:U(\'/dict/toModify\')}', 'admin', 'dict', 'toModify', '0', '1048576', '3', '1', '1', '0', 'ljz', '23', '', 'modifydict', '2', 'modifyopera(this)', '', '2015-05-13 21:30:44');
INSERT INTO `cc_resource` VALUES ('26', '删除', '/admin.php/dict/delete', '{:U(\'/dict/delete\')}', 'admin', 'dict', 'delete', '0', '2097152', '3', '1', '1', '0', 'ljz', '23', '', 'deletedict', '3', 'deleteopera(this)', '', '2015-05-13 21:34:58');
INSERT INTO `cc_resource` VALUES ('27', '地址管理', '', '', 'admin', null, null, '0', '4194304', '1', '1', '1', '0', 'ljz', '0', 'glyphicon glyphicon-map-marker', 'addrcollapse', '3', '', '', '2015-05-13 21:37:39');
INSERT INTO `cc_resource` VALUES ('28', '省级管理', '/admin.php/province/index', '{:U(\'/province/index\')}', 'admin', 'province', 'index', '0', '8388608', '2', '1', '1', '0', 'ljz', '27', 'glyphicon glyphicon-th-large', '', '1', '', '', '2015-05-13 21:40:46');
INSERT INTO `cc_resource` VALUES ('29', '添加', '/admin.php/province/toAdd', '{:U(\'/province/toAdd\')}', 'admin', 'province', 'toAdd', '0', '16777216', '3', '1', '1', '0', 'ljz', '28', '', 'addprovince', '1', 'addopera(this)', '', '2015-05-13 21:42:38');
INSERT INTO `cc_resource` VALUES ('30', '修改', '/admin.php/province/toModify', '{:U(\'/province/toModify\')}', 'admin', 'province', 'toModify', '0', '33554432', '3', '1', '1', '0', 'ljz', '28', '', 'modifyprovince', '2', 'modifyopera(this)', '', '2015-05-13 21:45:04');
INSERT INTO `cc_resource` VALUES ('31', '删除', '/admin.php/province/delete', '{:U(\'/province/delete\')}', 'admin', 'province', 'delete', '0', '67108864', '3', '1', '1', '0', 'ljz', '28', '', 'deleteprovince', '3', 'deleteopera(this)', '', '2015-05-13 21:46:15');
INSERT INTO `cc_resource` VALUES ('32', '市级管理', '/admin.php/city/index', '{:U(\'/city/index\')}', 'admin', 'city', 'index', '0', '134217728', '2', '1', '1', '0', 'ljz', '27', 'glyphicon glyphicon-th-list', '', '2', '', '', '2015-05-13 21:47:34');
INSERT INTO `cc_resource` VALUES ('33', '添加', '/admin.php/city/toAdd', '{:U(\'/city/toAdd\')}', 'admin', 'city', 'toAdd', '0', '268435456', '3', '1', '1', '0', 'ljz', '32', '', 'addcity', '1', 'addopera(this)', '', '2015-05-13 21:49:12');
INSERT INTO `cc_resource` VALUES ('34', '修改', '/admin.php/city/toModify', '{:U(\'/city/toModify\')}', 'admin', 'city', 'toModify', '1', '1', '3', '1', '1', '0', 'ljz', '32', '', 'modifycity', '2', 'modifyopera(this)', '', '2015-05-13 21:50:31');
INSERT INTO `cc_resource` VALUES ('35', '删除', '/admin.php/city/delete', '{:U(\'/city/delete\')}', 'admin', 'city', 'delete', '1', '2', '3', '1', '1', '0', 'ljz', '32', '', 'deletecity', '3', 'deleteopera(this)', '', '2015-05-13 21:51:45');
INSERT INTO `cc_resource` VALUES ('36', '区县管理', '/admin.php/county/index', '{:U(\'/county/index\')}', 'admin', 'county', 'index', '1', '4', '2', '1', '1', '0', 'ljz', '27', 'glyphicon glyphicon-th', '', '3', '', '', '2015-05-13 21:53:00');
INSERT INTO `cc_resource` VALUES ('37', '添加', '/admin.php/county/toAdd', '{:U(\'/county/toAdd\')}', 'admin', 'county', 'toAdd', '1', '8', '3', '1', '1', '0', 'ljz', '36', '', 'addcounty', '1', 'addopera(this)', '', '2015-05-13 21:55:22');
INSERT INTO `cc_resource` VALUES ('38', '修改', '/admin.php/county/toModify', '{:U(\'/county/toModify\')}', 'admin', 'county', 'toModify', '1', '16', '3', '1', '1', '0', 'ljz', '36', '', 'modifycounty', '2', 'modifyopera(this)', '', '2015-05-13 21:56:25');
INSERT INTO `cc_resource` VALUES ('39', '删除', '/admin.php/county/delete', '{:U(\'/county/delete\')}', 'admin', 'county', 'delete', '1', '32', '3', '1', '1', '0', 'ljz', '36', '', 'deletecounty', '3', 'deleteopera(this)', '', '2015-05-13 21:57:46');
INSERT INTO `cc_resource` VALUES ('40', '授权', '/admin.php/role/authRole', '{:U(\'/role/authRole\')}', 'admin', 'role', 'authRole', '1', '64', '3', '1', '1', '0', 'ljz', '10', '', 'authrole', '4', 'authrole(this)', '', '2015-05-14 10:06:32');
INSERT INTO `cc_resource` VALUES ('41', '分配角色', '/admin.php/user/toDistRole', '{:U(\'/user/toDistRole\')}', 'admin', 'user', 'toDistRole', '1', '128', '3', '1', '1', '0', 'ljz', '14', '', 'distrole', '4', 'distrole(this)', '', '2015-05-14 10:44:13');

-- ----------------------------
-- Table structure for cc_role
-- ----------------------------
DROP TABLE IF EXISTS `cc_role`;
CREATE TABLE `cc_role` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `rolename` varchar(32) NOT NULL COMMENT '角色名称',
  `rolecode` varchar(16) NOT NULL COMMENT '角色编码',
  `roledesc` varchar(255) DEFAULT NULL COMMENT '描述',
  `createtime` datetime DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cc_role
-- ----------------------------
INSERT INTO `cc_role` VALUES ('1', '超级管理员', '1010', '', '2015-05-13 16:19:50');
INSERT INTO `cc_role` VALUES ('2', '权限管理员', '1212', '', '2015-05-13 16:21:16');
INSERT INTO `cc_role` VALUES ('4', '字典管理员', '1313', '', '2015-05-14 09:36:51');
INSERT INTO `cc_role` VALUES ('5', '地址管理员', '1515', '', '2015-05-14 11:15:56');

-- ----------------------------
-- Table structure for cc_role_resource
-- ----------------------------
DROP TABLE IF EXISTS `cc_role_resource`;
CREATE TABLE `cc_role_resource` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `roleid` int(11) unsigned NOT NULL,
  `resourceid` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_roleresource_resourceid` (`resourceid`),
  KEY `fk_roleresource_roleid` (`roleid`),
  CONSTRAINT `fk_roleresource_resourceid` FOREIGN KEY (`resourceid`) REFERENCES `cc_resource` (`id`),
  CONSTRAINT `fk_roleresource_roleid` FOREIGN KEY (`roleid`) REFERENCES `cc_role` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=388 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cc_role_resource
-- ----------------------------
INSERT INTO `cc_role_resource` VALUES ('277', '1', '11');
INSERT INTO `cc_role_resource` VALUES ('278', '1', '12');
INSERT INTO `cc_role_resource` VALUES ('279', '1', '13');
INSERT INTO `cc_role_resource` VALUES ('280', '1', '14');
INSERT INTO `cc_role_resource` VALUES ('281', '1', '15');
INSERT INTO `cc_role_resource` VALUES ('282', '1', '16');
INSERT INTO `cc_role_resource` VALUES ('283', '1', '5');
INSERT INTO `cc_role_resource` VALUES ('284', '1', '6');
INSERT INTO `cc_role_resource` VALUES ('285', '1', '7');
INSERT INTO `cc_role_resource` VALUES ('286', '1', '8');
INSERT INTO `cc_role_resource` VALUES ('287', '1', '9');
INSERT INTO `cc_role_resource` VALUES ('288', '1', '10');
INSERT INTO `cc_role_resource` VALUES ('289', '1', '17');
INSERT INTO `cc_role_resource` VALUES ('290', '1', '18');
INSERT INTO `cc_role_resource` VALUES ('291', '1', '19');
INSERT INTO `cc_role_resource` VALUES ('292', '1', '20');
INSERT INTO `cc_role_resource` VALUES ('293', '1', '21');
INSERT INTO `cc_role_resource` VALUES ('294', '1', '22');
INSERT INTO `cc_role_resource` VALUES ('295', '1', '23');
INSERT INTO `cc_role_resource` VALUES ('296', '1', '24');
INSERT INTO `cc_role_resource` VALUES ('297', '1', '25');
INSERT INTO `cc_role_resource` VALUES ('298', '1', '26');
INSERT INTO `cc_role_resource` VALUES ('299', '1', '27');
INSERT INTO `cc_role_resource` VALUES ('300', '1', '28');
INSERT INTO `cc_role_resource` VALUES ('301', '1', '29');
INSERT INTO `cc_role_resource` VALUES ('302', '1', '30');
INSERT INTO `cc_role_resource` VALUES ('303', '1', '31');
INSERT INTO `cc_role_resource` VALUES ('304', '1', '32');
INSERT INTO `cc_role_resource` VALUES ('305', '1', '33');
INSERT INTO `cc_role_resource` VALUES ('306', '1', '34');
INSERT INTO `cc_role_resource` VALUES ('307', '1', '35');
INSERT INTO `cc_role_resource` VALUES ('308', '1', '36');
INSERT INTO `cc_role_resource` VALUES ('309', '1', '37');
INSERT INTO `cc_role_resource` VALUES ('310', '1', '38');
INSERT INTO `cc_role_resource` VALUES ('311', '1', '39');
INSERT INTO `cc_role_resource` VALUES ('312', '1', '40');
INSERT INTO `cc_role_resource` VALUES ('313', '1', '41');
INSERT INTO `cc_role_resource` VALUES ('329', '2', '5');
INSERT INTO `cc_role_resource` VALUES ('330', '2', '6');
INSERT INTO `cc_role_resource` VALUES ('331', '2', '7');
INSERT INTO `cc_role_resource` VALUES ('332', '2', '8');
INSERT INTO `cc_role_resource` VALUES ('333', '2', '9');
INSERT INTO `cc_role_resource` VALUES ('334', '2', '10');
INSERT INTO `cc_role_resource` VALUES ('335', '2', '11');
INSERT INTO `cc_role_resource` VALUES ('336', '2', '12');
INSERT INTO `cc_role_resource` VALUES ('337', '2', '13');
INSERT INTO `cc_role_resource` VALUES ('338', '2', '14');
INSERT INTO `cc_role_resource` VALUES ('339', '2', '15');
INSERT INTO `cc_role_resource` VALUES ('340', '2', '16');
INSERT INTO `cc_role_resource` VALUES ('341', '2', '17');
INSERT INTO `cc_role_resource` VALUES ('342', '2', '41');
INSERT INTO `cc_role_resource` VALUES ('343', '2', '40');
INSERT INTO `cc_role_resource` VALUES ('353', '4', '18');
INSERT INTO `cc_role_resource` VALUES ('354', '4', '19');
INSERT INTO `cc_role_resource` VALUES ('355', '4', '20');
INSERT INTO `cc_role_resource` VALUES ('356', '4', '21');
INSERT INTO `cc_role_resource` VALUES ('357', '4', '22');
INSERT INTO `cc_role_resource` VALUES ('358', '4', '23');
INSERT INTO `cc_role_resource` VALUES ('359', '4', '24');
INSERT INTO `cc_role_resource` VALUES ('360', '4', '25');
INSERT INTO `cc_role_resource` VALUES ('361', '4', '26');
INSERT INTO `cc_role_resource` VALUES ('375', '5', '27');
INSERT INTO `cc_role_resource` VALUES ('376', '5', '28');
INSERT INTO `cc_role_resource` VALUES ('377', '5', '29');
INSERT INTO `cc_role_resource` VALUES ('378', '5', '30');
INSERT INTO `cc_role_resource` VALUES ('379', '5', '31');
INSERT INTO `cc_role_resource` VALUES ('380', '5', '32');
INSERT INTO `cc_role_resource` VALUES ('381', '5', '33');
INSERT INTO `cc_role_resource` VALUES ('382', '5', '34');
INSERT INTO `cc_role_resource` VALUES ('383', '5', '35');
INSERT INTO `cc_role_resource` VALUES ('384', '5', '36');
INSERT INTO `cc_role_resource` VALUES ('385', '5', '37');
INSERT INTO `cc_role_resource` VALUES ('386', '5', '38');
INSERT INTO `cc_role_resource` VALUES ('387', '5', '39');

-- ----------------------------
-- Table structure for cc_user
-- ----------------------------
DROP TABLE IF EXISTS `cc_user`;
CREATE TABLE `cc_user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `loginname` varchar(16) NOT NULL COMMENT '用户名',
  `password` varchar(32) NOT NULL COMMENT '密码',
  `username` varchar(16) DEFAULT NULL COMMENT '姓名',
  `nickname` varchar(16) NOT NULL COMMENT '昵称',
  `email` varchar(32) DEFAULT NULL COMMENT '邮箱',
  `gender` tinyint(1) DEFAULT NULL COMMENT '性别',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态',
  `superflag` tinyint(1) NOT NULL COMMENT '是否为超级管理员',
  `birthday` date DEFAULT NULL,
  `createtime` datetime DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cc_user
-- ----------------------------
INSERT INTO `cc_user` VALUES ('1', 'ljz', 'ljz', '刘吉忠', '吉', '1906612592@qq.com', '1', '1', '1', '2015-05-12', '2015-05-13 15:26:49');
INSERT INTO `cc_user` VALUES ('2', 'liujizhong', 'liujizhong', '刘吉忠', '吉', '1906612592@qq.com', '1', '1', '0', '2015-05-01', '2015-05-13 15:35:17');

-- ----------------------------
-- Table structure for cc_user_role
-- ----------------------------
DROP TABLE IF EXISTS `cc_user_role`;
CREATE TABLE `cc_user_role` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `userid` int(11) unsigned DEFAULT NULL,
  `roleid` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_userrole_userid` (`userid`),
  KEY `fk_userrole_roleid` (`roleid`),
  CONSTRAINT `fk_userrole_roleid` FOREIGN KEY (`roleid`) REFERENCES `cc_role` (`id`),
  CONSTRAINT `fk_userrole_userid` FOREIGN KEY (`userid`) REFERENCES `cc_user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cc_user_role
-- ----------------------------
INSERT INTO `cc_user_role` VALUES ('13', '1', '1');
INSERT INTO `cc_user_role` VALUES ('15', '2', '5');
