Harika, devam ediyoruz.

# Sprint 1.8 — Statistics + Testimonials

Bu bölüm ITENTER için güven oluşturacak en önemli alanlardan biri olacak.

Amaç:

✅ Başarı rakamlarını göstermek  
✅ Müşteri güveni oluşturmak  
✅ Referans yorumları eklemek  
✅ Logo alanına hazır altyapı oluşturmak  
✅ Premium kurumsal görünüm sağlamak  

---

# 1) `template-parts/statistics.php`

Oluştur:


template-parts/statistics.php


Kod:

php
<section class="statistics-section">


<div class="container">


<div class="statistics-grid">



<div class="stat-box">


<strong data-count="150">

0

</strong>


<span>

Completed Projects

</span>


</div>





<div class="stat-box">


<strong data-count="40">

0

</strong>


<span>

Happy Clients

</span>


</div>





<div class="stat-box">


<strong data-count="12">

0

</strong>


<span>

Years Experience

</span>


</div>





<div class="stat-box">


<strong data-count="99">

0

</strong>


<span>

Client Satisfaction %

</span>


</div>



</div>


</div>


</section>


---

# 2) `template-parts/testimonials.php`

Oluştur:


template-parts/testimonials.php


Kod:

php
<section 
class="testimonials-section section">


<div class="container">


<div class="section-header">


<span class="section-tag">

Testimonials

</span>


<h2>

Trusted By Businesses

</h2>


<p>

Our partners rely on ITENTER
for technology solutions.

</p>


</div>





<div class="testimonial-grid">



<div class="testimonial-card">


<div class="quote">

"

</div>


<p>

ITENTER delivered a powerful software
solution that improved our workflow.

</p>


<h4>

Business Partner

</h4>


<span>

CEO

</span>


</div>





<div class="testimonial-card">


<div class="quote">

"

</div>


<p>

Professional approach, modern technology
and excellent support.

</p>


<h4>

Technology Client

</h4>


<span>

Director

</span>


</div>





<div class="testimonial-card">


<div class="quote">

"

</div>


<p>

A reliable technology partner for our
digital transformation journey.

</p>


<h4>

Enterprise Client

</h4>


<span>

Manager

</span>


</div>




</div>


</div>


</section>


---

# 3) `front-page.php`

Ekle:

php
get_template_part(
    'template-parts/statistics'
);


get_template_part(
    'template-parts/testimonials'
);


Yeni sıra:


Hero

Services

About

Products

Technology

Portfolio

Statistics

Testimonials

Contact


---

# 4) Statistics CSS

`assets/css/main.css`

Ekle:

css
/*
=========================
STATISTICS
=========================
*/


.statistics-section{


background:

linear-gradient(
135deg,
#2563EB,
#7C3AED
);


padding:80px 0;


}




.statistics-grid{


display:grid;


grid-template-columns:

repeat(4,1fr);


gap:30px;


}



.stat-box{


text-align:center;


color:white;


}



.stat-box strong{


display:block;


font-size:65px;


font-weight:800;


}



.stat-box span{


font-size:18px;


opacity:.9;


}


---

# 5) Testimonials CSS

css
/*
=========================
TESTIMONIALS
=========================
*/


.testimonials-section{

background:#f8fafc;

}




.testimonial-grid{


display:grid;


grid-template-columns:

repeat(3,1fr);


gap:30px;


}




.testimonial-card{


background:white;


padding:40px;


border-radius:30px;


border:

1px solid #e2e8f0;


}



.quote{


font-size:60px;


color:#2563EB;


line-height:1;


}



.testimonial-card p{


font-size:18px;


line-height:1.7;


color:#64748B;


}



.testimonial-card h4{


margin-bottom:5px;


color:#081120;


}



.testimonial-card span{


color:#2563EB;


}


---

# 6) Responsive

Ekle:

css
@media(max-width:900px){


.statistics-grid{


grid-template-columns:

repeat(2,1fr);


}



.testimonial-grid{


grid-template-columns:

1fr;


}


}


---

# GitHub Commit


Sprint 1.8 - Statistics Testimonials

- Added company statistics
- Added customer testimonials
- Added trust building sections
- Added responsive layouts


---

## Sonraki Sprint

# Sprint 1.9 — Contact + Footer + Final OnePage Assembly

Eklenecek:

- İletişim formu
- Google Maps alanı
- Şirket bilgileri
- Sosyal medya
- Premium footer
- OnePage tamamlanması

Bundan sonra temel site yapısı tamamlanmış olacak. 🚀
