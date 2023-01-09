
Sign up : 3 things: username
                    password
                    signup button

Conditions: if user already exist, don't insert data into database.
            if user doesn't exist Sign up successfully.   

Login : 3 things:   username
                    password
                    signup button
                    
Coditions : if username and password match then login successfully and go to welcome page.


For username : select more>> unique or run the query:
               ALTER TABLE `registration` ADD UNIQUE(`usename`); 