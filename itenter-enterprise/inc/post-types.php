Harika. Şimdi Sprint 2.0 — Dynamic WordPress CMS Architecture aşamasına geçiyoruz.

Şu ana kadar tasarım iskeletini oluşturduk. Artık ITENTER temasını gerçek bir WordPress ürünü haline getiriyoruz.

Bu aşamanın amacı:

✅ Yönetim panelinden içerik ekleme  
✅ Kod değiştirmeden site yönetimi  
✅ Services sistemi  
✅ Projects sistemi  
✅ Testimonials sistemi  
✅ SEO altyapısı  
✅ Gelecekte genişletilebilir mimari  

---

# Sprint 2.0 — Custom Post Types

Yeni klasör:


inc/
 ├── setup.php
 ├── enqueue.php
 ├── theme-options.php
 └── post-types.php   ← yeni


---

# 1) `inc/post-types.php`

Oluştur:


inc/post-types.php


Kod:

php
<?php

if(!defined('ABSPATH')){

exit;

}



/**
 * Register Custom Post Types
 */



function itenter_register_post_types(){



/*
====================
SERVICES
====================
*/


register_post_type(

'it_service',

[

'labels'=>[

'name'=>'Services',

'singular_name'=>'Service'

],


'public'=>true,


'menu_icon'=>'dashicons-admin-tools',


'supports'=>[

'title',

'editor',

'thumbnail'

],


'has_archive'=>false,


'rewrite'=>[

'slug'=>'services'

]

]

);





/*
====================
PROJECTS
====================
*/


register_post_type(

'it_project',

[

'labels'=>[

'name'=>'Projects',

'singular_name'=>'Project'

],


'public'=>true,


'menu_icon'=>'dashicons-portfolio',


'supports'=>[

'title',

'editor',

'thumbnail'

],


'has_archive'=>true,


'rewrite'=>[

'slug'=>'projects'

]

]

);






/*
====================
TESTIMONIALS
====================
*/


register_post_type(

'it_testimonial',

[

'labels'=>[

'name'=>'Testimonials',

'singular_name'=>'Testimonial'

],


'public'=>true,


'menu_icon'=>'dashicons-format-quote',


'supports'=>[

'title',

'editor',

'thumbnail'

],


'has_archive'=>false

]

);



}


add_action(

'init',

'itenter_register_post_types'

);


---

# 2) `functions.php` Güncelleme

En alta ekle:

php
require_once get_template_directory()
.'/inc/post-types.php';


---

# WordPress Admin'de Yeni Menü Oluşacak:

Panelde:


Dashboard

├── Services
│
├── Projects
│
└── Testimonials


görünecek.

---

# 3) Service Template Hazırlığı

Yeni klasör:


template-parts/


Yeni dosya:


service-card.php


Kod:

php
<div class="service-card">


<div class="service-icon">

<?php

if(has_post_thumbnail()){

the_post_thumbnail();

}

?>

</div>



<h3>

<?php

the_title();

?>

</h3>



<p>

<?php

echo wp_trim_words(
get_the_content(),
20
);

?>

</p>


</div>


---

# 4) Services Bölümünü Dinamik Yapma

Eski statik kartlar yerine:

`services.php`

içine:

php
<div class="services-grid">


<?php


$args=[

'post_type'=>
'it_service',

'posts_per_page'=>6

];


$query=new WP_Query($args);



if($query->have_posts()):


while($query->have_posts()):

$query->the_post();


get_template_part(
'template-parts/service-card'
);


endwhile;


endif;


wp_reset_postdata();


?>


</div>


---

# GitHub Commit

Commit:


Sprint 2.0 - WordPress CMS Architecture

- Added Custom Post Types
- Added Services CMS
- Added Projects CMS
- Added Testimonials CMS
- Added dynamic service cards


---

## Sonraki Sprint

# Sprint 2.1 — Theme Options Panel

Eklenecek:

- Logo ayarları
- Telefon
- Email
- Sosyal medya
- Hero başlığı
- Hero açıklaması
- Footer bilgileri
- Renk ayarları

Bundan sonra ITENTER sitesi tamamen WordPress panelinden yönetilebilir olacak.
