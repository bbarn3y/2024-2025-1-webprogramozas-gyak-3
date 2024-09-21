/**
 * A felületen egy jelenleg nem működő villanykapcsolót találsz.

A feladat lényege, hogy megjavítsd a kapcsolót és segítsd a felhasználót a használatában.

1.1 **Amennyiben a felhasználó a burkolatra kattint kapjon egy felugró üzenetet:**

"Hoppá, majdnem eltaláltad a kapcsolót, de pont nem!"

1.2 **A kapcsolóra kattintva NE ugorjon fel a fenti üzenet.**

1.3 **A kapcsoló megnyomásával legyen világos.**

Ehhez 2 dolog szükséges:
- A CSS fájlban definiált "on" stílusosztály kerüljön rá a kapcsolónak megfelelelő DOM elemre, ezzel a kapcsoló
állapotot vált.
- Az oldal háttere váltson feketéről sárgára.

A kapcsoló legyen kétállapotú, tehát felkapcsolás után le is lehessen kapcsolni.

1.4 **Linkek deaktiválása**

A villanykapcsoló négy szélén találsz négy linket.

A linkekre kattintva wikipedia oldalak nyílnak meg.

Amennyiben a villany ég, a linkek ne legyenek kattinthatóak, azzaz klikk esetén ne nyíljon meg a href-ben megadott oldal, egyik link esetén sem.
 */

const containerEl = document.querySelector('#container');
const casingEl = document.querySelector('.casing');
const switchEl = document.querySelector('.switch');
