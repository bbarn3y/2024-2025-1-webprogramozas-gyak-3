## 3. feladat: Ajándéklista (3-gift-list, 8 pont)

A karácsonyi készületeknek része az ajándékok vásárlása. Nagyobb családokban azonban nehéz lehet számon tartani, hogy kinek mit szánunk, és milyen állapotban van (megrendeltük, hova kell menni érte, megvan-e vagy rossz ötlet volt). Készítsünk egy olyan PHP alkalmazást, amely ennek nyilvántartásában segít. Legyen lehetőségünk családtagokat felvenni, családtagonként ötleteket rögzíteni, ötletenként pedig megjegyzéseket fűzni hozzájuk, illetve az ötlet státuszát módosítani. Az ötletnek két státusza van: `active`, azaz érvényben van-e az ötlet vagy elvetettük; `ready`, azaz kész van, be van szerezve, nincs vele több gond.

Az adatokat fájlban kell tárolni, a tárolás formátuma szabad. Lehet használni az előadáson mutatott `Storage` osztályt, de nem kötelező. Ha JSON-ben tároljuk az adatokat, akkor egy lehetséges tárolási mód, hogy az egyik JSON fájlban tároljuk a családtagokat, egy másik JSON fájlban pedig az ötleteket, és az ötleteken belül a megjegyzéseket.

- a. (1 pont) Az `index.php` oldalon található űrlap segítségével legyen lehetőségünk új családtag felvitelére! *Figyelem! Ebben a feladatban űrlapot szerveroldalon validálni már nem kell, feltételezzük a helyes kitöltést!*
- b. (1 pont) Az `index.php` oldalon listázzuk ki az eltárolt családtagokat! Minden családtag legyen egy link, amelyik a `member.php` oldalra mutat, átadva a családtag azonosítóját az URL-ben!
- c. (1 pont) A `member.php` oldalon írjuk ki a kiválasztott családtagunk nevét a fejlécbe!
- d. (1 pont) A `member.php` oldalon található _"New idea"_ feliratú űrlap segítségével vegyünk fel egy új ötletet az adott családtaghoz! Egy ötletnél tároljuk az ötlet nevét, az ötlet aktivitását (`active`, alapértelmezetten igaz), az ötlet állapotát (`ready`, alapértelmezetten hamis), és a megjegyzéseket hozzá (alapértelmezetten üres tömb). Az űrlapot szerveroldalon validálni nem kell.
- e. (1 pont) A `member.php` oldalon listázzuk ki az adott családtaghoz tartozó ötleteket, és az ötleteken belül a megjegyzéseket!
- f. (1 pont) Az ötleten belüli űrlap segítségével legyen lehetőség új megjegyzést fűzni az ötlethez! Az űrlapot szerveroldalon validálni nem kell! Az űrlapon belül pl. egy rejtett mezőben lehet tárolni az ötlet azonosítóját.
- g. (1 pont) Az ötleten belül a _"Complete"_ vagy a _"Hide"_ gombra kattintva, módosítsuk az adott ötlet `ready` állapotát igazra, vagy az `active` állapotát hamisra! A kész ötleteket jelezzük egy pipával az ötlet neve mellett, az inaktív ötleteket pedig ne is listázzuk ki!
- h. (1 pont) Az `index.php` oldalon a családtagok mögött tüntessük fel, hogy hány aktív ötletből hány van készen! (`(kész aktív) / (összes aktív)` formában)
