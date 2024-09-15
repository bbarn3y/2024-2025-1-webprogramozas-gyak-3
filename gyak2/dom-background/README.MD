A felületen találsz egy szöveges input mezőt valamint egy "Háttérszín beállítása" gombot.

A feladat lényege, hogy a gomb lenyomásakor az oldal háttere változzon a beírt színre.

2.1 **Az "Háttérszín beállítása" beállítása gombra kattintva olvasd ki a szöveges input mező tartalmát
és állítsd be erre az oldal háttérszínét.** (1 pont)

2.2 **Amennyiben a 2.1 feladat során, kiolvasáskor az input mező tartalma üres vagy a megadott szín
nem helyes, a piros ("red") háttérszínt állítsd be.** (1 pont)

2.3 **Egy változóban vezesd, hogy a hányszor változott a háttérszín és az aktuális értéket jelenítsd is meg a
"Színváltoztatások száma" szöveg mellett található "counter" azonosítójú <span> elemben.** (1 pont)

2.4 **Az oldal jobb alsó sarkában találsz egy "További színek keresése" linket.**
Alapesetben ez egy új tabon megnyit egy linket.
Amikor a felhasználó már a 3. színváltást hajtja végre, a link legyen deaktiválva a következő módon:

- Kerüljön rá a "disabled" osztály, amely szürkére fogja változtatni a link színét. (1 pont)

        Segítség:

        Az osztály hozzáadásához használd az elem "classList" attribútumát:
        https://developer.mozilla.org/en-US/docs/Web/API/Element/classList

- Kattintáskor ne nyíljon meg a link. (1 pont)

        Segítség:

        Ahhoz, hogy a link ne nyíljon meg **akadályozd meg** az **alap** működését.
