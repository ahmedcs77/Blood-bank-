
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
    <link rel="shortcut icon" href="assets/images/favicon.png" />

    <!-- ===== All CSS files ===== -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/lineicons.css" />
    <link rel="stylesheet" href="assets/css/ud-styles.css" />
</head>
<body>
    <?php 
                
                session_start();
                include('auth/alert.php');
                
    if (isset($_POST['send'])) {
        // الحصول على بيانات النموذج
        $name = htmlspecialchars($_POST['fullName']);
        $phone = htmlspecialchars($_POST['phone']);
        $emailinput = htmlspecialchars($_POST['email']);
        // $mail = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);
        
        // التحقق من صحة البيانات
        if (!empty($name) && !empty($phone) && !empty($emailinput) && !empty($message) ) {
            
          $to = "blood00bank@gmail.com";
          $subject = "الرسالة من call me الاسم المرسل " . $name;
          $email_message = "نص الرسالة هي \r\n من صفحة تواصل معنا :" . "\r\n حساب المرسل  " . $phone . "\r\n الرسالة هي: " . $message . "\r\n انتهت الرسالة ";
          $headers = "From: blood00bank@gmail.com\r\n";
          
          if (mail($to, $subject, $email_message, $headers)) {
              $_SESSION['success']="تم ارسال البريد شكرا لكم";
              $emailinput = "";
              $incoming_message = "";
              $phone = "";
              $name = "";
              header('location:call_me.php');
          } else {
             $_SESSION['error']="فشلت العملية";
          }
          
            
            
                   
    }
 } else {
    ?>

    <!-- ====== Contact Start ====== -->
    <section id="contact" class="ud-contact">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-5">
                    <div class="ud-contact-form-wrapper wow fadeInUp" data-wow-delay=".2s">
                        <h3 class="ud-contact-form-title">اكتب رسالتك</h3>
                        <form class="ud-contact-form" action="call_me.php" method="post">
                            <div class="ud-form-group">
                                <label for="fullName">الاسم</label>
                                <input type="text" name="fullName" placeholder="اسمك" required />
                            </div>
                            <div class="ud-form-group">
                                <label for="email">البريد الإلكتروني</label>
                                <input type="text" name="email"  id="email"  pattern="[A-Z a-z @ .]" placeholder="example@gmail.com" required />
                            </div>
                            <div class="ud-form-group">
                                <label for="phone">رقم التلفون</label>
                                <input type="tel" name="phone" id="phone" placeholder="+(967)xxx-xxx-xxx" pattern="[0-9]{9}" maxlength="9" required />
                            </div>
                            <div class="ud-form-group">
                                <label for="message">عنوان الرسالة</label>
                                <textarea name="message" rows="4" placeholder="اكتب رسالتك هنا..." required></textarea>
                            </div>
                            <div class="ud-form-group mb-0">
                                <button type="submit" name="send" class="ud-main-btn">إرسال الرسالة</button>
                                <a class="ud-main-btn ud-white-btn" href="index.php">رجوع</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="ud-contact-content-wrapper">
                        <div class="ud-contact-title" dir="rtl">
                            <span style="font-size: 60px;">تواصل معنا</span>
                            <h3>
                                رأيك يهمنا.. <br />
                                راسلنا الآن إذا كان لديك اقتراح أو مشاكل..!
                            </h3>
                        </div>
                        <div class="ud-contact-info-wrapper" dir="rtl">
                            <div class="ud-single-info">
                                <div class="ud-info-icon" style="margin-left: 10px;">
                                    <i class="lni lni-map-marker"></i>
                                </div>
                                <div class="ud-info-meta">
                                    <h4>موقعنا</h4>
                                    <p>حدة * شارع إيران * جوار شركة تويوتا</p>
                                </div>
                            </div>
                            <div class="ud-single-info">
                                <div class="ud-info-icon" style="margin-left: 10px;">
                                    <i class="lni lni-phone"></i>
                                </div>
                                <div class="ud-info-meta">
                                    <h4>هاتف</h4>
                                    <p>776667701</p>
                                </div>
                            </div>
                            <div class="ud-single-info">
                                <div class="ud-info-icon" style="margin-left: 10px;">
                                    <i class="lni lni-envelope"></i>
                                </div>
                                <div class="ud-info-meta">
                                    <h4>كيف يمكنك التواصل معنا؟</h4>
                                    <p>blood00bank@gmail.com</p>
                                    <p>bloodssysyemen@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Contact End ====== -->

    <!-- ====== All Javascript Files ====== -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
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
            const scrollPos = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;

            for (let i = 0; i < sections.length; i++) {
                const currLink = sections[i];
                const val = currLink.getAttribute("href");
                const refElement = document.querySelector(val);
                const scrollTopMinus = scrollPos + 73;
                if (
                    refElement.offsetTop <= scrollTopMinus &&
                    refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
                ) {
                    document.querySelector(".ud-menu-scroll").classList.remove("active");
                    currLink.classList.add("active");
                } else {
                    currLink.classList.remove("active");
                }
            }
        }

document.getElementById('email').addEventListener('input', function (event) {
    const input = event.target;
    const value = input.value;
    const regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    // التحقق من صحة البريد الإلكتروني أثناء الإدخال
    if (!regex.test(value)) {
        // التحقق من أن القيمة تحتوي على "@" وتحتوي على نقطة بعد العلامة "@" وبعد النقطة تكون الأحرف الصالحة
        if (value.includes('@') && value.includes('.') && value.split('@')[1].split('.')[1].length > 1) {
            input.setCustomValidity('');
        } else {
            input.setCustomValidity('يرجى إدخال عنوان بريد إلكتروني صالح.');
        }
    } else {
        input.setCustomValidity('');
    }
});

    document.getElementById('phone').addEventListener('input', function (event) {
        const input = event.target;
        const value = input.value;
        const regex = /^[0-9]*$/;
        if (!regex.test(value)) {
            input.value = value.replace(/[^0-9]/g, '');
        }
    });

    </script>
</body>
</html>
<?php
}
?>
