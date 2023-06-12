<!DOCTYPE html>
<html>

<head>

    <!-- صفحة لطباعة البيانات الموجودة في جدول قاعدة البيانات -->


    <title>(testview)print the data in table in database page</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div>


        <?php
        // تعريف معلومات الاتصال بقاعدة البيانات
        $servername = 'localhost';
        $username = 'admin';
        $password = 'admin';
        $dbname = 'accounts';
        
        // إنشاء الاتصال بقاعدة البيانات
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        
        // تعريف استعلام SQL لاسترجاع البيانات من جدول محدد
        // $sql = "SELECT * FROM table_name";
        $sql = 'SELECT * FROM users';
        // تنفيذ الاستعلام وجلب البيانات
        $result = $conn->query($sql);
        echo '<p>Database Name :' . $sql . '</p>';
        echo count($username);
        // عرض البيانات على الصفحة
        if ($result->rowCount() > 0) {
            // بدء جدول HTML
            echo '<table>';
            echo '<tr><th>العنوان</th><th>المحتوى</th></tr>';
        
            // عرض البيانات في صفوف الجدول
            while ($row = $result->fetch()) {
                echo '<tr><td>' . $row['username'] . '</td><td>' . $row['password'] . '</td></tr>';
            }
        
            // إنهاء جدول HTML
            echo '</table>';
        } else {
            echo '0 results';
        }
        
        // إغلاق الاتصال بقاعدة البيانات
        $conn = null;
        
        ?>

        @if (Auth::check())
            <p>مرحبًا بك، {{ Auth::user()->name }}</p>
        @endif
    </div>


</body>

</html>
