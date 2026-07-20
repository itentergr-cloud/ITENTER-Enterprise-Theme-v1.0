Harika. Devam ediyoruz.

# Sprint 2.9 — WooCommerce & Client Portal Preparation

Bu sprintte ITENTER temasını gelecekte:

- yazılım paketleri satışı,
- bakım anlaşmaları,
- SaaS abonelikleri,
- müşteri alanı,
- destek portalı

gibi özelliklere hazır hale getiriyoruz.

Amaç:

✅ WooCommerce uyumluluğu  
✅ Hizmet paketleri altyapısı  
✅ Müşteri hesabı hazırlığı  
✅ Dijital ürün desteği  
✅ Kurumsal SaaS genişleme altyapısı  

---

# 1) WooCommerce Tema Desteği

Dosya:


inc/setup.php


İçine ekle:

php
function itenter_woocommerce_support(){


add_theme_support(

'woocommerce'

);



add_theme_support(

'wc-product-gallery-zoom'

);



add_theme_support(

'wc-product-gallery-lightbox'

);



add_theme_support(

'wc-product-gallery-slider'

);



}


add_action(

'after_setup_theme',

'itenter_woocommerce_support'

);


---

# 2) WooCommerce Klasör Hazırlığı

Tema içine oluştur:


woocommerce/

├── archive-product.php

├── single-product.php

└── content-product.php


Bu dosyalar ileride ITENTER tasarımına özel mağaza görünümü için kullanılacak.

---

# 3) Hizmet Paketleri İçin Product Category

Yeni dosya:


inc/products.php


Kod:

php
<?php


if(!defined('ABSPATH')){

exit;

}



function itenter_service_packages(){


register_post_type(

'it_package',

[

'labels'=>[

'name'=>'Service Packages',

'singular_name'=>'Package'

],


'public'=>true,


'menu_icon'=>
'dashicons-cart',


'supports'=>[

'title',

'editor',

'thumbnail'

],


'rewrite'=>[

'slug'=>
'packages'

]


]

);


}


add_action(

'init',

'itenter_service_packages'

);


---

# 4) Client Portal Hazırlığı

Yeni klasör:


client-portal/


Yapı:


client-portal/

├── dashboard.php

├── login.php

└── account.php


Şimdilik temel altyapı hazırlanıyor.

---

# 5) Kullanıcı Rolleri

Yeni dosya:


inc/user-roles.php


Kod:

php
<?php


function itenter_client_role(){


add_role(

'itenter_client',

'ITENTER Client',

[

'read'=>true

]

);


}


add_action(

'init',

'itenter_client_role'

);


---

# 6) functions.php Güncelle

Ekle:

php
require_once get_template_directory()
.'/inc/products.php';


require_once get_template_directory()
.'/inc/user-roles.php';


---

# Yeni WordPress Yapısı

Panel:


Dashboard

├── Services

├── Projects

├── Testimonials

├── Packages

└── Products


---

# GitHub Commit


Sprint 2.9 - WooCommerce Client Portal Ready

- Added WooCommerce support
- Added service package system
- Added client role
- Added SaaS expansion foundation


---

# Sonraki Sprint

## Sprint 3.0 — Final Theme Packaging & Production Release

Bu aşamada:

✅ Tema klasör temizliği  
✅ Demo içerik sistemi  
✅ One Click Demo Import  
✅ Theme Screenshot  
✅ WordPress.org standartları  
✅ Lisans dosyaları  
✅ Final ZIP paket yapısı  

hazırlanacak.

Bu aşamadan sonra ITENTER Enterprise Theme v1.0 yayınlanmaya hazır hale gelecek.
