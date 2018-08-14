#
# Table structure for table 'fe_users'
#
CREATE TABLE fe_users (

	ten varchar(255) DEFAULT '' NOT NULL,
	mieuta text NOT NULL,
	tailieu int(11) unsigned NOT NULL default '0',
	diachi varchar(255) DEFAULT '' NOT NULL,
	sonha int(11) DEFAULT '0' NOT NULL,
	email varchar(255) DEFAULT '' NOT NULL,
	dienthoai varchar(255) DEFAULT '' NOT NULL,
	lienhe varchar(255) DEFAULT '' NOT NULL,
	emaillienhe varchar(255) DEFAULT '' NOT NULL,
	trangweb varchar(255) DEFAULT '' NOT NULL,
	kategorienghanh int(11) unsigned DEFAULT '0' NOT NULL,
	unterkategorienganh int(11) unsigned DEFAULT '0' NOT NULL,
	tinhthanhpho int(11) unsigned DEFAULT '0' NOT NULL,
	quanhuyen int(11) unsigned DEFAULT '0' NOT NULL,
	phuongxa int(11) unsigned DEFAULT '0' NOT NULL,
	duongpho int(11) unsigned DEFAULT '0' NOT NULL,
	danhgia int(11) unsigned DEFAULT '0' NOT NULL,
	mautin int(11) unsigned DEFAULT '0' NOT NULL,
	thotimviec int(11) unsigned DEFAULT '0' NOT NULL,
	viectimtho int(11) unsigned DEFAULT '0' NOT NULL,
	tintuyendung int(11) unsigned DEFAULT '0' NOT NULL,
	tintimviec int(11) unsigned DEFAULT '0' NOT NULL,
        feright int(11) unsigned DEFAULT '0' NOT NULL,

	tx_extbase_type varchar(255) DEFAULT '' NOT NULL,

);

