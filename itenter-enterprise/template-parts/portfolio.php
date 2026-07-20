Harika, devam ediyoruz.

# Sprint 1.7 — Portfolio + Case Studies

Bu bölüm ITENTER'ın yaptığı işleri profesyonel şekilde gösterecek. İlk aşamada görsel arayüzü oluşturacağız. Bir sonraki aşamada bunu WordPress Custom Post Type (Projects) ile tamamen dinamik hale getireceğiz.

Hedef:

✅ Proje vitrini  
✅ Case Study yapısı  
✅ Kategori sistemi  
✅ Teknoloji etiketleri  
✅ Modern kart tasarımı  
✅ Hover efektleri  
✅ SEO uyumlu proje yapısı  

---

# 1) `template-parts/portfolio.php`

Oluştur:


template-parts/portfolio.php


Kod:

php
<section
id="portfolio"
class="portfolio-section section">


<div class="container">


<div class="section-header">


<span class="section-tag">

Our Projects

</span>


<h2>

Solutions That Create
Real Business Value

</h2>


<p>

Explore some of our latest software
and digital transformation projects.

</p>


</div>





<div class="portfolio-filter">


<button class="active">

All

</button>


<button>

Software

</button>


<button>

Web

</button>


<button>

Mobile

</button>


<button>

Cloud

</button>


</div>






<div class="portfolio-grid">



<div class="portfolio-card">


<div class="portfolio-image">


<img src="<?php echo get_template_directory_uri(); ?>/assets/images/project-1.jpg"
alt="Enterprise Software Project">


</div>



<div class="portfolio-content">


<span>

Enterprise Software

</span>


<h3>

Business Management Platform

</h3>


<p>

Custom enterprise solution
for process automation.

</p>


<a href="#">

View Case Study →

</a>


</div>


</div>







<div class="portfolio-card">


<div class="portfolio-image">


<img src="<?php echo get_template_directory_uri(); ?>/assets/images/project-2.jpg"
alt="Cloud Application">


</div>



<div class="portfolio-content">


<span>

Cloud

</span>


<h3>

Cloud Application Platform

</h3>


<p>

Scalable cloud infrastructure
for modern businesses.

</p>


<a href="#">

View Case Study →

</a>


</div>


</div>







<div class="portfolio-card">


<div class="portfolio-image">


<img src="<?php echo get_template_directory_uri(); ?>/assets/images/project-3.jpg"
alt="Mobile Application">


</div>



<div class="portfolio-content">


<span>

Mobile

</span>


<h3>

Mobile Business Application

</h3>


<p>

High-performance mobile
experience.

</p>


<a href="#">

View Case Study →

</a>


</div>


</div>



</div>


</div>


</section>


---

# 2) `front-page.php`

Ekle:

php
get_template_part(
    'template-parts/portfolio'
);


Yeni sıra:


Hero

Services

About

Products

Technology

Portfolio

Contact


---

# 3) Portfolio CSS

`assets/css/main.css`

Ekle:

css
/*
=========================
PORTFOLIO
=========================
*/


.portfolio-section{

background:#f8fafc;

}




.portfolio-filter{


display:flex;

justify-content:center;

gap:15px;

margin-bottom:50px;


}



.portfolio-filter button{


padding:12px 25px;


border-radius:50px;


border:1px solid #e2e8f0;


background:white;


cursor:pointer;


font-weight:600;


}



.portfolio-filter .active{


background:

linear-gradient(
90deg,
#2563EB,
#7C3AED
);


color:white;


border:none;


}




.portfolio-grid{


display:grid;


grid-template-columns:

repeat(3,1fr);


gap:30px;


}





.portfolio-card{


background:white;


border-radius:30px;


overflow:hidden;


transition:.4s;


border:

1px solid #e2e8f0;


}




.portfolio-card:hover{


transform:translateY(-12px);


box-shadow:

0 30px 70px

rgba(0,0,0,.12);


}




.portfolio-image{


height:240px;


overflow:hidden;


}



.portfolio-image img{


width:100%;


height:100%;


object-fit:cover;


transition:.5s;


}



.portfolio-card:hover img{


transform:scale(1.08);


}




.portfolio-content{


padding:30px;


}



.portfolio-content span{


color:#2563EB;


font-weight:700;


font-size:14px;


}




.portfolio-content h3{


font-size:25px;


color:#081120;


}



.portfolio-content p{


color:#64748B;


line-height:1.7;


}



.portfolio-content a{


color:#2563EB;


font-weight:700;


}


---

# Responsive

Ekle:

css
@media(max-width:900px){


.portfolio-grid{

grid-template-columns:1fr;

}



.portfolio-filter{

flex-wrap:wrap;

}


}


---

# GitHub Commit


Sprint 1.7 - Portfolio Case Studies

- Added portfolio section
- Added project cards
- Added category filters UI
- Added case study layout
- Added responsive design


---

## Sonraki Sprint

# Sprint 1.8 — Statistics + Testimonials

Eklenecek:

- Başarı rakamları
- Müşteri yorumları
- Güven alanı
- Logo carousel
- Swiper.js entegrasyonu

Bundan sonra site daha çok kurumsal büyük firma seviyesine yaklaşacak.
