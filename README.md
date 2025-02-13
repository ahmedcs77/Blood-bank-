# Blood-bank- 
The following steps must be followed: 
1. Create a new database Blood.
2. Add the tables in the file DataBase_blood.sql
3.Specify the fields that allow adding fields in Arabic .
4.In folder Blood It contains a folder named "auth" and it contains File name: (db_connect.php)
It is the file for connecting to the database and you give it a name 'blood'
5. The folder containing the name "auth"  is the one for permissions and how to pass and separate between the many types. 

6.The file that checks the user type is a file named " checkuser.php"in a folder named 'login'
Where the number 3 represents the hospital (hos_id) and the number 1 represents the user_id. 

- 0: Displays the donor page (fordoner.php)
- 1: Displays the patient page (forpatient.php)
- 2: Displays the admin page (foradmin.php)
- 3: In addition, it displays the hospital page (forhos.php) 

After that, a check is performed to determine whether it is a hospital or a laboratory.
"In the hospital page, new laboratories can be added." 

"And from the laboratory, a doctor can be added since the doctor may be outside the hospital."
