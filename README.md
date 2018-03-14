# micro-pos
This is a micro BitCore BTX POS script just need jquery and php to run.


# easy install
Just copy the files into a folder on your php server for normal 'var/www/html/micro-pos'.
```
cd /var/www/html/
git clone https://github.com/dArkjON/micro-pos.git
```


Edit the index.php : change your wallets in line 4, 5, 6, 7 & 8.
Change chmod from logs.txt from 644 to 666.
```
cd micro-pos
nano index.php
chmod +666 *
```


Open your Server in a Webbrowser like http://< yourserver >.com/micro-pos

# procedure
The script will check the wallets from 1-5 if there is a incoming TXID to check if the wallet is 'free'.

After the customer paid the invoice the wallet address is blocked till 1 confirm.

Invoice creation also payment is logged in "log.txt"

https://i.imgur.com/bY7fyQ2.jpg

# files
+ index.php
+ open.php
+ wallet.php
+ log.txt
+ js/jquery.min
+ js/micropos.css

# donations
if you like my script or like to see me drunken, send me beer :D

bitcoin:1BEERx5bsHGmZYoWb8euAA5DD84vFk3Fqp

bitcore:1BEERx5bsHGmZYoWb8euAA5DD84vFk3Fqp
