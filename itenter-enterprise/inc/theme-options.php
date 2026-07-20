Harika. Devam ediyoruz.

# Sprint 2.1 — ITENTER Theme Options Panel

Bu aşamada site sahibi WordPress panelinden temel kurumsal bilgileri değiştirebilecek.

Hedef:

✅ Logo ve marka bilgileri  
✅ Telefon  
✅ E-mail  
✅ Sosyal medya bağlantıları  
✅ Hero başlığı  
✅ Hero açıklaması  
✅ Footer bilgileri  
✅ Genel tema ayarları  

Bu yapı ileride özel bir "ITENTER Theme Panel" olarak genişletilecek.

---

## 1) Yeni Dosya

Oluştur:


inc/theme-options.php


Kod:

php
<?php


if(!defined('ABSPATH')){

exit;

}



/**
 * ITENTER Theme Options
 */


function itenter_customize_register($wp_customize){



/*
====================
GENERAL SECTION
====================
*/


$wp_customize->add_section(

'itenter_general',

[

'title'=>
'ITENTER General Settings',

'priority'=>30

]

);





/*
PHONE
*/


$wp_customize->add_setting(

'itenter_phone',

[

'default'=>'',

'sanitize_callback'=>
'sanitize_text_field'

]

);



$wp_customize->add_control(

'itenter_phone',

[

'label'=>
'Phone Number',

'section'=>
'itenter_general',

'type'=>'text'

]

);





/*
EMAIL
*/


$wp_customize->add_setting(

'itenter_email',

[

'default'=>'info@itenter.gr',

'sanitize_callback'=>
'sanitize_email'

]

);



$wp_customize->add_control(

'itenter_email',

[

'label'=>
'Email Address',

'section'=>
'itenter_general',

'type'=>'email'

]

);





/*
====================
HERO SECTION
====================
*/



$wp_customize->add_section(

'itenter_hero',

[

'title'=>
'Hero Settings'

]

);





$wp_customize->add_setting(

'hero_title',

[

'default'=>
'Digital Solutions For Future Businesses',

'sanitize_callback'=>
'sanitize_text_field'

]

);



$wp_customize->add_control(

'hero_title',

[

'label'=>
'Hero Title',

'section'=>
'itenter_hero',

'type'=>'text'

]

);






$wp_customize->add_setting(

'hero_description',

[

'default'=>
'Modern software and technology solutions.',

'sanitize_callback'=>
'sanitize_textarea_field'

]

);



$wp_customize->add_control(

'hero_description',

[

'label'=>
'Hero Description',

'section'=>
'itenter_hero',

'type'=>'textarea'

]

);




}



add_action(

'customize_register',

'itenter_customize_register'

);


---

# 2) `functions.php` Güncelle

Ekle:

php
require_once get_template_directory()
.'/inc/theme-options.php';


---

# 3) Hero Dinamik Yapma

Dosya:


template-parts/hero.php


Başlığı değiştir:

Eski:

html
<h1>
Digital Solutions
For The Future
</h1>


Yeni:

php
<h1>

<?php

echo esc_html(

get_theme_mod(

'hero_title',

'Digital Solutions For Future Businesses'

)

);

?>

</h1>


---

Açıklama:

Eski:

html
<p>
Modern software solutions...
</p>


Yeni:

php
<p>

<?php

echo esc_html(

get_theme_mod(

'hero_description',

'Modern software and technology solutions.'

)

);

?>

</p>


---

# 4) Contact Bilgileri Dinamik

`contact.php`

Telefon:

php
<?php

echo esc_html(

get_theme_mod(

'itenter_phone'

)

);

?>


Email:

php
<?php

echo esc_html(

get_theme_mod(

'itenter_email',

'info@itenter.gr'

)

);

?>


---

# WordPress Panel Sonucu

Şurada yeni alanlar oluşacak:


Appearance

└── Customize

    └── ITENTER General Settings

        Phone
        Email


    └── Hero Settings

        Title
        Description


---

# GitHub Commit


Sprint 2.1 - Theme Options Panel

- Added WordPress Customizer
- Added hero controls
- Added company information settings
- Added dynamic content support


---

## Sonraki Sprint

# Sprint 2.2 — Dynamic Projects & Portfolio CMS

Eklenecek:

- Proje ekleme paneli
- Proje görselleri
- Kategori sistemi
- Teknoloji etiketleri
- Dinamik portfolio grid
- Case Study sayfaları

Bu aşamadan sonra ITENTER sitesi gerçek bir kurumsal CMS haline gelecek.
