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

Harika. Devam ediyoruz.

# Sprint 2.2 — Dynamic Projects & Portfolio CMS

Bu aşamada Portfolio bölümü artık statik kartlardan çıkıp tamamen WordPress yönetilebilir proje sistemi olacak.

Hedef:

✅ Admin panelinden proje ekleme  
✅ Proje görseli yükleme  
✅ Proje kategorileri  
✅ Teknoloji etiketleri  
✅ Case Study sayfası  
✅ Dinamik portfolio listeleme  

---

# 1) Project Taxonomy Oluşturma

Dosya:


inc/post-types.php


`it_project` kayıtından sonra ekle:

php
/**
 * Project Categories
 */

function itenter_project_taxonomy(){



register_taxonomy(

'project_category',

'it_project',

[

'label'=>
'Project Categories',


'hierarchical'=>true,


'rewrite'=>[

'slug'=>'project-category'

]


]

);



}



add_action(

'init',

'itenter_project_taxonomy'

);


---

WordPress panelinde:


Projects

├── Add New Project

└── Project Categories


oluşacak.

---

# 2) Project Card Component

Yeni dosya:


template-parts/project-card.php


Kod:

php
<article class="portfolio-card">


<div class="portfolio-image">


<?php


if(has_post_thumbnail()){


the_post_thumbnail(
'large'
);


}


?>


</div>




<div class="portfolio-content">


<?php


$terms = get_the_terms(

get_the_ID(),

'project_category'

);



if($terms && !is_wp_error($terms)){


echo '<span>';

echo esc_html(

$terms[0]->name

);


echo '</span>';

}


?>



<h3>

<?php

the_title();

?>

</h3>



<p>

<?php

echo wp_trim_words(

get_the_content(),

18

);

?>

</p>



<a href="<?php the_permalink(); ?>">

View Case Study →

</a>


</div>


</article>


---

# 3) Portfolio Bölümünü Dinamik Yapma

Dosya:


template-parts/portfolio.php


Kartların olduğu alanı değiştir:

php
<div class="portfolio-grid">


<?php


$projects = new WP_Query([

'post_type'=>
'it_project',

'posts_per_page'=>6

]);



if($projects->have_posts()){


while($projects->have_posts()){


$projects->the_post();



get_template_part(

'template-parts/project-card'

);



}


}



wp_reset_postdata();


?>


</div>


---

# 4) Single Project Sayfası

Yeni dosya:


single-it_project.php


Kod:

php
<?php

get_header();

?>


<main class="project-single">


<div class="container">


<?php


while(have_posts()):


the_post();


?>


<h1>

<?php the_title(); ?>

</h1>



<div class="project-image">


<?php

the_post_thumbnail(
'large'
);

?>


</div>



<div class="project-content">


<?php

the_content();

?>


</div>



<?php


endwhile;


?>


</div>


</main>


<?php

get_footer();

?>


---

# 5) Project SEO Hazırlığı

Her proje için:

- Başlık
- Açıklama
- Görsel
- Kategori
- İçerik

Google tarafından ayrı sayfa olarak indexlenebilir hale gelir.

Örnek:


itenter.gr/projects/cloud-platform/

itenter.gr/projects/business-software/


---

# GitHub Commit


Sprint 2.2 - Dynamic Portfolio CMS

- Added project taxonomy
- Added dynamic project cards
- Added project single template
- Added portfolio CMS structure


---

# Sonraki Sprint

## Sprint 2.3 — SEO Engine + Schema.org

Eklenecek:

✅ Meta title sistemi  
✅ Meta description  
✅ Organization Schema  
✅ Local Business Schema  
✅ Software Company Schema  
✅ Open Graph  
✅ Twitter Cards  
✅ Breadcrumb altyapısı  

Bu aşamadan sonra ITENTER teması sadece güzel değil, Google için optimize edilmiş profesyonel bir ürün haline gelecek.
