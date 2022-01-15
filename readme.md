Nette Web Project v Dockeru
===========================

Jak spustit nette/web-project jednoduše v Dockeru, s PHP 8.0, MySQL (MariaDB) databází, PHPMyAdminem and composererem.

Kód v tomto repozitáři je výsledkem mého výukového videa: [nette/web-project v Dockeru](https://www.youtube.com/watch?v=2i-9Ens7o0Q)

## Instalace

Tento repozitář obsahuje výsledek všech jednotivých akcí a úprav učiněných přesně krok za krokem podle videa výše.
Pokud chcete tento poměrně náročný proces přeskočit a prostě to jen spustit, postupujte takto:

1. Naklonujte si nebo si stáhněte tento repozitář 
2. Spusťte na svém počítači Docker Desktop. Pokud ho nemáte, nainstalujte si ho.
3. Spusťte v naklonovaném repozitáři soubor `.docker/up.bat`
4. Otevřete svůj oblíbený prohlížeč.
5. Napište do adresního řádku `localhost`. Měla by se objevit typická úvodní stránka z nette/web-project včetně debuggovací lišty.
6. Napište do adresního řádku `localhost:8080`. Měl by se objevit PHPMyAdmin s jednou tabulkou jménem `user` s jedním záznamem.

Všechny odpovědi na dotazy co, proč a jak najdete ve videu výše.

Nette Web Project in Docker
===========================

How to run nette/web-project easily in Docker, with PHP 8.0, MySQL (MariaDB) database, PHPMyAdmin and composer.

The code is the result of this tutorial video: [nette/web-project in Docker](https://www.youtube.com/watch?v=2i-9Ens7o0Q)

## Instalation

This repo shows the result of all the steps taken exactly according the above mention video.
If you want to skip the tedious process and just run it, follow these steps:

1. Clone or download this repo.
2. Run Docker Desktop on your computer. If you don't have it, install it first.
3. Run `.docker/up.bat` from this repo.
4. Open your favourite browser.
5. Type `localhost` in address bar. The nette/web-project website should open.
6. Type `localhost:8080` in address bar. The PHPMyAdmin with one table should open.

All questions about how and why are in detail explained in the video above.