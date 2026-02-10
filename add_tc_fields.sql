-- 为 h_saishi 表添加体彩玩法字段
ALTER TABLE `h_saishi`
ADD COLUMN `enable_play_spf` tinyint(1) NOT NULL DEFAULT '0' COMMENT '启用胜负平玩法',
ADD COLUMN `spf_home_odds` decimal(10,2) DEFAULT '0.00' COMMENT '主胜赔率',
ADD COLUMN `spf_draw_odds` decimal(10,2) DEFAULT '0.00' COMMENT '平局赔率',
ADD COLUMN `spf_away_odds` decimal(10,2) DEFAULT '0.00' COMMENT '客胜赔率',
ADD COLUMN `enable_play_jinqiu` tinyint(1) NOT NULL DEFAULT '0' COMMENT '启用总进球数玩法',
ADD COLUMN `jq_0` decimal(10,2) DEFAULT '0.00' COMMENT '0球赔率',
ADD COLUMN `jq_1` decimal(10,2) DEFAULT '0.00' COMMENT '1球赔率',
ADD COLUMN `jq_2` decimal(10,2) DEFAULT '0.00' COMMENT '2球赔率',
ADD COLUMN `jq_3` decimal(10,2) DEFAULT '0.00' COMMENT '3球赔率',
ADD COLUMN `jq_4` decimal(10,2) DEFAULT '0.00' COMMENT '4球赔率',
ADD COLUMN `jq_5` decimal(10,2) DEFAULT '0.00' COMMENT '5球赔率',
ADD COLUMN `jq_6` decimal(10,2) DEFAULT '0.00' COMMENT '6球赔率',
ADD COLUMN `jq_7` decimal(10,2) DEFAULT '0.00' COMMENT '7球以上赔率',
ADD COLUMN `enable_play_bifen` tinyint(1) NOT NULL DEFAULT '0' COMMENT '启用比分玩法',
ADD COLUMN `bifen_odds` text COMMENT '比分赔率数据';
