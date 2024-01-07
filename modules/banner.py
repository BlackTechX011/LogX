from colorama import Fore,Back,Style
import platform,os

OsName = platform.uname()[0]

def banner():
    if OsName == "Windows":
      os.system("cls")
    else:
      os.system("clear")
    print(Fore.CYAN+"_______________________________________________________________________")
    print(Fore.CYAN+"")
    print(Fore.CYAN+" |||||         ||||||||||||||||||| |||||||||||||||||  \\\\       ////")
    print(Fore.CYAN+" |||||         ||||||||||||||||||| |||                 \\\\     ////" )
    print(Fore.CYAN+" |||||         |||||         ||||| |||                  \\\\   ////" )
    print(Fore.CYAN+" |||||         |||||         ||||| |||     ||||||||||    \\\\ ////")
    print(Fore.CYAN+" |||||         |||||         ||||| |||            |||    //// \\\\")
    print(Fore.CYAN+" |||||         |||||         ||||| |||            |||   ////   \\\\")
    print(Fore.CYAN+" ||||||||||||| ||||||||||||||||||| |||            |||  ////     \\\\")
    print(Fore.CYAN+" ||||||||||||| ||||||||||||||||||| |||||||||||||||||| ////       \\\\")
    print(Fore.CYAN+"_______________________________________________________________________")
    print(Fore.CYAN+"|                         By BlackTechX                               |")
    print(Fore.CYAN+"|      YouTube.com/@BlackTechX_  ||  GitHub.com/BlackTechX011         |")
    print(Fore.CYAN+"|_____________________________________________________________________|")
    print(Style.RESET_ALL)

banner()