from subprocess import getoutput
import requests,json
from modules import control

def dependency():
    check_php = getoutput("php -v")
    if "not found" in check_php:
        exit("please install php \n command > sudo apt install php")

    try:
        from colorama import Fore,Style
        import requests,psutil

    except ImportError:
        exit("please install library \n command > python3 -m pip install -r requirements.txt")


def check_started():
    with open("logx-web/Settings.json", "r") as jsonFile:
        data = json.load(jsonFile)

    if data["is_start"] == False:
        data["is_start"] = True
        with open("logx-web/Settings.json", "w") as jsonFile:
            json.dump(data, jsonFile)



    elif data["is_start"] == True:
        control.kill_php_proc()


