Harika. Devam ediyoruz.

# Sprint 4.4 — ITENTER Client Portal & Customer Area

Bu sprintte ITENTER temasına kurumsal müşteriler için bir müşteri portalı altyapısı ekliyoruz.

Amaç:

✅ Müşteri giriş sistemi  
✅ Özel müşteri paneli  
✅ Proje durum takibi  
✅ Destek talebi altyapısı  
✅ Dosya paylaşım hazırlığı  
✅ Gelecekte SaaS platformuna dönüşebilir yapı  

---

# 1) Client Portal Klasörü

Yeni yapı:


client-portal/

├── login.php

├── dashboard.php

├── projects.php

├── tickets.php

└── files.php


---

# 2) Client User Role

Daha önce oluşturduğumuz:


itenter_client


rolünü genişletiyoruz.

Dosya:


inc/user-roles.php


Güncelle:

php
function itenter_client_role(){


add_role(

'itenter_client',

'ITENTER Client',

[

'read'=>true,

'upload_files'=>true

]

);


}


add_action(

'init',

'itenter_client_role'

);


---

# 3) Client Dashboard Template

Dosya:


client-portal/dashboard.php


Kod:

php
<?php


if(!is_user_logged_in()){


wp_redirect(

wp_login_url()

);


exit;


}


?>


<div class="client-dashboard">


<h1>

Welcome to ITENTER Portal

</h1>



<div class="dashboard-cards">


<div class="portal-card">

<h3>

Projects

</h3>

<p>

View your active projects

</p>

</div>




<div class="portal-card">

<h3>

Support

</h3>

<p>

Create support requests

</p>

</div>



<div class="portal-card">

<h3>

Files

</h3>

<p>

Access shared documents

</p>

</div>


</div>


</div>


---

# 4) Project Tracking System

Yeni Custom Post Type:


it_client_project


Dosya:


inc/client-projects.php


Kod:

php
register_post_type(

'client_project',

[

'labels'=>[

'name'=>'Client Projects',

'singular_name'=>'Client Project'

],


'public'=>false,


'show_ui'=>true,


'menu_icon'=>
'dashicons-clipboard',


'supports'=>[

'title',

'editor'

]

]

);


---

# 5) Proje Durum Alanları

Her müşteri projesi:


Project Name

Client

Status:

- Planning

- Development

- Testing

- Completed


Deadline

Notes


---

# 6) Support Ticket Hazırlığı

Yeni Post Type:


it_ticket


Alanlar:


Ticket ID

Customer

Subject

Priority

Status

Response


---

# 7) Portal Menü

Müşteri girişinden sonra:


ITENTER Client Portal


Dashboard

│

Projects

│

Support Tickets

│

Files

│

Account


---

# 8) Güvenlik

Portal için:


✓ User authentication

✓ Role control

✓ Private content

✓ Permission checks

✓ Secure uploads


---

# 9) Gelecek Entegrasyonları

Hazır altyapı:


Client Portal

↓

CRM

↓

Project Management

↓

Billing

↓

SaaS Platform


---

# GitHub Commit


Sprint 4.4 - Client Portal Foundation

- Added client dashboard
- Added client role system
- Added project tracking structure
- Added support portal preparation


---

# Sonraki Sprint

## Sprint 4.5 — ITENTER Final Enterprise Features

Eklenecek:

✅ Dark mode sistemi  
✅ Advanced search  
✅ Notification center  
✅ API hazırlığı  
✅ REST API endpointleri  
✅ PWA hazırlığı  
✅ Mobil uygulama bağlantı altyapısı  

Bu sprint ile ITENTER teması bir kurumsal web sitesinden tam bir dijital platform altyapısına yaklaşacak.
