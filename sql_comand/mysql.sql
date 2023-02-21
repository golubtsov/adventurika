CREATE TABLE users( 
    id int, 
    fname varchar(100), 
    lname varchar(100), 
    email varchar(100), 
    pass varchar(100) 
);

CREATE TABLE products( 
    id varchar(100) PRIMARY KEY, 
    name varchar(100), 
    img varchar(1000), 
    price int, 
    category varchar(1000), 
    podcategory varchar(1000), 
    popular int, 
    new_prod boolean, characteristics varchar(3000), 
    desctiption varchar(3000), 
    gender boolean 
);