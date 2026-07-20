Harika. Devam ediyoruz.

# Sprint 1.5 — About ITENTER + Why Choose Us

Bu bölüm ITENTER'ın kurumsal kimliğini anlatacak. Amaç sadece "hizmet listesi" değil, güven veren bir teknoloji şirketi algısı oluşturmak.

Hedef:

✅ ITENTER kurumsal tanıtım alanı  
✅ Misyon / Vizyon mesajı  
✅ Teknoloji odaklı yaklaşım  
✅ Başarı istatistikleri  
✅ Avantaj kartları  
✅ SEO uyumlu yapı  
✅ Modern iki kolon tasarım  

---

# 1) `template-parts/about.php`

Oluştur:


template-parts/about.php


Kod:

php
<section 
id="about"
class="about-section section">


<div class="container">


<div class="about-grid">



<div class="about-content">


<span class="section-tag">

About ITENTER

</span>



<h2>

Engineering Technology
That Moves Businesses Forward

</h2>



<p>

ITENTER Information Technology creates
innovative software solutions that help
organizations improve efficiency, automate
processes and achieve digital transformation.

</p>



<p>

Our team combines modern technologies,
industry experience and strategic thinking
to deliver secure and scalable solutions.

</p>




<div class="about-buttons">


<a href="#contact"
class="btn-primary">

Work With Us

</a>


</div>


</div>





<div class="about-visual">


<div class="experience-card">


<strong>

12+

</strong>


<span>

Years Technology Experience

</span>


</div>





<div class="mission-card">


<h3>

Our Mission

</h3>


<p>

Creating reliable digital solutions
that empower businesses.

</p>


</div>





<div class="vision-card">


<h3>

Our Vision

</h3>


<p>

Become a trusted technology partner
for global companies.

</p>


</div>



</div>



</div>


</div>


</section>


---

# 2) `front-page.php` Güncelleme

Şu bölümü ekle:

php
get_template_part(
    'template-parts/about'
);


Sıralama:

php
hero

services

about

contact


---

# 3) CSS

`assets/css/main.css`

Ekle:

css
/*
=========================
ABOUT SECTION
=========================
*/


.about-section{

background:#f8fafc;

}



.about-grid{

display:grid;

grid-template-columns:

1fr 1fr;

gap:80px;

align-items:center;

}



.about-content h2{

font-size:48px;

line-height:1.2;

color:#081120;

margin:20px 0;

}



.about-content p{

font-size:18px;

line-height:1.8;

color:#64748B;

margin-bottom:20px;

}




.about-visual{

position:relative;

min-height:500px;

}



.experience-card{


position:absolute;

top:40px;

left:50px;


padding:40px;

background:white;

border-radius:30px;


box-shadow:

0 20px 60px

rgba(0,0,0,.08);

}



.experience-card strong{

display:block;

font-size:70px;

color:#2563EB;

}



.experience-card span{

color:#64748B;

}





.mission-card,

.vision-card{


position:absolute;

padding:30px;

background:

linear-gradient(
135deg,
#2563EB,
#7C3AED
);


color:white;

border-radius:30px;

width:280px;


}



.mission-card{

right:30px;

top:120px;

}



.vision-card{

left:120px;

bottom:50px;

}



.mission-card h3,

.vision-card h3{

font-size:24px;

}



.mission-card p,

.vision-card p{

line-height:1.6;

opacity:.9;

}


---

# 4) Responsive

Ekle:

css
@media(max-width:900px){


.about-grid{

grid-template-columns:1fr;

}


.about-content h2{

font-size:36px;

}


.about-visual{

min-height:600px;

}


}


---

# GitHub Commit

Commit mesajı:


Sprint 1.5 - About ITENTER Section

- Added company introduction
- Added mission and vision cards
- Added technology experience block
- Added responsive layout


---

## Sonraki Sprint

# Sprint 1.6 — Products & Technology Stack

Eklenecek:

- ITENTER ürün alanı
- ERP / CRM / Business Software kartları
- Teknoloji logoları
- Cloud altyapısı
- Modern logo grid
- Animasyonlu teknoloji bölümü

Devam ediyoruz.
