SET FOREIGN_KEY_CHECKS = 0;
DROP TABLE IF EXISTS `user_review`;
SET FOREIGN_KEY_CHECKS = 1;

CREATE TABLE  user_review (
	id 			INT 			NOT NULL AUTO_INCREMENT,
	order_id 	INT 			NOT NULL ,
	product_id 	INT 			NOT NULL ,
	user_id 	INT 			NOT NULL,
	rating 		float 			NOT NULL ,
	review 		varchar(2000) 	DEFAULT NULL,
	created_at 	DATETIME DEFAULT CURRENT_TIMESTAMP,
	updated_at 	DATETIME ON UPDATE CURRENT_TIMESTAMP,

	PRIMARY KEY (`id`),
	CONSTRAINT rating_contraint check(rating >= 1 and rating <= 5)
) ENGINE = InnoDB;
