<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Lab</title>
<meta name="viewport" content="width=device-width,initial-scale=1" />
<script src="/scripts/jquery-1.9.1.min.js"></script>
<script src="/scripts/jquery.mobile-1.3.2.min.js"></script>
<link rel="stylesheet" href="/scripts/jquery.mobile-1.3.2.min.css" />
<link rel="stylesheet" href="/styles.css" />
</head>
<body>
    <div class="action-list"></div>
    <div data-role="page" data-add-back-btn="true" data-theme="c">
        <div data-role="header">
            <h1>Employee Details</h1>
        </div>
        <div data-role="content">
            <img src="/images/james_king.jpg" class="employee-pic" width="100" />
            <div class="employee-details">
                <h3>James King</h3>
                <p>President and CEO</p>
                <p>Boston, MA</p>
            </div>

            <ul data-role="listview" data-inset="true" class="action-list">
                <li><h4>Call office</h4><p>617-000-0001</p></li>
                <li><h4>Call cell</h4><p>781-000-0001</p></li>
                <li><h4>SMS</h4><p>781-000-0001</p></li>
                <li><h4>Email</h4><p>jking@fakemail.com</p></li>
            </ul>
        </div>
    </div>
</body>
</html>