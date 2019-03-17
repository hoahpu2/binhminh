/* create table CateContent 
*	13/03/2019
*	@author	FPT.HoaNV12
*/

CREATE TABLE IF NOT EXISTS catecontent (
    CC_id INT(11) AUTO_INCREMENT PRIMARY KEY,
    CC_name VARCHAR(100) NOT NULL,
    CC_alias VARCHAR(100) NOT NULL,
    CC_status TINYINT(4) NOT NULL,
    created_at date,
    updated_at date
)  ENGINE=INNODB;

ALTER TABLE product
ADD COLUMN PR_CC_id INT(11) AFTER PR_CA_id;

/*
*	add field in category table
*	16/03/2019
*	@author	HoaNV12
 */
ALTER TABLE category
ADD COLUMN CA_number TINYINT(4) AFTER CA_parentId;
/*
*	create table customer_contact
*	17/03/2019
*	@author	anhvan
 */
CREATE TABLE IF NOT EXISTS customer_contact (
    CU_id INT(11) AUTO_INCREMENT PRIMARY KEY,
    CU_name VARCHAR(100) NOT NULL,
    CU_title VARCHAR(100) NOT NULL,
    CU_address VARCHAR(100) ,
    CU_phone VARCHAR(100) NOT NULL ,
    CU_email VARCHAR(100) ,
    CU_content TEXT,
    CC_status TINYINT(4) default 1,
    created_at date,
    updated_at date
)  ENGINE=INNODB;

/*
*	create table news
*	17/03/2019
*	@author	anhvan
 */
CREATE TABLE IF NOT EXISTS news (
    N_id INT(11) AUTO_INCREMENT PRIMARY KEY,
    N_title VARCHAR(100) NOT NULL,
    N_avatar VARCHAR(255) NOT NULL,
    N_content TEXT,
    N_alias VARCHAR(100) NOT NULL,
    N_status TINYINT(4) default 1,
    created_at date,
    updated_at date
)  ENGINE=INNODB;
