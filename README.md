# onlineMemo
EXAMPLE (PHP&amp;JS)
This is a online memo book. 
Users can register, login, create events in the memo book, edit or delete any events any users like.
-----------------------------------------------------------------------------------------------------
1. Firstly, the MySQL DB need to be created.
Name of the database:todo, (for the lists of events)
name of one table:users,   (for the users)
name of another table:todo.
2. The schema for two tables :
  todo(id, username, title, description, due_date, create_date, label, progress),
      type of the field:
        id:int (auto increment) PK ;
        username, title, due_date, create_date, label:varchar ;
        description:text ;
        progress: int.
--------------------------------------------------------------------------
  users(username,email,password,reg_time,reg_date,user_status,ip_address),
      type of the field:
        username:PK VARCHAR(150);
        ip_address： int(20);
        other fields:varchar(100).
3. The start page is Todo/login.php
  
  Thing done!!

