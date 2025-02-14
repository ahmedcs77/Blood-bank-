<!-- =========

	Template Name: Play
	Author: UIdeck
	Author URI: https://uideck.com/
	Support: https://uideck.com/support/
	Version: 1.1

========== -->

<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>blood</title>

    <!-- Primary Meta Tags -->
<meta name="title" content="Play - Free Open Source HTML Bootstrap Template by UIdeck">
<meta name="description" content="Play - Free Open Source HTML Bootstrap Template by UIdeck Team">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://uideck.com/play/">
<meta property="og:title" content="Play - Free Open Source HTML Bootstrap Template by UIdeck">
<meta property="og:description" content="Play - Free Open Source HTML Bootstrap Template by UIdeck Team">
<meta property="og:image" content="https://uideck.com/wp-content/uploads/2021/09/play-meta-bs.jpg">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://uideck.com/play/">
<meta property="twitter:title" content="Play - Free Open Source HTML Bootstrap Template by UIdeck">
<meta property="twitter:description" content="Play - Free Open Source HTML Bootstrap Template by UIdeck Team">
<meta property="twitter:image" content="https://uideck.com/wp-content/uploads/2021/09/play-meta-bs.jpg">

    <!--====== Favicon Icon ======-->
    <link
      rel="shortcut icon"
      href=" public_html/assets/images/favicon.png"
      
    />

    <!-- ===== All CSS files ===== -->
    <link rel="stylesheet" href=" public_html/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href=" public_html/assets/css/animate.css" />
    <link rel="stylesheet" href=" public_html/assets/css/lineicons.css" />
    <link rel="stylesheet" href=" public_html/assets/css/ud-styles.css" />
  </head>
  <body>
    <?php 
    session_start();
    if(isset($_SESSION["type"])){
      
    session_destroy();
    }
    // else{
    //   echo"no session";exit();
    // }
    ?>
    <!-- ====== Header Start ====== -->
    <header class="ud-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg">
              <a class="navbar-brand" href="index.php">
                <img src=" public_html/assets/images/logo/favicon.png" alt="Logo" style="max-height: 50px;" />
              </a>
              <button class="navbar-toggler">
                <span class="toggler-icon"> </span>
                <span class="toggler-icon"> </span>
                <span class="toggler-icon"> </span>
              </button>

              <div class="navbar-collapse  ">
                
              <!-- <div class="navbar-btn   "> -->
              <ul id="nav" class="navbar-nav mx-auto ">
                  <li class="nav-item ">
                <a href=" public_html/admin_login.php" class="ud-main-btn ud-login-btn">
                  الادارة
                </a>
                  </li>
                  <li class="nav-item">
                <a class="ud-main-btn ud-white-btn" href=" public_html/create_account.php">
                  انشاء حساب
                </a>
                  </li>
                  <li class="nav-item">
                <a class="ud-main-btn ud-white-btn" href=" public_html/call_me.php">
                  تواصل معنا 
                </a>
                  </li>
              </ul>
              </div>
              <!-- </div> -->

             
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- ====== Header End ====== -->

    <!-- ====== Hero Start ====== -->
    <section class="ud-hero" id="home" style='background-image: url(" public_html/assets/images/b.jpg");
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;'>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
           
            <div class="ud-hero-content wow fadeInUp" data-wow-delay=".2s">
              <h1 class="ud-hero-title">
               اهلا وسهلا بكم في بنك الدم اليمني الرقمي 
              </h1>
              <p class="ud-hero-desc">
               موقع الكتروني للتبرع بالدم او طلب دم عن طريق مستشفيات
              </p>
              <?php
              include("public_html/auth/alert.php");
            ?>
              <ul class="ud-hero-buttons">
                <li>
                  <a type="button" rel="nofollow noopener"  class="ud-main-btn ud-white-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    خدماتنا
                  </a>
                </li>
               
              </ul>
            </div>

            <div class="ud-hero-brands-wrapper wow fadeInUp" data-wow-delay=".3s">
             
            </div>

            <div class="ud-hero-image wow fadeInUp" data-wow-delay=".25s">
              <img src=" public_html/assets/images/hero/blood.jpg" alt="hero-image" />
              <img
                src=" public_html/assets/images/hero/dotted-shape.svg"
                alt="shape"
                class="shape shape-1"
              />
              <img
                src=" public_html/assets/images/hero/dotted-shape.svg"
                alt="shape"
                class="shape shape-2"
              />
            </div>

            
            <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action=" public_html/login/direct.php" method="post">
      <div class="modal-content">
        <div class="modal-body">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="type" value="0" id="flexRadioDefault1" checked>
              <label class="form-check-label" for="flexRadioDefault1">
                متبرع
              </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="type" value="1" id="flexRadioDefault2" >
            <label class="form-check-label" for="flexRadioDefault2">
                مريض
            </label>
          </div>
         <div class="form-check">
            <input class="form-check-input" type="radio" name="type" value="3" id="flexRadioDefault4" >
            <label class="form-check-label" for="flexRadioDefault4">
                مستشفئ
            </label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">الغاء</button>
          <button type="submit" class="btn btn-success">دخول</button>
        </div>
      </div>
    </form>
  </div>
