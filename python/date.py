#!/usr/bin/python
import os
from datetime import datetime
import pendulum

#print('This way we can display date in required formats')
#{{ my_date | date:"Y-m-d" }}
my_date = 20191213
print(my_date)

###Capture and print Today's date in unix date command format.
Today = os.popen("date").read()
print(Today)

###Capture and print Today's date in DD-MM-YYYY Format.
print(datetime.today().strftime('%d-%m-%Y'))


###Capture and print Today's date in Format Mmm-dd, yyyy
now = pendulum.now().to_formatted_date_string()
print(now)
