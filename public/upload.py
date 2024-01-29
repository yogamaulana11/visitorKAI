import csv
import mysql.connector
from datetime import datetime, time


db = mysql.connector.connect(host="localhost", port="7306", user="root", password="", database="visitorkai")

cursor = db.cursor()

# cursor.execute("INSERT INTO nama, ")
# Replace 'your_csv_file.csv' with the actual path to your CSV file
csv_file_path = 'D:\Syahrul\Stupen\Excel\\januari.csv'

with open(csv_file_path, 'r') as file:
    reader = csv.reader(file)
    
    # Assuming the first row contains column headers
    headers = next(reader)
    # print("\t".join(headers))

    arr = []
    # print(len(headers))
    for x in reader:
        for i in x:
            # print(i)
            # print(i.find(';'))
            # print(len(i))

            if i.find(';') != -1:
                arr.append(i.split(';'))
            else:
                arr.append(i)
    print(arr[39])
    # for row in reader:
    #     print("\t".join(row))
    n = 0
    # try:
    for i in arr:
        # print(arr[i][])
        cursor.execute(f"INSERT INTO datatamus (nama, kontak, instansi, keperluan, tujuan, jadwal_temu, waktu_keluar, keterangan_tolak, created_at, updated_at) VALUES ('{i[1]}', '{i[2]}', '{i[3]}', '{i[4]}', '{i[5]}', '{time(10, 15, 0)}', '{time(11, 15, 0)}', '{i[8]}', '{datetime(2024, 1, 1, 8, 30, 0)}', '{datetime(2024, 1, 1, 8, 30, 0)}')")  
        db.commit()
        # cursor.close()

# except:
#     print('selesai')
        # for x in i:
        #     print(f'{n}. {x}')
        #     x = x
        # # print(x)
        # n += 1