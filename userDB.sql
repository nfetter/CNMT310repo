
DROP TABLE IF EXISTS user;
DROP TABLE IF EXISTS role;
DROP TABLE IF EXISTS user2role;

CREATE TABLE user (
id int not null primary key auto_increment,
username varchar(255),
userpass varchar(255),
email varchar(255),
creationdate datetime,
realname varchar(255),
userstatus varchar(255)
);

CREATE TABLE role (
id int not null primary key auto_increment,
rolename varchar(255)
);

CREATE TABLE user2role (
id int not null primary key auto_increment,
userid int,
roleid int
);


/*Both passwords are Password*/
INSERT INTO user (username,userpass,email,creationdate,realname,userstatus) VALUES ('test','$2y$10$p01yGzl8HLCG2lVx.59yCOEZZ7MG.dgdRGoT.iQNpyDwMEmqbJJOS','test@example.com',now(),'User Jones','A');
INSERT INTO user (username,userpass,email,creationdate,realname,userstatus) VALUES ('admin','$2y$10$p01yGzl8HLCG2lVx.59yCOEZZ7MG.dgdRGoT.iQNpyDwMEmqbJJOS','admin@example.com',now(),'Admin Smith','A');
INSERT INTO role (rolename) VALUES ('admin');
INSERT INTO role (rolename) VALUES ('user');
INSERT INTO user2role (userid,roleid) VALUES (1,2);
INSERT INTO user2role (userid,roleid) VALUES (2,1);


/* Test - THIS IS INCORRECT FOR MOST USES 
SELECT rolename FROM role,user2role,user WHERE username = 'test@example.com';
*/

/* Join all three tables.
SELECT role.rolename,user.userpass,user.userstatus,user.realname,user.email FROM role,user2role,user WHERE username = 'test@example.com' AND user.id = user2role.userid AND role.id = user2role.roleid;
*/