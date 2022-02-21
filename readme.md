Nette Web Project v Dockeru
===========================

## Video

Kód [v tomto repozitáři na větvi video](https://github.com/haltuf/web-project-docker/tree/video) je výsledkem mého výukového videa: [nette/web-project v Dockeru](https://www.youtube.com/watch?v=2i-9Ens7o0Q).

## Master

V master větvi se aktualně nachází nette/web-project včetně konfiguračních souborů pro Docker, s PHP 8.1, MariaDB databází, PHPMyAdminem and composererem.

## Instalace

1. Naklonujte si nebo si stáhněte tento repozitář 
2. Spusťte na svém počítači Docker Desktop. Pokud ho nemáte, nainstalujte si ho.
3. V adresáři `.docker` přejmenujte soubor `.env.sample` na `.env` a nahraďte v něm řetězec `TODO` za svůj osobní autorizační token na GitHub.com. Pokud nevíte, o co se jedná, postupujte podle návodu [v této části videa](https://www.youtube.com/watch?v=2i-9Ens7o0Q&t=1966s).
4. Spusťte v naklonovaném repozitáři soubor `.docker/up.bat`. 
5. Napište v příkazové řádce `docker exec example composer install`
6. Otevřete svůj oblíbený prohlížeč.
7. Napište do adresního řádku `localhost`. Měla by se objevit typická úvodní stránka z nette/web-project včetně debuggovací lišty.
8. Napište do adresního řádku `localhost:8080`. Měl by se objevit PHPMyAdmin.