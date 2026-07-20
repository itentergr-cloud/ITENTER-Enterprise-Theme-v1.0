Harika. Devam ediyoruz.

# Sprint 2.3 — ITENTER SEO Engine + Schema.org

Bu aşamada temanın SEO altyapısını oluşturuyoruz. Amaç; arama motorlarının ITENTER Information Technology markasını, hizmetlerini ve projelerini daha iyi anlamasını sağlamak.

Hedef:

✅ Dinamik meta title  
✅ Meta description  
✅ Organization Schema  
✅ Software Company Schema  
✅ Open Graph  
✅ Twitter Cards  
✅ Canonical altyapısı  
✅ JSON-LD desteği  

---

# 1) Yeni Dosya

Oluştur:


inc/seo.php


Kod:

php
<?php


if(!defined('ABSPATH')){

exit;

}



/**
 * ITENTER SEO Meta
 */


function itenter_seo_meta(){


if(is_admin()){

return;

}



/*
TITLE
*/


if(is_front_page()){


$title = get_bloginfo('name') .
' | Information Technology Solutions';



}


elseif(is_singular()){


$title = get_the_title() .
' | ITENTER';



}


else{


$title = get_bloginfo('name');



}



echo '<title>';

echo esc_html($title);

echo '</title>';





/*
DESCRIPTION
*/


if(is_singular()){


$description =
wp_strip_all_tags(

get_the_excerpt()

);


}

else{


$description =
'ITENTER Information Technology provides software development, cloud solutions, AI and digital transformation services.';


}



echo '<meta name="description" content="' .
esc_attr($description) .
'">';




}



add_action(

'wp_head',

'itenter_seo_meta',

1

);


---

# 2) Schema.org JSON-LD

Aynı dosyaya ekle:

php
function itenter_schema(){


?>

<script type="application/ld+json">

{

"@context":
"https://schema.org",


"@type":
"SoftwareCompany",


"name":
"ITENTER Information Technology",


"url":
"<?php echo esc_url(home_url()); ?>",


"email":
"info@itenter.gr",


"description":
"Software development and digital technology solutions company.",


"areaServed":
"Europe",


"serviceType":[

"Software Development",

"Cloud Solutions",

"Artificial Intelligence",

"Cyber Security"

]


}

</script>


<?php


}


add_action(

'wp_head',

'itenter_schema'

);


---

# 3) Open Graph

Ekleyelim:

php
function itenter_open_graph(){


if(is_singular()){


$image = get_the_post_thumbnail_url(
get_the_ID(),
'large'
);


}


else{


$image =
get_template_directory_uri()
.'/assets/images/og-image.jpg';


}



?>


<meta property="og:title"
content="<?php echo esc_attr(get_the_title()); ?>">


<meta property="og:type"
content="website">


<meta property="og:url"
content="<?php echo esc_url(get_permalink()); ?>">


<meta property="og:image"
content="<?php echo esc_url($image); ?>">


<meta property="og:site_name"
content="ITENTER Information Technology">


<?php


}


add_action(

'wp_head',

'itenter_open_graph'

);


---

# 4) functions.php Güncelleme

Ekle:

php
require_once get_template_directory()
.'/inc/seo.php';


---

# 5) SEO Dosya Yapısı

Son yapı:


inc/

├── setup.php

├── enqueue.php

├── post-types.php

├── theme-options.php

└── seo.php


---

# Google İçin Oluşacak Yapı

Ana sayfa:


ITENTER Information Technology
Software Development & Digital Solutions


Schema:


Organization

SoftwareCompany

Services

Projects


---

# GitHub Commit


Sprint 2.3 - SEO Engine

- Added dynamic meta system
- Added JSON-LD schema
- Added Open Graph
- Added SEO foundation


---

# Sonraki Sprint

## Sprint 2.4 — Performance Optimization

Eklenecek:

✅ Cache hazırlığı  
✅ CSS/JS optimizasyonu  
✅ Lazy loading  
✅ WebP desteği  
✅ Preload fonts  
✅ Core Web Vitals optimizasyonu  
✅ Lighthouse iyileştirmeleri  

Bu aşamadan sonra tema hız ve Google performansı için optimize edilecek.
