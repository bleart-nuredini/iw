* [Github Repo](https://github.com/bleart-nuredini/iw/)
* [Shqip](#faza-e-parë-e-projektit-në-iw)
* [English](#iw-project-part-one)

## Faza e parë e projektit në IW
Projekti përmbanë gjashtë faqe: **HOME, ABOUT, LOGIN, REGISTER, SLIDER**. Strukurimi
i faqeve është kryer me **HTML**, slitizimi vetëm me **CSS**, dhe vërtetimi (validimi) i të
dhënave me disa skripta të shkruar në **JavaScript**. Secila faqe është testuar me [**Markup 
Validation Service**](https://validator.W3.org/) për ta testuar validitetin e faqeve. Kurse, 
për testimin e qasshmërisë së faqeve në platformat mobile e kemi përdorur 
[**Mobile-Friendly Test**](https://search.google.com/test/mobile-friendly).

Nëse përdoruesi iu qaset faqes përmes pajisjeve më të vogla (p.sh., me telefon), faqeve
**ABOUT** dhe **SLIDER** iu largohet **footer**-i, duke mundësuar kështu RWD (ang. Responsive Web Design).

Për prezentimin e albumeve e kemi implementuar një element _rrëshqitës_ (ang. slider), i
cili ndërron e kopertinën dhe përshkrimin e albumit sa herë që të klikohet butoni për albumin
e radhës (apo butoni për albumin paraprak). Implementimi i këtij elementi funksionin
falë një skripte e cila është integruar direkt në `.html` fajllin.

Dy skriptat e tjera, `register-page.js` dhe `login-page.js`, mundësojnë validmin e të
dhënave për faqen për regjistrim dhe hyrje. Për validimin e
adresave elektronike, në `register-page.js` gjendet një _regex_ me të cilin krahasohen
adresat e futura. 

## IW project part one
 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris interdum lacus vitae sapien cursus feugiat. Suspendisse neque enim, egestas maximus consectetur sit amet, pretium et sapien. Nam malesuada viverra est, porta porttitor massa viverra ut. Pellentesque at odio non risus lobortis dictum. Praesent sed nulla ullamcorper, posuere urna vel, tempus elit. Vivamus ac nulla varius, varius nisl et, lobortis lacus. Cras sit amet turpis rutrum, gravida urna id, pharetra lorem. Curabitur id justo risus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec posuere faucibus nisi in fermentum. Nam massa nibh, semper a nisi a, placerat tincidunt neque. Nam non mauris sed magna porttitor aliquet. Cras lobortis quis turpis vel tristique. Integer metus lorem, vehicula quis pellentesque ut, commodo id felis. In arcu turpis, condimentum et maximus vitae, lacinia at turpis.

Ut nec justo diam. Pellentesque semper magna ac est mattis, vel faucibus tortor efficitur. Nunc molestie, velit quis viverra tempor, tellus nulla faucibus ligula, quis sagittis tortor massa a nibh. Nunc interdum semper sem, ornare tincidunt magna elementum fermentum. Sed a feugiat ligula. Vestibulum sed nisi libero. Maecenas in nibh et quam convallis congue.

In ut lacus sollicitudin massa tristique facilisis in id sem. Aliquam erat volutpat. Morbi varius risus in erat euismod, et placerat quam volutpat. Nullam metus risus, finibus non pretium pulvinar, tempus vel dui. Curabitur fermentum mollis purus sit amet cursus. Nulla facilisi. Integer non magna urna. Aliquam et dui congue augue maximus aliquam. Pellentesque nec dolor a turpis luctus laoreet.

Praesent viverra, arcu quis elementum vestibulum, tellus nulla tincidunt mi, ut consequat diam nibh at ligula. Nullam a neque quis ligula semper fringilla nec vitae leo. Donec nec massa nulla. Nam vel justo placerat, blandit metus id, euismod nulla. Nam tempor euismod magna ac luctus. Morbi in lacus vel mauris porta ullamcorper eleifend vel felis. In massa tortor, fringilla ut dictum vitae, commodo eu velit. Maecenas efficitur blandit accumsan. Duis id volutpat risus, sit amet consectetur quam. Ut porta turpis a nibh gravida interdum. 
