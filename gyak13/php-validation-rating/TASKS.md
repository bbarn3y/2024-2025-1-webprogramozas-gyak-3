- **A teszt linkek csak GET kéréssel működnek. POST kérést nem tudsz a linkeken keresztül indítani és tesztelni!**
- **A teszt linkekből két verzió adott. Az elsőt akkor használd, ha az `index.php` fájlban végzed a validációt, a másikat akkor, ha egy `validate.php` nevű fájlban (ezt te hozd létre)!**
- **Teljes pont akkor jár egy-egy részfeladatra, ha az adott hiba kiírásra kerül az `errors` elembe, egyébként csak az adott pont fele kapható!**

Ha játszottunk egy játékkal, gyakran értékelni is szeretnénk azt. Feladatod egy erre a célra megalkotott űrlap adatainak ellenőrzése.
- **a)** 2 pont: A felhasználónév, e-mail, játszott órák, vélemény és értékelés mezők kitöltése kötelező.
- **b)** 1 pont: A felhasználónév hossza 8 és 20 karakter közötti.
- **c)** 1 pont: Az e-mail formátuma helyes.
- **d)** 1 pont: A játszott órák száma csak egész szám lehet.
- **e)** 1 pont: A játszott órák száma 0 és 999 közötti.
- **f)** 2 pont: Az értékelés csak a megadott listabeli értéket veheti fel (`5-excellent`, `4-good`, `3-average`, `2-bad`, `1-terrible`).
- **g)** 3 pont: A véleményben a `bad` értékelésnél kötelező a `bug` szó, a `terrible` értékelésnél pedig a `crash` szó. A `bug` és `crash` szavaknál ne tegyél különbséget kis és nagybetű közt. (`str_contains`, `strtolower`)
- **h)** 1 pont: Sikeres validáció esetén jelenjen meg a `success` elem, az `errors` elem pedig legyen rejtett.

Hibaüzenetek:
- `A felhasználónév megadása kötelező!`
- `A felhasználónév hossza 8 és 20 karakter közötti lehet!`
- `Az e-mail cím megadása kötelező!`
- `Az e-mail cím formátuma helytelen!`
- `A "játszott órák" megadása kötelező!`
- `A "játszott órák" csak szám lehet!`
- `A "játszott órák" csak 0 és 999 közötti lehet!`
- `A "játszott órák" csak egész szám lehet!`
- `Az értékelés megadása kötelező!`
- `Az értékelés csak a megadott lista beli értéket veheti fel!`
- `A vélemény megadása kötelező!`
- `A véleményben "bad" értékelésnél kötelező a "bug" szó!`
- `A véleményben "terrible" értékelésnél kötelező a "crash" szó!`

![php-5-rating](php-5-rating.gif)