#
# Table structure for table 'tx_thosuachua_domain_model_tinhthanhpho'
#
CREATE TABLE tx_thosuachua_domain_model_tinhthanhpho (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	ten varchar(255) DEFAULT '' NOT NULL,
	maso int(11) DEFAULT '0' NOT NULL,
	map varchar(255) DEFAULT '' NOT NULL,
	quanhuyen int(11) unsigned DEFAULT '0' NOT NULL,
	nhomtho int(11) unsigned DEFAULT '0' NOT NULL,
  tintimviec int(11) unsigned DEFAULT '0' NOT NULL,


	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,
	sorting int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
 KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_thosuachua_domain_model_quanhuyen'
#
CREATE TABLE tx_thosuachua_domain_model_quanhuyen (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	tinhthanhpho int(11) unsigned DEFAULT '0' NOT NULL,

	ten varchar(255) DEFAULT '' NOT NULL,
	maso int(11) DEFAULT '0' NOT NULL,
	map varchar(255) DEFAULT '' NOT NULL,
	phuongxa int(11) unsigned DEFAULT '0' NOT NULL,
	nhomtho int(11) unsigned DEFAULT '0' NOT NULL,
	tintimviec int(11) unsigned DEFAULT '0' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,
	sorting int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
 KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_thosuachua_domain_model_phuongxa'
#
CREATE TABLE tx_thosuachua_domain_model_phuongxa (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	quanhuyen int(11) unsigned DEFAULT '0' NOT NULL,

	ten varchar(255) DEFAULT '' NOT NULL,
	maso int(11) DEFAULT '0' NOT NULL,
	map varchar(255) DEFAULT '' NOT NULL,
	nhomtho int(11) unsigned DEFAULT '0' NOT NULL,
	duongpho int(11) unsigned DEFAULT '0' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,
	sorting int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
 KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_thosuachua_domain_model_duongpho'
#
CREATE TABLE tx_thosuachua_domain_model_duongpho (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	phuongxa int(11) unsigned DEFAULT '0' NOT NULL,

	ten varchar(255) DEFAULT '' NOT NULL,
	map varchar(255) DEFAULT '' NOT NULL,
	sonha varchar(255) DEFAULT '' NOT NULL,
	phuongxa int(11) unsigned DEFAULT '0',
	nhomtho int(11) unsigned DEFAULT '0' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,
	sorting int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
 KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_thosuachua_domain_model_kategorienganh'
#
CREATE TABLE tx_thosuachua_domain_model_kategorienganh (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	ten varchar(255) DEFAULT '' NOT NULL,
	mieuta text NOT NULL,
	unterkategorie int(11) unsigned DEFAULT '0' NOT NULL,
	tintimviec int(11) unsigned DEFAULT '0' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,
	sorting int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
 KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_thosuachua_domain_model_unterkategorienganh'
#
CREATE TABLE tx_thosuachua_domain_model_unterkategorienganh (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	kategorienganh int(11) unsigned DEFAULT '0' NOT NULL,

	ten varchar(255) DEFAULT '' NOT NULL,
	mieuta text NOT NULL,
	kategorie int(11) unsigned DEFAULT '0',
	tenkhongdau varchar(255) DEFAULT '' NOT NULL,
	tintimviec int(11) unsigned DEFAULT '0' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,
	sorting int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
 KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_thosuachua_domain_model_danhgia'
#
CREATE TABLE tx_thosuachua_domain_model_danhgia (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	nhomtho int(11) unsigned DEFAULT '0' NOT NULL,
	thotimviec int(11) unsigned DEFAULT '0' NOT NULL,
	viectimtho int(11) unsigned DEFAULT '0' NOT NULL,
	tintuyendung int(11) unsigned DEFAULT '0' NOT NULL,

	danhgia text NOT NULL,
	sosao varchar(255) DEFAULT '' NOT NULL,
	nhomtho int(11) unsigned DEFAULT '0',

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,
	sorting int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
 KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_thosuachua_domain_model_mautin'
#
CREATE TABLE tx_thosuachua_domain_model_mautin (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	nhomtho int(11) unsigned DEFAULT '0' NOT NULL,

	title varchar(255) DEFAULT '' NOT NULL,
	noidung text NOT NULL,
	hinhanh int(11) unsigned NOT NULL default '0',
	link varchar(255) DEFAULT '' NOT NULL,
	batdau datetime DEFAULT '0000-00-00 00:00:00',
	ketthuc datetime DEFAULT '0000-00-00 00:00:00',
	www varchar(255) DEFAULT '' NOT NULL,
	nhomtho int(11) unsigned DEFAULT '0',
	unterkategorienghanh int(11) unsigned DEFAULT '0',
	kategorienghanh int(11) unsigned DEFAULT '0',
	tinhthanhpho int(11) unsigned DEFAULT '0',
	quanhuyen int(11) unsigned DEFAULT '0',
	phuongxa int(11) unsigned DEFAULT '0',

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
 KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_thosuachua_domain_model_thotimviec'
#
CREATE TABLE tx_thosuachua_domain_model_thotimviec (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	nhomtho int(11) unsigned DEFAULT '0' NOT NULL,

	title varchar(255) DEFAULT '' NOT NULL,
	noidung text NOT NULL,
	hinhanh int(11) unsigned NOT NULL default '0',
	tailieu int(11) unsigned NOT NULL default '0',
	tennhomtho varchar(255) DEFAULT '' NOT NULL,
	mieutacty text NOT NULL,
	diachi varchar(255) DEFAULT '' NOT NULL,
	email varchar(255) DEFAULT '' NOT NULL,
	phone varchar(255) DEFAULT '' NOT NULL,
	fax varchar(255) DEFAULT '' NOT NULL,
	www varchar(255) DEFAULT '' NOT NULL,
	lienhe varchar(255) DEFAULT '' NOT NULL,
	batdau datetime DEFAULT '0000-00-00 00:00:00',
	ketthuc datetime DEFAULT '0000-00-00 00:00:00',
	batdauvalue varchar(255) DEFAULT '' NOT NULL,
	ketthucvalue varchar(255) DEFAULT '' NOT NULL,
	adminstrator int(11) unsigned DEFAULT '0',
	kategorienganh int(11) unsigned DEFAULT '0' NOT NULL,
	unterkategorienganh int(11) unsigned DEFAULT '0' NOT NULL,
	tinhthanhpho int(11) unsigned DEFAULT '0' NOT NULL,
	quanhuyen int(11) unsigned DEFAULT '0' NOT NULL,
	danhgia int(11) unsigned DEFAULT '0' NOT NULL,
	kategorie int(11) DEFAULT '0' NOT NULL,
	unterkategorie int(11) DEFAULT '0' NOT NULL,
	unterkategorie2  varchar(255) DEFAULT '' NOT NULL,
	tinhthanhpho1 int(11) DEFAULT '0' NOT NULL,
	tinhthanhpho2  varchar(255) DEFAULT '' NOT NULL,
	quanhuyen1 int(11) DEFAULT '0' NOT NULL,
  quanhuyen2  varchar(255) DEFAULT '' NOT NULL,
	admin int(11) DEFAULT '0' NOT NULL,


	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
        hidden1 tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
 KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_thosuachua_domain_model_viectimtho'
#
CREATE TABLE tx_thosuachua_domain_model_viectimtho (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	nhomtho int(11) unsigned DEFAULT '0' NOT NULL,

	title varchar(255) DEFAULT '' NOT NULL,
	noidung text NOT NULL,
	hinhanh int(11) unsigned NOT NULL default '0',
	tailieu int(11) unsigned NOT NULL default '0',
	tennguoitim varchar(255) DEFAULT '' NOT NULL,
	mieutacongviec text NOT NULL,
	diachi varchar(255) DEFAULT '' NOT NULL,
	email varchar(255) DEFAULT '' NOT NULL,
	phone varchar(255) DEFAULT '' NOT NULL,
	fax varchar(255) DEFAULT '' NOT NULL,
	www varchar(255) DEFAULT '' NOT NULL,
	lienhe varchar(255) DEFAULT '' NOT NULL,
	batdau varchar(255) DEFAULT '' NOT NULL,
	ketthuc varchar(255) DEFAULT '' NOT NULL,
	kategorie int(11) DEFAULT '0' NOT NULL,
	unterkategorie int(11) DEFAULT '0' NOT NULL,
	tinhthanhpho1 int(11) DEFAULT '0' NOT NULL,
	quanhuyen1 int(11) DEFAULT '0' NOT NULL,
	adminstrator int(11) unsigned DEFAULT '0',
	kategorienganh int(11) unsigned DEFAULT '0' NOT NULL,
	unterkategorienganh int(11) unsigned DEFAULT '0' NOT NULL,
	tinhthanhpho int(11) unsigned DEFAULT '0' NOT NULL,
	quanhuyen int(11) unsigned DEFAULT '0' NOT NULL,
	danhgia int(11) unsigned DEFAULT '0' NOT NULL,
	admin int(11) DEFAULT '0' NOT NULL,


	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
        hidden1 tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
 KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_thosuachua_domain_model_tintuyendung'
#
CREATE TABLE tx_thosuachua_domain_model_tintuyendung (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	nhomtho int(11) unsigned DEFAULT '0' NOT NULL,

	title varchar(255) DEFAULT '' NOT NULL,
	noidung text NOT NULL,
	hinhanh int(11) unsigned NOT NULL default '0',
	tailieu int(11) unsigned NOT NULL default '0',
	tennhatuyendung varchar(255) DEFAULT '' NOT NULL,
	mieutacty text NOT NULL,
	diachi varchar(255) DEFAULT '' NOT NULL,
	email varchar(255) DEFAULT '' NOT NULL,
	phone varchar(255) DEFAULT '' NOT NULL,
	fax varchar(255) DEFAULT '' NOT NULL,
	www varchar(255) DEFAULT '' NOT NULL,
	lienhe varchar(255) DEFAULT '' NOT NULL,
	batdau varchar(255) DEFAULT '' NOT NULL,
	ketthuc varchar(255) DEFAULT '' NOT NULL,
	adminstrator int(11) unsigned DEFAULT '0',
	tinhthanhpho int(11) unsigned DEFAULT '0' NOT NULL,
	quanhuyen int(11) unsigned DEFAULT '0' NOT NULL,
	kategorienganh int(11) unsigned DEFAULT '0' NOT NULL,
	unterkategorienganh int(11) unsigned DEFAULT '0' NOT NULL,
	danhgia int(11) unsigned DEFAULT '0' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
        hidden1 tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
 KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_thosuachua_domain_model_tintimviec'
#
CREATE TABLE tx_thosuachua_domain_model_tintimviec (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	nhomtho int(11) unsigned DEFAULT '0' NOT NULL,
		tinhthanhpho int(11) unsigned DEFAULT '0' NOT NULL,
	quanhuyen int(11) unsigned DEFAULT '0' NOT NULL,
	kategorienganh int(11) unsigned DEFAULT '0' NOT NULL,
	unterkategorienganh int(11) unsigned DEFAULT '0' NOT NULL,


	title varchar(255) DEFAULT '' NOT NULL,
	noidung text NOT NULL,
	hinhanh int(11) unsigned NOT NULL default '0',
	tailieu int(11) unsigned NOT NULL default '0',
	tennguoitim varchar(255) DEFAULT '' NOT NULL,
	mieutacanhan text NOT NULL,
	diachi varchar(255) DEFAULT '' NOT NULL,
	lienhe varchar(255) DEFAULT '' NOT NULL,
	phone varchar(255) DEFAULT '' NOT NULL,
	fax varchar(255) DEFAULT '' NOT NULL,
	email varchar(255) DEFAULT '' NOT NULL,
	www varchar(255) DEFAULT '' NOT NULL,
	batdau varchar(255) DEFAULT '' NOT NULL,
	ketthuc varchar(255) DEFAULT '' NOT NULL,
	administrator int(11) unsigned DEFAULT '0',
	kategorienganh int(11) unsigned DEFAULT '0' NOT NULL,
	unterkategorienganh int(11) unsigned DEFAULT '0' NOT NULL,
	tinhthanhpho int(11) unsigned DEFAULT '0' NOT NULL,
	quanhuyen int(11) unsigned DEFAULT '0' NOT NULL,
	doituong int(11) DEFAULT '0' NOT NULL,
	loaitin int(11) DEFAULT '0' NOT NULL,
	admin int(11) DEFAULT '0' NOT NULL,
	kategorie int(11) DEFAULT '0' NOT NULL,
	unterkategorie int(11) DEFAULT '0' NOT NULL,
	thanhpho int(11) DEFAULT '0' NOT NULL,
	quanhuyen1 int(11) DEFAULT '0' NOT NULL,



	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
  hidden1 tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
 KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_thosuachua_domain_model_danhgia'
#
CREATE TABLE tx_thosuachua_domain_model_danhgia (

	nhomtho  int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_thosuachua_domain_model_mautin'
#
CREATE TABLE tx_thosuachua_domain_model_mautin (

	nhomtho  int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_thosuachua_domain_model_thotimviec'
#
CREATE TABLE tx_thosuachua_domain_model_thotimviec (

	nhomtho  int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_thosuachua_domain_model_viectimtho'
#
CREATE TABLE tx_thosuachua_domain_model_viectimtho (

	nhomtho  int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_thosuachua_domain_model_tintuyendung'
#
CREATE TABLE tx_thosuachua_domain_model_tintuyendung (

	nhomtho  int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_thosuachua_domain_model_tintimviec'
#
CREATE TABLE tx_thosuachua_domain_model_tintimviec (

	nhomtho  int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_thosuachua_domain_model_tintimviec'
#
CREATE TABLE tx_thosuachua_domain_model_tintimviec (

	tinhthanhpho  int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_thosuachua_domain_model_tintimviec'
#
CREATE TABLE tx_thosuachua_domain_model_tintimviec (

	quanhuyen  int(11) unsigned DEFAULT '0' NOT NULL,

);
#
# Table structure for table 'tx_thosuachua_domain_model_tintimviec'
#
CREATE TABLE tx_thosuachua_domain_model_tintimviec (

	kategorienganh  int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_thosuachua_domain_model_tintimviec'
#
CREATE TABLE tx_thosuachua_domain_model_tintimviec (

	unterkategorienganh  int(11) unsigned DEFAULT '0' NOT NULL,

);
#
# Table structure for table 'tx_thosuachua_nhomtho_kategorienganh_mm'
#
CREATE TABLE tx_thosuachua_nhomtho_kategorienganh_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_thosuachua_nhomtho_unterkategorienganh_mm'
#
CREATE TABLE tx_thosuachua_nhomtho_unterkategorienganh_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_thosuachua_nhomtho_tinhthanhpho_mm'
#
CREATE TABLE tx_thosuachua_nhomtho_tinhthanhpho_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_thosuachua_nhomtho_quanhuyen_mm'
#
CREATE TABLE tx_thosuachua_nhomtho_quanhuyen_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_thosuachua_nhomtho_phuongxa_mm'
#
CREATE TABLE tx_thosuachua_nhomtho_phuongxa_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_thosuachua_nhomtho_duongpho_mm'
#
CREATE TABLE tx_thosuachua_nhomtho_duongpho_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_thosuachua_domain_model_quanhuyen'
#
CREATE TABLE tx_thosuachua_domain_model_quanhuyen (

	tinhthanhpho  int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_thosuachua_tinhthanhpho_nhomtho_mm'
#
CREATE TABLE tx_thosuachua_tinhthanhpho_nhomtho_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_thosuachua_domain_model_phuongxa'
#
CREATE TABLE tx_thosuachua_domain_model_phuongxa (

	quanhuyen  int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_thosuachua_quanhuyen_nhomtho_mm'
#
CREATE TABLE tx_thosuachua_quanhuyen_nhomtho_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_thosuachua_domain_model_duongpho'
#
CREATE TABLE tx_thosuachua_domain_model_duongpho (

	phuongxa  int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_thosuachua_phuongxa_nhomtho_mm'
#
CREATE TABLE tx_thosuachua_phuongxa_nhomtho_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_thosuachua_duongpho_nhomtho_mm'
#
CREATE TABLE tx_thosuachua_duongpho_nhomtho_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_thosuachua_domain_model_unterkategorienganh'
#
CREATE TABLE tx_thosuachua_domain_model_unterkategorienganh (

	kategorienganh  int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_thosuachua_domain_model_danhgia'
#
CREATE TABLE tx_thosuachua_domain_model_danhgia (

	thotimviec  int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_thosuachua_thotimviec_kategorienganh_mm'
#
CREATE TABLE tx_thosuachua_thotimviec_kategorienganh_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_thosuachua_thotimviec_unterkategorienganh_mm'
#
CREATE TABLE tx_thosuachua_thotimviec_unterkategorienganh_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_thosuachua_thotimviec_tinhthanhpho_mm'
#
CREATE TABLE tx_thosuachua_thotimviec_tinhthanhpho_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_thosuachua_thotimviec_quanhuyen_mm'
#
CREATE TABLE tx_thosuachua_thotimviec_quanhuyen_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_thosuachua_domain_model_danhgia'
#
CREATE TABLE tx_thosuachua_domain_model_danhgia (

	viectimtho  int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_thosuachua_viectimtho_kategorienganh_mm'
#
CREATE TABLE tx_thosuachua_viectimtho_kategorienganh_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_thosuachua_viectimtho_unterkategorienganh_mm'
#
CREATE TABLE tx_thosuachua_viectimtho_unterkategorienganh_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_thosuachua_viectimtho_tinhthanhpho_mm'
#
CREATE TABLE tx_thosuachua_viectimtho_tinhthanhpho_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_thosuachua_viectimtho_quanhuyen_mm'
#
CREATE TABLE tx_thosuachua_viectimtho_quanhuyen_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_thosuachua_domain_model_danhgia'
#
CREATE TABLE tx_thosuachua_domain_model_danhgia (

	tintuyendung  int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_thosuachua_tintuyendung_tinhthanhpho_mm'
#
CREATE TABLE tx_thosuachua_tintuyendung_tinhthanhpho_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_thosuachua_tintuyendung_quanhuyen_mm'
#
CREATE TABLE tx_thosuachua_tintuyendung_quanhuyen_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_thosuachua_tintuyendung_kategorienganh_mm'
#
CREATE TABLE tx_thosuachua_tintuyendung_kategorienganh_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_thosuachua_tintuyendung_unterkategorienganh_mm'
#
CREATE TABLE tx_thosuachua_tintuyendung_unterkategorienganh_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_thosuachua_tintimviec_kategorienganh_mm'
#
CREATE TABLE tx_thosuachua_tintimviec_kategorienganh_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_thosuachua_tintimviec_unterkategorienganh_mm'
#
CREATE TABLE tx_thosuachua_tintimviec_unterkategorienganh_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_thosuachua_tintimviec_tinhthanhpho_mm'
#
CREATE TABLE tx_thosuachua_tintimviec_tinhthanhpho_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_thosuachua_tintimviec_quanhuyen_mm'
#
CREATE TABLE tx_thosuachua_tintimviec_quanhuyen_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
