Harika. Devam ediyoruz.

# Sprint 4.2 — ITENTER Analytics & Business Intelligence

Bu sprintte web sitesini ölçülebilir hale getiriyoruz. Ziyaretçi davranışları, dönüşümler ve performans verileri takip edilecek.

Hedef:

✅ Google Analytics 4 altyapısı  
✅ Conversion tracking  
✅ Form takip sistemi  
✅ Cookie uyumluluğu  
✅ Performance monitoring  
✅ İş geliştirme verileri  

---

# 1) Analytics Ayar Dosyası

Yeni dosya:


inc/analytics.php


Kod:

php
<?php


if(!defined('ABSPATH')){

exit;

}



/**
 * ITENTER Analytics
 */


function itenter_google_analytics(){


?>

<!-- Google Analytics 4 -->

<script async 
src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX">
</script>


<script>

window.dataLayer =
window.dataLayer || [];


function gtag(){

dataLayer.push(arguments);

}


gtag(
'js',
new Date()
);


gtag(
'config',
'G-XXXXXXXXXX'
);


</script>


<?php


}


add_action(

'wp_head',

'itenter_google_analytics'

);


---

# 2) functions.php Güncelleme

Ekle:

php
require_once get_template_directory()
.'/inc/analytics.php';


---

# 3) Conversion Tracking Sistemi

Yeni JavaScript:


assets/js/tracking.js


Kod:

javascript
document.addEventListener(
"DOMContentLoaded",
()=>{


const buttons =
document.querySelectorAll(
'.contact-button'
);



buttons.forEach(

button=>{


button.addEventListener(
'click',
()=>{


if(typeof gtag !== 'undefined'){


gtag(

'event',

'contact_click',

{

'event_category':
'engagement',

'event_label':
'Contact Button'

}

);


}


}

);


});


});


---

# 4) Form Başarı Takibi

Contact form sonrası:

javascript
gtag(

'event',

'generate_lead',

{

method:
'website_form'

}

);


Google Analytics içinde:


Events

↓

generate_lead

↓

Conversion


olarak işaretlenebilir.

---

# 5) Cookie Hazırlığı

Yeni dosya:


inc/cookies.php


Kod:

php
<?php


function itenter_cookie_notice(){


?>

<div class="cookie-notice">


<p>

We use cookies to improve your experience.

</p>


<button>

Accept

</button>


</div>


<?php


}


add_action(

'wp_footer',

'itenter_cookie_notice'

);


---

# 6) Business Dashboard Hazırlığı

WordPress panel:


ITENTER

├── Website Stats

├── Leads

├── Projects

└── Performance


Hazırlık altyapısı oluşturulur.

---

# 7) İzlenecek KPI'lar

Takip edilecek:


Visitors

Page Views

Contact Requests

Service Views

Project Views

Conversion Rate

Traffic Sources


---

# 8) Lead Generation Alanları

Ana sayfa:


CTA Button

↓

Contact Form

↓

Lead Event

↓

Analytics

↓

Business Follow-up


---

# 9) Performance Monitoring

Takip:


Page Speed

Server Response

Core Web Vitals

Mobile Score


---

# GitHub Commit


Sprint 4.2 - Analytics Integration

- Added GA4 foundation
- Added conversion tracking
- Added lead tracking
- Added cookie structure
- Added business analytics layer


---

# Sonraki Sprint

## Sprint 4.3 — ITENTER Contact & Lead Management System

Eklenecek:

✅ Profesyonel iletişim formu  
✅ Spam koruması  
✅ Mail bildirim sistemi  
✅ CRM entegrasyon altyapısı  
✅ Lead kayıt sistemi  
✅ Müşteri talep yönetimi  

Bu aşamadan sonra site ziyaretçileri gerçek müşteri adaylarına dönüştürülebilecek.
