<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="sidebar">
        <h2>Admin Dashboard</h2>
        <ul>
            <li><a href="#books">books</a></li>
            <li><a href="#borrowed-books">borrowed-books</a></li>
            <li><a href="#users">users</a></li>
        </ul>
    </div>

    <div class="main-content">
        <section id="books">
            <h2>الكتب المتاحة</h2>
            <table>
                <thead>
                    <tr>
                        <th>اسم الكتاب</th>
                        <th>المؤلف</th>
                        <th>الحالة</th>
                        <th>عدد النسخ</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- البيانات تأتي من قاعدة البيانات -->
                </tbody>
            </table>
        </section>

        <section id="borrowed-books">
            <h2>الكتب المعارة</h2>
            <table>
                <thead>
                    <tr>
                        <th>اسم الكتاب</th>
                        <th>المستعير</th>
                        <th>تاريخ الإعارة</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- البيانات تأتي من قاعدة البيانات -->
                </tbody>
            </table>
        </section>

        <section id="users">
            <h2>المستخدمين</h2>
            <table>
                <thead>
                    <tr>
                        <th>اسم المستخدم</th>
                        <th>البريد الإلكتروني</th>
                        <th>عدد الكتب المعارة</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- البيانات تأتي من قاعدة البيانات -->
                </tbody>
            </table>
        </section>
    </div>

    <script src="script.js"></script>
</body>
</html>
