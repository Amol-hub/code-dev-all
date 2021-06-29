CREATE TABLE Employee (
    ID INT NOT NULL,
    Name varchar(30),
    Emp_Info varchar(50),
    -> Salary INT NOT NULL,
    -> Dept_name varchar(20),
    -> Dept_id INT,
    -> INDEX dept_ind(dept_id),
    -> CONSTRAINT fk_dept FOREIGN KEY(dept_id)
    -> REFERENCES department(ID)
    -> );

