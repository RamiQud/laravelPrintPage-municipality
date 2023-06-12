<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سند تعهد</title>

    <!-- Tab image -->
    <link rel="icon" href="{{ asset('images/logoCopy.png') }}" type="image/x-icon">
    <!-- Custom CSS file Lonk -->
    <link rel="stylesheet" href="{{ asset('css/CSS-Style.css') }}">


    <!-- Render All Elements Normally -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <!-- Boootstrab -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Js library -->
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <script src="{{ asset('/js/html2canvas.min.js') }}"></script>

</head>

<body>
    <div class="mt-5">
        @if ($errors->any())
            <div class="col-12">
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            </div>
        @endif
        @if (session()->has('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        @if (session()->has('success'))
            <div class="alert alert-success">{{ session('success', 'welcom') }}</div>
        @endif
    </div>

    <!-- starts header section  -->
    <img class="Logo-image other" src="{{ asset('images/logoCopy.png') }}">
    <section class="header other">
        <div class="LinkAndUserName">
            <div class="links">
                <span class="icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                <ul>
                    <li>
                        <a href="#portfolio">بيانات المشتركين</a>
                    </li>
                    <li>
                        <a href="{{ route('dashboard.indexDashborde') }}">لوحة التحكم</a>
                    </li>
                    <li>
                        <a href="{{ route('login.post') }}">تسجيل الخروج</a>
                    </li>

                </ul>
            </div>
            <div class="UserName">
                <p>: إسم المستخدم
                <p style="padding-right:20px;"></p>
                <p id="usernameP">
                    {{ session('username') }}
                </p>

                </p>
            </div>
        </div>
        <!-- Button transformation -->
        <div class="section-button">
            <button class="button demo" onclick="currentDiv(2)">معاينة و طباعة</button>
            <button class="button demo" onclick="currentDiv(1)">نموذج الطلب </button>
        </div>
    </section>
    <!-- End header section  -->
    <!-- Start Sectiones -->
    <div class="Sectiones" id="decument-test-view">


        <div class="content">
            <div class="mySlides mySlides hover-rotate">
                <!-- Start Container section  -->
                <section class="container other">
                    <div class="taahod-title">
                        <p>سند تعهد - إشتراك المياه </p>
                    </div>
                    <form class="Form-Content other" method="POST" action="print.php">

                        <div class="Cart">
                            <label class="form-label" for="input-field">ادخل الاسم رباعياً<div class="required">*</div>
                            </label>
                            <input type="text" id="input-field-1" onkeyup="copyInputValue()" name="input-field-1"
                                required class="form-control">
                        </div>
                        <div class="Cart">
                            <label class="form-label">ادخل رقم الهوية<div class="required">*</div></label>
                            <input type="number" id="input-field-2" onkeyup="copyInputValue()" name="input-field-2"
                                required class="form-control">
                        </div>
                        <div class="Cart">
                            <label class="subscribe form-label">نوع اشتراك المياه :
                                <div class="required">*</div>
                            </label>
                            <select id="input-field-choise-Form-1" class="form-select" name="input-field-choise-Form-1"
                                onchange="copyInputValue()">
                                <option aria-readonly="chose"></option>
                                <option onclick="copySelectedValue()">منزلي</option>
                                <option onclick="copySelectedValue()">تجاري</option>
                                <option onclick="copySelectedValue()">زراعي</option>
                            </select>
                            <script>
                                document.getElementById('[input-field-choise-Form-1]').value = document.getElementById(
                                    '[output-field-choise-Form-1]').value;
                            </script>
                        </div>
                        <div class="Cart">
                            <label class="form-label">ادخل رقم قسيمة الارض<div class="required">*</div></label>
                            <input type="number" id="input-field-3" onkeyup="copyInputValue() " name="input-field-3"
                                required class="form-control">
                        </div>
                        <div class="Cart">
                            <label class="form-label">ادخل رقم قطعة الارض<div class="required">*</div></label>
                            <input type="number" id="input-field-4" onkeyup="copyInputValue() " name="input-field-4"
                                required class="form-control">
                        </div>
                        <div class="Cart">
                            <label class="subscribe form-label">إختر الحي السكني :
                                <div class="required">*</div>
                            </label>
                            <select id="input-field-choise-Form-2" class="form-select" name="input-field-choise-Form-2"
                                onchange="copyInputValue()">
                                <option aria-readonly="chose"></option>
                                <option onclick="copySelectedValue()">قديح</option>
                                <option onclick="copySelectedValue()">النجار</option>
                                <option onclick="copySelectedValue()">القرا</option>
                                <option onclick="copySelectedValue()">الرضوان</option>
                                <option onclick="copySelectedValue()">ابو ريدة</option>
                                <option onclick="copySelectedValue()">ابو روك</option>
                            </select>
                        </div>
                        <div class="Cart" style="width: unset;">
                            <label class="form-label">ملاحظة</label>
                            <input type="text" id="input-field-5" onkeyup="copyInputValue() "
                                name="input-field-5" required class="form-control Note">
                        </div>
                        <div class="Cart">
                            <label class="form-label">ادخل رقم الجوال<div class="required">*</div></label>
                            <input type="number" id="input-field-6" onkeyup="copyInputValue() "
                                name="input-field-6" required class="form-control">
                        </div>
                        <div class="Cart" style="display: none;">
                            <label class="form-label" for="input-field">المقر بما فيه <div class="required">*</div>
                            </label>
                            <input type="text" id="input-field-9" onkeyup="copyInputValue()" name="input-field-9"
                                required class="form-control">
                        </div>
                        <div class="Cart">
                            <label class="form-label">ادخل اسم الشاهد الأول</label>
                            <input type="text" id="input-field-7" onkeyup="copyInputValue() "
                                name="input-field-7" required class="form-control">
                        </div>
                        <div class="Cart">
                            <label class="form-label">ادخل اسم الشاهد الثاني</label>
                            <input type="text" id="input-field-8" onkeyup="copyInputValue() "
                                name="input-field-8" required class="form-control">
                        </div>

                    </form>
                    <div class="Cart Date"></div>
                    <?php
                    echo 'حرر بتاريخ : ' . date('Y/m/d') . '<br>';
                    ?>

            </div>
            </section>
        </div>


        <div class="mySlides mySlides-test">
            <!-- Start test Form For Print -->
         
            <div class="Test-Form" id="myForm" style="padding: 0px 20px 35px 20px;">
                <div class="taahod-title-Test">
                    <p id="Psub">سند تعهد</p>
                </div>
                <form class="Form-Content-test" method="POST" action="{{ route('datacustumer.post') }}"
                    id="myForm">
                    @csrf
                    <div class="Line" style="margin-top: 50px !important;">
                        <div class="inSameLine">
                            <p>أتعهد أنا الموقع أدناه</p>
                            <input type="text" name="CustumerName" id="output-field-1" readonly
                                style="width:200px">
                        </div>

                        <div class="inSameLine">
                            <p>من سكان بلدة خزاعة و أحمل هوية رقم : </p>
                            <input type="text" name="numberId" id="output-field-2" readonly style="width:100px">
                        </div>

                    </div>
                    <div class="Line">
                        <div class="inSameLine">

                            <label class="subscribe form-label">باني تقدمت بطلب لبلدية خزاعة من أجل الحصول على اشتراك
                                مياه</label>
                        </div>
                        <input type="text" name="WaterTypeSubscription" id="output-field-choise-Form-1" readonly
                            style="text-align: inherit;margin-right: 3px;width:50px;    margin-top: -12px;    ">
                        <p> جديد و الواقع على أرض القسيمة رقم </p>
                        <input type="text" name="LandVoucherNumber" id="output-field-3" readonly
                            style="width:100px">
                    </div>
                    <div class="inSameLine">
                        <p>من القطعة رقم</p>
                        <input type="text" name="PieceOfLandNumber" id="output-field-4" readonly
                            style="width: 56px;">
                        <p>من أراضي خزاعة حي </p>

                        <input type="text" name="neighborhood" id="output-field-choise-Form-2" readonly
                            style="width:50px">
                    </div>
                    <div class="inSameLine">
                        <p>حيث أن البلدية وافقت على منح الإشتراك بشرط أن ألتزم أمامها بأن أقوم بدفع ما يتم استهلاكه من
                            مياه شهرياً بتاريخ 5 من كل شهر . كما أتعهد بعدم تجاوز كمية الاستهلاك الشهري عن 10 كوب
                            شهرياً.</p>
                    </div>
                    <div class="inSameLine" style="margin-top: -10px;">
                        <p>كما أتعهد بعدم إعطاء أي شخص أخر من هذا الاشتراك .</p>
                    </div>
                    <div class="inSameLine" style="padding-left: 20px;">
                        <p>وفي حال عدم إلتزامي بذلك يحق للبلدية أن تقوم بفصل الإشتراك عني و إتخاذ كافة الإجراءات
                            القانونية من أجل تحصيل المستحقات المسجلة عليه .</p>
                    </div>
                    <div class="Line">
                        <label class="form-label"> ملاحظة /</label>
                        <input type="text" name="note" id="output-field-5" readonly
                            style="width: 644px;height: 30px;margin-top: -13px;">
                    </div>
                    <div class="inSameLine" style="justify-content: center;font-weight: 800;">
                        <p>وهذا تعهد مني بذلك وقعت عليه بمحض إرادتي وبدون إكراه من أحد.</p>
                    </div>
                    <div class="Line Date flxcolumn" style="display:block;margin-top: 100px !important;">
                        <p>حرر بتاريخ

                            <input type="text" name="exportDate" value="<?php echo date('Y/m/d'); ?>">
                        </p>


                        <div class="Line">
                            <label class="form-label"> رقم الجوال </label>
                            <input type="text" name="mobileNumber" id="output-field-6" readonly
                                style="width:150px; margin-top: -7px;">
                        </div>
                    </div>
                    <div class="flxcolumn"
                        style="align-items: flex-end; margin-left: 50px;position: relative;top: -87px;">
                        <div class="flxcolumn">
                            <label class="form-label" style="text-decoration: underline 2px;margin-bottom:10px;">المقر
                                بما فيه :</label>
                            <input type="text" name="output-field-9" id="output-field-9" readonly
                                style="width: 230px;text-align: center;">
                        </div>
                    </div>

                    <div class="inSameLine" style="display: flex;justify-content: space-around; margin-top: 0;">
                        <div class="Line flxcolumn ">
                            <label class="form-label"
                                style="text-decoration: underline 2px;    text-align: center;">الشاهد الأول</label>
                            <input type="text" name="firstWitness" id="output-field-7" readonly
                                style="width:200px;text-align: center;">
                        </div>
                        <div class="Line flxcolumn ">
                            <label class="form-label"
                                style="text-decoration: underline 2px;    text-align: center;">الشاهد الثاني</label>
                            <input type="text" name="secondWitness" id="output-field-8" readonly
                                style="width:200px;text-align: center;">
                        </div>
                    </div>
                    <div class="inSameLine">
                        <label for="input-field" style="text-decoration: underline 2px;margin-top: 30px;">إعتماد
                            الشؤون القانونية بالبلدية</label>
                    </div>
                    
                    <button id="printButton" type="submit" class="btn btn-primary other"
                        style="margin-top: 85px;width: 100%;"  onclick="printAndSaveForm()" >
                        <h6>إطبع</h6>
                    </button>
                </form>
            
             

            </div>
            <!-- End Container section  -->
        </div>
    </div>


    <script>
        function copyInputValue() {
            // جلب قيمة حقل الإدخال وتعيينها كقيمة لحقل آخر
            var inputFields = document.querySelectorAll(
                "#input-field-1, #input-field-2, #input-field-3, #input-field-4, #input-field-5,#input-field-choise-Form-2, #input-field-6, #input-field-7, #input-field-8, #input-field-9,#input-field-choise-Form-1"
            );
            var outputFields = document.querySelectorAll(
                "#output-field-1, #output-field-2, #output-field-3, #output-field-4, #output-field-5,#output-field-choise-Form-2, #output-field-6, #output-field-7, #output-field-8, #output-field-9,#output-field-choise-Form-1"
            );
            var copyValue = [];
            for (var i = 0; i < inputFields.length; i++) {
                outputFields[i].value = inputFields[i].value;
                if (inputFields[i] == document.querySelector('#input-field-1')) {
                    outputFields[2].value = inputFields[0].value;
                    copyValue = outputFields[2].value;
                    document.querySelector('#input-field-9').value = copyValue;

                }
            }
        }
    </script>

    <script>
        function copySelectedValue() {
            var selectedOption = document.getElementById("my-select").value;
            // تنفيذ الأمر الذي تريده باستخدام selectedOption
            console.log(selectedOption);
        }
    </script>
    <script>
        function printAndSaveForm() {
    // إظهار الـ form المطلوب
    var myForm = document.getElementById("myForm");
    myForm.style.display = "block";
    myForm.style.border = "none";

    // إخفاء العناصر الأخرى في الصفحة
    var otherElements = document.getElementsByClassName("other");
    for (var i = 0; i < otherElements.length; i++) {
        otherElements[i].style.display = "none";
    }

    // تحويل الـ form إلى صورة باستخدام html2canvas.js
    html2canvas(myForm).then(function(canvas) {
        // حفظ الصورة باستخدام FileSaver.js
        canvas.toBlob(function(blob) {
            saveAs(blob, "form.png");
        });
    });

    // طباعة الـ form باستخدام PHP
    window.print();

    // إعادة عرض العناصر الأخرى في الصفحة
    for (var i = 0; i < otherElements.length; i++) {
        otherElements[i].style.display = "";
    }
}


    </script>
    <script>
        // اضافة حدث النقر على زر الطباعة
        window.onbeforeprint = function() {
            // الحصول على عنصر form وعنصر الاسم وتوليد رقم تسلسلي
            var myForm = document.getElementById("myForm");
            var usernameP = document.getElementById("usernameP").innerHTML;
            var timestamp = new Date();

            // توليد اسم الملف باستخدام اسم المستخدم والتسلسل الزمني
            var filename = usernameP + "_" + timestamp + ".png";

            // تحويل الـ form إلى صورة وحفظها في الملف المطلوب
            html2canvas(myForm).then(function(canvas) {
                download(canvas.toDataURL(), filename);
            });
        };

        // دالة لحفظ الملف في الجهاز
        function download(url, filename) {
            var element = document.createElement('a');
            element.setAttribute('href', url);
            element.setAttribute('download', filename);

            element.style.display = 'none';
            document.body.appendChild(element);
            element.click();
            document.body.removeChild(element);
        }
    </script>
    <script>
        // script for make button to traslation section
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function currentDiv(n) {
            showDivs(slideIndex = n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides ");
            var dots = document.getElementsByClassName("demo ");
            if (n > x.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = x.length
            }
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none ";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace("red ", " ");
            }
            x[slideIndex - 1].style.display = "flex ";
            dots[slideIndex - 1].className += "red ";
        }
    </script>




</body>

</html>
