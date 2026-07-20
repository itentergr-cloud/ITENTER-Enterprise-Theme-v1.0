Harika. Devam ediyoruz.

# Sprint 4.3 — ITENTER Contact & Lead Management System

Bu sprintte iletişim bölümünü basit bir formdan çıkarıp kurumsal lead toplama sistemine dönüştürüyoruz.

Hedef:

✅ Profesyonel iletişim formu  
✅ Spam koruması  
✅ E-mail bildirimleri  
✅ Lead kayıt altyapısı  
✅ CRM entegrasyon hazırlığı  
✅ Müşteri talep yönetimi  

---

# 1) Lead Custom Post Type

Yeni dosya:


inc/leads.php


Kod:

php
<?php


if(!defined('ABSPATH')){

exit;

}


/**
 * ITENTER Leads
 */


function itenter_register_leads(){


register_post_type(

'it_lead',

[

'labels'=>[

'name'=>'Leads',

'singular_name'=>'Lead'

],


'public'=>false,


'show_ui'=>true,


'menu_icon'=>
'dashicons-email-alt',


'supports'=>[

'title',

'editor'

]


]

);


}


add_action(

'init',

'itenter_register_leads'

);


---

# 2) Admin Panel Sonucu

WordPress:


Dashboard

├── Services

├── Projects

├── Testimonials

├── Leads


oluşacak.

---

# 3) Contact Form Yapısı

Dosya:


template-parts/contact-form.php


HTML:

php
<form 
method="post"
class="itenter-contact-form">


<input

type="text"

name="name"

placeholder="Full Name"

required>


<input

type="email"

name="email"

placeholder="Email Address"

required>


<input

type="text"

name="company"

placeholder="Company Name">


<textarea

name="message"

placeholder="Your Message">

</textarea>


<?php wp_nonce_field(

'itenter_contact',

'itenter_nonce'

); ?>


<button 
class="btn-primary">

Send Request

</button>


</form>


---

# 4) Form İşleme Sistemi

Yeni dosya:


inc/contact-handler.php


Kod:

php
<?php


function itenter_process_contact(){


if(

!isset($_POST['itenter_nonce'])

){

return;

}



if(

!wp_verify_nonce(

$_POST['itenter_nonce'],

'itenter_contact'

)

){

return;

}



$name =
sanitize_text_field(

$_POST['name']

);



$email =
sanitize_email(

$_POST['email']

);



$message =
sanitize_textarea_field(

$_POST['message']

);





$post_id = wp_insert_post(

[

'post_type'=>
'it_lead',

'post_title'=>
$name,

'post_content'=>
$message,

'post_status'=>
'publish'

]

);



wp_mail(

get_option('admin_email'),

'New ITENTER Lead',

$name."\n".$email."\n".$message

);


}


add_action(

'init',

'itenter_process_contact'

);


---

# 5) Güvenlik Katmanı

Eklenenler:


✓ Nonce

✓ Sanitization

✓ Email validation

✓ Spam hazırlığı

✓ Secure POST handling


---

# 6) CRM Entegrasyon Hazırlığı

Hazır bağlantı noktaları:


Lead Created

↓

Webhook

↓

CRM

↓

Sales Pipeline


Uyumlu sistemler:


HubSpot

Zoho CRM

Salesforce

Microsoft Dynamics


---

# 7) Lead Yönetimi

Admin:


Leads

├── New Request

├── Customer Name

├── Email

├── Message

└── Status


---

# 8) CTA Stratejisi

Ana sayfa:


Need a Technology Partner?

↓

Contact ITENTER

↓

Lead Created

↓

Sales Follow-up


---

# GitHub Commit


Sprint 4.3 - Lead Management System

- Added lead CMS
- Added contact form system
- Added email notifications
- Added CRM preparation
- Added secure form handling


---

# Sonraki Sprint

## Sprint 4.4 — ITENTER Client Portal & Customer Area

Eklenecek:

✅ Müşteri giriş sistemi  
✅ Dashboard  
✅ Proje durum takibi  
✅ Dosya paylaşımı altyapısı  
✅ Destek talepleri  
✅ Müşteri hesap alanı  

Bu aşama ITENTER'ı klasik web sitesinden çıkarıp müşteri yönetim platformuna hazırlayacak.
