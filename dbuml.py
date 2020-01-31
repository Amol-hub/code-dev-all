import mysql.connector
from mysql.connector import Error
from mysql.connector import errorcode

try:
	connection = mysql.connector.connect(host='localhost',database='pynative',user='root',password='Amol123456')

	mySql_insert_query = """INSERT INTO Laptop (Id, Name, Price)
				VALUES (%s, %s, %s)"""
	cursor = connection.cursor()
	insert_tuple = (1, 'Acer Predator Triton', 45000.00)

	result = cursor.execute(mySql_insert_query, insert_tuple)
	connection.commit()
	print("Laptop record inserted successfully")

except mysql.connector.Error as error:
	connection.rollback()
	print("Failed to insert into MySQL table {}".format(error))

finally: 
	if (connection.is_connected()):
		cursor.close()
		connection.close()
		print("MySQL connection is closed")
