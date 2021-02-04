* [Github Repo](https://github.com/bleart-nuredini/iw/)
* [Shqip](#faza-e-parë-e-projektit-në-iw)
* [English](#iw-project-part-one)

## Faza e parë e projektit në IW
Projekti përmbanë gjashtë faqe: **HOME, ABOUT, LOGIN, REGISTER, SLIDER**. Strukurimi
i faqeve është kryer me HTML, slitizimi vetëm me CSS, dhe vërtetimi (validimi) i të
dhënave me disa skripta të shkruar në JavaScript. Secila faqe është testuar me [**Markup 
Validation Service**](https://validator.W3.org/) për ta testuar validitetin e faqeve. Kurse, 
për testimin e qasshmërisë së faqeve në platformat mobile e kemi përdorur 
[**Mobile-Friendly Test**](https://search.google.com/test/mobile-friendly).

Nëse përdoruesi iu qaset faqes përmes pajisjeve më të vogla (p.sh., me telefon), faqeve
**ABOUT** dhe **SLIDER** iu largohet **footer**-i, duke mundësuar kështu RWD (ang. Responsive Web Design).

Për prezentimin e albumeve e kemi implementuar një element _rrëshqitës_ (ang. slider), i
cili e ndërron kopertinën dhe përshkrimin e albumit sa herë që të klikohet butoni për albumin
e radhës (apo butoni për albumin paraprak). Implementimi i këtij elementi funksionon
falë një skripte e cila është integruar direkt në `.html` fajllin.

Dy skriptat e tjera, `register-page.js` dhe `login-page.js`, mundësojnë validmin e të
dhënave për faqen për regjistrim dhe hyrje. Për validimin e
adresave elektronike, në `register-page.js` gjendet një _regex_ me të cilin krahasohen
adresat e futura. 

## IW project part one
This project consists of six pages: **HOME, ABOUT, LOGIN, REGISTER, SLIDER**. The web documents 
have been structured with HTML; styled only using CSS; and the data validation for the 
register and login pages has been implemented via two JavaScript files. To check for validity, 
each web page on the website has been tested with [**Markup Validation Service**](https://validator.W3.org/). 
And, to check the website's responsivity, we used [**Mobile-Friendly Test**](https://search.google.com/test/mobile-friendly).

If the user accesses the website via smaller devices (e.g., a phone), the footer in **ABOUT** and **SLIDER** will 
disappear -- thus enabling responsive web design by making the pages easier to use in these devices.

In `register-page.js` and `login-page.js` you can find the code that vaildates the register and login forms,
respectievly. To validate e-mail addresses, we test the user input against a _regex_.
