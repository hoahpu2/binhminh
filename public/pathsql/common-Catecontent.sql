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

ALTER TABLE catecontent
ADD COLUMN CC_number TINYINT(4) AFTER CC_id;