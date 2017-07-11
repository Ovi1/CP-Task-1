# CP-Task-1

#Reikalavimai:

- OP Laravel Vue.js Git
- Task #1: 
- Sukurti klausimyno puslapį.
- MySQL duomenų bazė
- frontend technologija nesvarbi.

> Bent minimalistinis dizainas (bootstrap/foundation etc.).
> Vartotojas gali pasirinkti vieną iš dviejų ar daugiau testų.
> Testas turi susidaryti iš bent 10 klausimų susijusių su programavimu:
	
	- klausimai rodomi atsitiktine tvarka, bet nesikartoja
	
	- kiekvienas klausimas turi tam tikrą taškų skaičių
	
	- taškai sumuojasi
	
	- rodoma tik po 1 klausimą vienu metu, atsakius, rodomas kitas klausimas
	
	- atnaujinus (refresh/navigation) langą ar gryžus į tinklapį turi prisiminti paskutini sprendžiamą klausimą, taškų sumą, etc..
	
	- galimybė pradėti testą iš naujo
	
	- baigus testą leidžia išsaugoti rezultatą, įvesti vardą
	
	- baigus testą gaunama nuoroda per kurią galima peržiūrėti atsakytus klausimus
	
> Rezultatų lentelė.

> Nėra vartotojo paskyros, viskas "anonimiška".

> Administravimas nebūtinas 

@TODO: 

- atnaujinus (refresh/navigation) langą ar gryžus į tinklapį turi prisiminti paskutini sprendžiamą klausimą, taškų sumą, etc..
- galimybė pradėti testą iš naujo // Atnaujinus langą tai, padaro.
- Vue.js sometimes stuck's on rendering next question.

#Launch App

- CD in to copied rep. folder
- add Mysql DB credits to env. file //used XAMPP for MySql
- php artisan migrate
- php artisan db:seed
- npm install
- php artisan serve // localhost:8000
- npm run watch //watching for file changes
- npm run prod // for production // compiles js, scss files.

#Used 

- Laravel Framework 5.4.28
- Vue.js 2.3.4




