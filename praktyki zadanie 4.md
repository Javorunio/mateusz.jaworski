##Zadanie 4

###Zadanie 1:

\<?php \...

\$zaszyfrowane = hash(\"sha512\", \$\_POST\[\"password\"\]);

\$query = \"INSERT INTO users(login, haslo) VALUES
(\'\$\_POST\[login\]\', \'\$zaszyfrowane\');\";

if(\$connection-\>query(\$query)) echo \"Pomyślnie dodano użytkownika do
bazy danych\"; else echo \"Wystąpił błąd podczas dodawania rekordu do
tabeli.\"; ?\>

###Zadanie 2:

\<?php \...

\$zaszyfrowane = hash(\"sha512\", \$\_POST\[\"password\"\]); \$login =
\"SELECT \* FROM users WHERE login=\'\$\_POST\[login\]\' AND
haslo=\'\$zaszyfrowane\'\";

if(\$query = \$connection-\>query(\$login)) { \$records =
\$query-\>num_rows; if(\$records == 0) echo \"Nie ma takiego użytkownika
lub hasła!\"; else echo \"Zalogowano!\"; } ?\>

##Odpowiedź na pytania FAQ

###1. Czym się różni SHA256 od SHA512? Długością klucza.

###2. Za co odpowiada długość klucza w algorytmach? Im większa długość
klucza tym większe bezpieczeństwo, ale też większa zasobożerność.

###3. Jaki klucz użyjemy do szyfrowania hasła? Ja bym uzył SHA256 lub
nawet SHA512 jeśli to byłoby szyfrowaniem haseł dla jakiegoś
portalu/sklepu/itd, który ma dużą bazę uzytkowników.

###4. Jeśli chcecie użyć różnych kluczy to jakich i dlaczego?
SHA512/SHA256, ponieważ są jednostronne i można tylko atakami brutalnymi
złamać hasło. Jeśli nie hashowanie to szyfrowanie Twofishem, ponieważ
gwarantuje wysoką wydajność jak na poziom bezpieczeństwa, ale nie mam
doświadczenia w używaniu tego klucza.

###5. Po co szyfrować dane kluczem który daje się złamać? Nie wszystkie
dane są równie wrażliwe przez co można zaoszczędzić na przepustowości
przy pomocy klucza o mniejszej ilości bitów.
