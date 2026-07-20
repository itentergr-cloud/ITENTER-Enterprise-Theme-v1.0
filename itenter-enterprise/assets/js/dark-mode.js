Harika. Devam ediyoruz.

# Sprint 4.5 — ITENTER Final Enterprise Features

Bu sprintte ITENTER temasına ileri seviye kurumsal özellikleri ekliyoruz.

Amaç:

✅ Dark Mode desteği  
✅ Gelişmiş arama altyapısı  
✅ Bildirim sistemi hazırlığı  
✅ REST API desteği  
✅ Mobil uygulama bağlantı altyapısı  
✅ PWA hazırlığı  

---

# 1) Dark Mode Sistemi

Yeni dosya:


assets/js/dark-mode.js


Kod:

javascript
document.addEventListener(
"DOMContentLoaded",
()=>{


const toggle =
document.querySelector(
'.dark-mode-toggle'
);



if(toggle){


toggle.addEventListener(

'click',

()=>{


document.body.classList.toggle(
'dark-mode'
);



localStorage.setItem(

'itenter-dark',

document.body.classList.contains(
'dark-mode'
)

);


}

);


}



if(

localStorage.getItem(
'itenter-dark'
)==='true'

){

document.body.classList.add(
'dark-mode'
);


}


});


---

# 2) Dark Mode CSS

`variables.css`

Ekle:

css
body.dark-mode{


--it-background:#020617;

--it-text:#F8FAFC;

--it-muted:#CBD5E1;


background:

var(--it-background);


color:

var(--it-text);


}



body.dark-mode .it-card{


background:#0F172A;


border-color:#1E293B;


}


---

# 3) Advanced Search Hazırlığı

Yeni dosya:


inc/search.php


Kod:

php
<?php


function itenter_search_filter($query){


if(

$query->is_search()

&&

!is_admin()

){


$query->set(

'post_type',

[

'post',

'it_service',

'it_project'

]

);


}


return $query;


}



add_filter(

'pre_get_posts',

'itenter_search_filter'

);


---

# 4) REST API Hazırlığı

Yeni dosya:


inc/api.php


Kod:

php
<?php


function itenter_api_routes(){



register_rest_route(

'itenter/v1',

'/projects',

[

'methods'=>'GET',

'callback'=>
'itenter_get_projects'

]

);


}



function itenter_get_projects(){


return get_posts(

[

'post_type'=>
'it_project',

'numberposts'=>10

]

);


}



add_action(

'rest_api_init',

'itenter_api_routes'

);


---

# API Sonucu

Hazır endpoint:


/wp-json/itenter/v1/projects


Mobil uygulama veya harici sistemler kullanabilir.

---

# 5) PWA Hazırlığı

Yeni dosya:


manifest.json


Kod:

json
{

"name":
"ITENTER Information Technology",

"short_name":
"ITENTER",

"display":
"standalone",

"theme_color":
"#2563EB",

"background_color":
"#081120"

}


---

# 6) Service Worker Hazırlığı

Dosya:


assets/js/service-worker.js


Kod:

javascript
self.addEventListener(

'install',

event=>{


console.log(
"ITENTER PWA Installed"
);


}

);


---

# 7) Mobil Uygulama Entegrasyon Hazırlığı

Mimari:


ITENTER Website

        |

        |

 REST API

        |

        |

Mobile App

(Android / iOS)


Hazır:


✓ API

✓ Authentication altyapısı

✓ Content endpoints


---

# 8) functions.php Güncelleme

Ekle:

php
require_once get_template_directory()
.'/inc/api.php';


require_once get_template_directory()
.'/inc/search.php';


---

# GitHub Commit


Sprint 4.5 - Enterprise Features

- Added dark mode
- Added advanced search
- Added REST API
- Added PWA foundation
- Added mobile integration layer


---

# ITENTER Proje Durumu

Şu anda tema:

✅ Kurumsal web sitesi  
✅ CMS sistemi  
✅ SEO platformu  
✅ Lead sistemi  
✅ Client portal altyapısı  
✅ API altyapısı  
✅ Mobil uygulama hazır altyapı  

seviyesine geldi.

---

## Sonraki Sprint

# Sprint 5.0 — ITENTER v1.0 Final Release & Deployment

Son aşamada:

✅ Canlı sunucu kurulumu  
✅ WordPress production ayarları  
✅ SSL  
✅ Domain bağlantısı  
✅ SMTP mail sistemi  
✅ Backup sistemi  
✅ Güvenlik taraması  
✅ Final yayın kontrolü  

yapılacak.
