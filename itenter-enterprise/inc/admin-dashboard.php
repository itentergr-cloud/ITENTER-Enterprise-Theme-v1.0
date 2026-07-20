Harika. Devam ediyoruz.

# Sprint 2.7 — ITENTER Advanced Admin Dashboard

Bu aşamada WordPress yönetim panelini ITENTER temasına özel hale getiriyoruz.

Amaç:

✅ Özel tema ayar merkezi  
✅ Marka bilgileri yönetimi  
✅ Sosyal medya alanları  
✅ Hero görsel kontrolü  
✅ Footer yönetimi  
✅ Yönetici için hızlı erişim paneli  

---

# 1) Yeni Dosya

Oluştur:


inc/admin-dashboard.php


---

Kod:

php
<?php


if(!defined('ABSPATH')){

exit;

}



/**
 * ITENTER Admin Dashboard Widget
 */


function itenter_dashboard_widget(){


wp_add_dashboard_widget(

'itenter_dashboard',

'ITENTER Theme Control',

'itenter_dashboard_content'

);


}



add_action(

'wp_dashboard_setup',

'itenter_dashboard_widget'

);





function itenter_dashboard_content(){


?>

<div>


<h3>

ITENTER Information Technology

</h3>


<p>

Premium Enterprise WordPress Theme

</p>



<hr>


<ul>


<li>
✓ Services Management
</li>


<li>
✓ Projects Portfolio
</li>


<li>
✓ SEO Ready
</li>


<li>
✓ Multilingual Ready
</li>


</ul>


</div>


<?php


}


---

# 2) Admin Menü Oluşturma

Aynı dosyaya ekle:

php
function itenter_admin_menu(){


add_menu_page(

'ITENTER Settings',

'ITENTER',

'manage_options',

'itenter-settings',

'itenter_settings_page',

'dashicons-cloud',

60

);


}



add_action(

'admin_menu',

'itenter_admin_menu'

);


---

# 3) Ayarlar Sayfası

Ekleyelim:

php
function itenter_settings_page(){


?>


<div class="wrap">


<h1>

ITENTER Theme Settings

</h1>



<p>

Manage your company website settings.

</p>



<table class="form-table">


<tr>

<th>

Company

</th>


<td>

ITENTER Information Technology

</td>


</tr>



<tr>

<th>

Website

</th>


<td>

itenter.gr

</td>


</tr>



</table>


</div>



<?php


}


---

# 4) functions.php Güncelle

Ekle:

php
require_once get_template_directory()
.'/inc/admin-dashboard.php';


---

# 5) Admin Panel Sonucu

WordPress giriş sonrası:


Dashboard

└── ITENTER

    └── ITENTER Settings


oluşacak.

Dashboard içinde:


ITENTER Information Technology

✓ Services
✓ Projects
✓ SEO
✓ Multilingual


bilgileri görünecek.

---

# 6) Sonraki Genişletmeler İçin Hazır

Bu panel içine ileride:


ITENTER Settings

├── Logo
├── Colors
├── Hero
├── Contact
├── Social Media
├── Footer
├── SEO
└── Analytics


eklenecek.

---

# GitHub Commit


Sprint 2.7 - Advanced Admin Dashboard

- Added ITENTER dashboard widget
- Added custom admin menu
- Added theme settings page
- Added admin management structure


---

## Sonraki Sprint

# Sprint 2.8 — Gutenberg Blocks & Page Builder Support

Eklenecek:

✅ ITENTER özel Gutenberg blokları  
✅ Hero Block  
✅ Services Block  
✅ Projects Block  
✅ Testimonials Block  
✅ Elementor uyumluluğu  
✅ Drag & Drop sayfa düzeni  

Bu aşamadan sonra kullanıcı kod yazmadan yeni sayfalar oluşturabilecek.