</div>


          </div>
        </div>
      </div>
    </section>
    <!-- ====== Hero End ====== -->

    <!-- ====== Features Start ====== -->
    <section id="features" class="ud-features">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="ud-section-title">
              <h2>مميزات التبرع بالدم:</h2>
              <p>
              هو إجراء طبي تطوعي يتم بنقل الدم أو أحد مركباته من شخص سليم معافى إلى شخص مريض يحتاج للدم. وهذا الإجراء يحتاج إليه الملايين من الناس كل عام؛ فيستخدم أثناء الجراحة أو الحوادث أو بعض الأمراض  التي تتطلب نقل بعض مكونات الدم.
              </p>
            </div>
          </div>
        </div>
        <div class="row">
        <div class="col-xl-4 col-lg-3 col-sm-6">
            <div class="ud-single-feature wow fadeInUp" data-wow-delay=".1s">
              <div class="ud-feature-icon">
                <i class="lni lni-layers"></i>
              </div>
              <div class="ud-feature-content " >
                <h3 class="ud-feature-title"style="color:#000">شروط التبرع بالدم:</h3>
                <p class="ud-feature-desc">
                  <ol>
                   <li>أن يكون المتبرع بصحة جيدة ولا يعاني أي أمراض معدية.</li>
                   <li>أن يكون عمر المتبرع من 18-65 سنة</li>
                   <li>يجب أن لا يقل وزن المتبرع عن 50 كجم.</li>
                   <li>أن تكون نسبة الهيموجلوبين للرجال من 14- 17 جم، وللنساء من 12-14 جم.</li>
                   <li> أن يكون النبض بين 50-100 في الدقيقة.</li>
                   <li> أن لا تزيد درجة الحرارة عن 37 درجة مئوية.</li>
                   <li> أن يكون معدل ضغط الدم أقل من120/80 ملم زئبق.</li>
                  </ol>
                </p>
               
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-3 col-sm-6">
            <div class="ud-single-feature wow fadeInUp" data-wow-delay=".15s">
              <div class="ud-feature-icon">
                <i class="lni lni-star"></i>
              </div>
              <div class="ud-feature-content">
                <h3 class="ud-feature-title"style="color:#000">فوائد التبرع بالدم:</h3>
                <p class="ud-feature-desc">
                 <ol>
                   <li>زيادة نشاط نخاع العظم لإنتاج خلايا دم جديدة (كريات حمراء وكريات بيضاء وصفائح دموية).</li>
                   <li> زيادة نشاط الدورة الدموية .</li>
                   <li> التبرع بالدم يساعد علي تقليل نسبة الحديد في الدم لأنه يعتبر أحد أسباب الإصابة بأمراض  القلب وانسداد الشرايين. </li>
                   <li> اثبتت الدراسات أن الذين يتبرعون بدمهم مرة واحدة على الأقل كل سنة هم أقل عرضة للإصابة بأمراض  الدورة الدموية وسرطان الدم.</li>
                 </ol>
                </p>
               
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-3 col-sm-6">
            <div class="ud-single-feature wow fadeInUp" data-wow-delay=".2s">
              <div class="ud-feature-icon">
                <i class="lni lni-warning"></i>
              </div>
              <div class="ud-feature-content">
                <h3 class="ud-feature-title"style="color:#000">الحالات التي لا يسمح لها بالتبرع بالدم:</h3>
                <p class="ud-feature-desc">
                  <ol>
                    <li> أقل من عمر 18 سنة.</li>
                    <li> المصابون بأمراض  معدية مثل (الإيدز، التهاب الكبد ب وج، الزهري، الملاريا).</li>
                    <li> المصابون بأمراض  الدم الوراثية. </li>
                    <li> المصابون بفقر الدم الحاد.</li>
                    <li> المصابون بالأمراض  المزمنة، مثل السكري، ارتفاع ضغط الدم ، السرطان.</li>
                  </ol>
                </p>
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Features End ====== -->
    <!-- ====== About Start ====== -->
    <section id="about" class="ud-about">
      <div class="container">
        <div class="ud-about-wrapper wow fadeInUp" data-wow-delay=".2s">
          <div class="ud-about-content-wrapper">
            <div class="ud-about-content">
              <span class="tag" style="font-size: 30px;">عنا</span>
              <h2>ملخص مشروعنا :</h2>
              <p>
              تواجه العديد من الجهات المختصة والامراض الذين يريدون الحصول على الدم او التبرع به، في المستشفيات والمرافق الصحية، ويواجه اغلب المرضى صعوبة الحصول على العدد الكافي من المتبرعين بنفس فصيلة الدم المطلوبة وذلك بسبب ندرة بعض فصائل الدم وقد يودي ذلك الى سوء حالة المريض او وفاته. وعند توجه المتبرعين الى بنك الدم للتبرع يواجه بنك الدم بعض المشاكل عند احتفاظه بدم المتبرعين ومنها تخزين الدم لمدة طويلة مما يودي الى ضعف جودة الدم، احتياج بنك الدم الى مساحة كبيرة لتخزين قرب الدم ...الخ، وبسبب هذه المشاكل انبثقت فكره مشروعنا. فمشروعنا عبارة عن بناء موقع إلكتروني يمكن المريض من البحث عن فصيلة الدم المطلوبة والتواصل مع المتبرعين الموجودين بنفس المدينة والمديرية، وفي حالة عدم توفر فصيلة الدم المطلوبة يستطيع المريض النشر لطلب متبرعين. ويستطيع الاشخاص الراغبين بالتبرع بنشر فصائل دمهم وبيانات التواصل بحيث تستطيع المستشفيات والمرافق الصحية والمرضى طلبهم عند الاحتياج لهم.
              </p>
               <p>
              تتمثل أهمية المشروع في إيجاد حلول للمشاكل التي يعاني المريض والمرافق الصحية في صعوبة إيجاد فصائل الدم المطلوبة، وإدخال التكنولوجيا الحديثة في الصحة لمساعدة المرضى في الحصول على الخدمات التي يوفرها الموقع في الحصول على الدم المطلوب بسهولة.
              </p>
              
            </div>
            
          </div>
          <div class="ud-about-image">
            <img src=" public_html/assets/images/t.jpg" style="height:820px" alt="about-image" />
          </div>
        </div>
      </div>
    </section>
    <!-- ====== About End ====== -->

    <!-- ====== Back To Top Start ====== -->
    
    <!-- ====== Back To Top End ====== -->

    <!-- ====== All Javascript Files ====== -->
    <script src=" public_html/assets/js/bootstrap.bundle.min.js"></script>
    <script src=" public_html/assets/js/wow.min.js"></script>
    <script src=" public_html/assets/js/main.js"></script>
    <script>
      // ==== for menu scroll
      const pageLink = document.querySelectorAll(".ud-menu-scroll");

      pageLink.forEach((elem) => {
        elem.addEventListener("click", (e) => {
          e.preventDefault();
          document.querySelector(elem.getAttribute("href")).scrollIntoView({
            behavior: "smooth",
            offsetTop: 1 - 60,
          });
        });
      });

      // section menu active
      function onScroll(event) {
        const sections = document.querySelectorAll(".ud-menu-scroll");
        const scrollPos =
          window.pageYOffset ||
          document.documentElement.scrollTop ||
          document.body.scrollTop;

        for (let i = 0; i < sections.length; i++) {
          const currLink = sections[i];
          const val = currLink.getAttribute("href");
          const refElement = document.querySelector(val);
          const scrollTopMinus = scrollPos + 73;
          if (
            refElement.offsetTop <= scrollTopMinus &&
            refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
          ) {
            document
              .querySelector(".ud-menu-scroll")
              .classList.remove("active");
            currLink.classList.add("active");
          } else {
            currLink.classList.remove("active");
          }
        }
      }

      window.document.addEventListener("scroll", onScroll);
    </script>
  </body>
</html>
