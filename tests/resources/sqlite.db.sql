CREATE TABLE IF NOT EXISTS `settings` (
	`key`	TEXT NOT NULL,
	`value`	TEXT NOT NULL,
	PRIMARY KEY(`key`)
);
INSERT INTO `settings` (key,value) VALUES ('authmode','open');
INSERT INTO `settings` (key,value) VALUES ('ipwl','192.168.*.*');
INSERT INTO `settings` (key,value) VALUES ('sqliteonly','false');
