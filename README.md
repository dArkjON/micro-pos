# micro-pos
This is a micro BitCore BTX POS script - just need jQuery and PHP to run.


# easy install
Simply copy the files into a folder on your PHP server, usually 'var/www/html/micro-pos'.
```
cd /var/www/html/
git clone https://github.com/dArkjON/micro-pos.git
```


Edit wallet.php
- Change values of wallet variables in line 3 till line 7 to your BTC wallet addresses.
- Change file mode bits of logs.txt from 644 to 666 (with chmod).
```
cd micro-pos
nano index.php
chmod +666 *
```


Open your server in a browser like http://< yourserver >.com/micro-pos

# procedure
- The script will check wallet1 till wallet5 if there is an incoming TXID. This is necessary to find out which wallet address is "free" for next payment.
- After the customer paid the invoice the wallet address is blocked till first confirmation.
- The invoice creation and also payment are logged in "log.txt".

https://i.imgur.com/bY7fyQ2.jpg

# files
+ index.php
+ open.php
+ wallet.php
+ log.txt
+ js/jquery.min
+ js/micropos.css

# donations
If you like my script or like to see me drunken, send me beer :D

bitcoin:1BEERx5bsHGmZYoWb8euAA5DD84vFk3Fqp

bitcore:1BEERx5bsHGmZYoWb8euAA5DD84vFk3Fqp
